<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$database = "cv";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
class Database {
    private $connection;

    function __construct() {
        try {
            $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if ($this->connection->connect_error) {
                throw new Exception("Connection failed: " . $this->connection->connect_error);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    private function getBindParmsDataType($data) {
        $dt = '';
        foreach ($data as $values) {
            if (is_float($values)) $dt .= 'd';
            elseif (is_integer($values)) $dt .= 'i';
            elseif (is_string($values)) $dt .= 's';
            else $dt .= 'b';
        }
        return $dt;
    }

    private function getlabels($values) {
        if (!is_array($values)) {
            throw new InvalidArgumentException("Expected an array, got " . gettype($values));
        }

        $label = "";
        foreach ($values as $value) {
            $label .= '?,';
        }
        $label = rtrim($label, ',');
        return $label;
    }

    private function getlabelswithnames($columns) {
        $label = "";
        $columns = explode(',', $columns);
        foreach ($columns as $column) {
            $label .= $column . '=?,';
        }
        $label = rtrim($label, ',');
        return $label;
    }

    public function prepare($query) {
        return $this->connection->prepare($query);
    }

    public function clean($data) {
        return $this->connection->real_escape_string($data);
    }

    public function insert($table, $columns, $values) {
        if (!is_array($columns)) {
            throw new Exception("Columns must be an array");
        }

        if (!is_array($values) || !is_array($values[0])) {
            throw new Exception("Values must be an array of arrays");
        }

        $columnNames = implode(', ', $columns);
        $placeholders = implode(', ', array_fill(0, count($columns), '?'));
        $query = "INSERT INTO `$table` ($columnNames) VALUES ($placeholders)";
        
        $obj = $this->connection->prepare($query);
        if ($obj === false) {
            throw new Exception("Prepare failed: " . $this->connection->error);
        }

        foreach ($values as $rowValues) {
            $types = $this->getBindParmsDataType($rowValues);
            $obj->bind_param($types, ...$rowValues);
            $obj->execute();
            if ($obj->error) {
                throw new Exception("Execute failed: " . $obj->error);
            }
        }

        $obj->close();
        return true;
    }

    public function read($table, $columns = "id, email_id", $conditions = '') {
        $query = "SELECT $columns FROM $table $conditions";
        error_log("Executing query: $query");
        $result = $this->connection->query($query);
        if ($result === false) {
            error_log("Query failed: " . $this->connection->error);
            throw new Exception("Query failed: " . $this->connection->error);
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function delete($table, $condition) {
        $query = "DELETE FROM $table WHERE $condition";
        $result = $this->connection->query($query);
        if ($result === false) {
            throw new Exception("Query failed: " . $this->connection->error);
        }
        return $result;
    }

    public function update($table, $columns, $values, $condition) {
        // Verify that columns and values are correctly matched
        if (count($columns) !== count($values)) {
            error_log("Mismatch between columns and values count.");
            throw new Exception("Mismatch between columns and values.");
        }
    
        $label = $this->getlabelswithnames($columns); // Ensure correct format: "column1 = ?, column2 = ?"
        $query = "UPDATE $table SET $label WHERE $condition";
    
        error_log("Debug Query: " . $query); // Debug: Log the query
    
        $obj = $this->connection->prepare($query);
        if ($obj === false) {
            error_log("Prepare failed: " . $this->connection->error); // Log preparation error
            throw new Exception("Prepare failed: " . $this->connection->error);
        }
    
        $types = $this->getBindParmsDataType($values);
        error_log("Bind Params Data Type: " . $types); // Debug: Log bind types
        error_log("Values: " . print_r($values, true)); // Debug: Log values to be bound
    
        $obj->bind_param($types, ...$values);
    
        if (!$obj->execute()) {
            error_log("Execute failed: " . $obj->error); // Log execution error
            throw new Exception("Execute failed: " . $obj->error);
        }
    
        $obj->close();
    }
    
    
}    

// Testing the read method

?>
