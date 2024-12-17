<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$database = "cv";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch resumes data from the first table
$query1 = "SELECT name, objective, url FROM cvb1";
$result1 = $conn->query($query1);

$query2 = "SELECT name, objective, url FROM cvb2";
$result2 = $conn->query($query2);

$query3 = "SELECT name, objective, url FROM cvb3";
$result3 = $conn->query($query3);

$query4= "SELECT name, objective, url FROM cvb4";
$result4 = $conn->query($query4);

$query5 = "SELECT name, objective, url FROM cvb5";
$result5 = $conn->query($query5);

$querycl6= "SELECT name, introduction, url FROM clb1";
$resultcl6 = $conn->query($querycl6);

// Define $resumes array
$resumes = [];
$cover = [];

// Check if any resumes are found in the first table
if ($result1->num_rows > 0) {
    // Fetch data and construct $resumes array from the first table
    while ($row = $result1->fetch_assoc()) {
        $resumes[] = $row; // Add each row to $resumes array
    }
}

// Check if any resumes are found in the second table
if ($result2->num_rows > 0) {
    // Fetch data and construct $resumes array from the second table
    while ($row = $result2->fetch_assoc()) {
        $resumes[] = $row; // Add each row to $resumes array
    }
}

if ($result3->num_rows > 0) {
    // Fetch data and construct $resumes array from the third table
    while ($row = $result3->fetch_assoc()) {
        $resumes[] = $row; // Add each row to $resumes array
    }
}

if ($result4->num_rows > 0) {
    // Fetch data and construct $resumes array from the fourth table
    while ($row = $result4->fetch_assoc()) {
        $resumes[] = $row; // Add each row to $resumes array
    }
}

if ($result5->num_rows > 0) {
    // Fetch data and construct $resumes array from the fifth table
    while ($row = $result5->fetch_assoc()) {
        $resumes[] = $row; // Add each row to $resumes array
    }
}

if ($resultcl6->num_rows > 0) {
    // Fetch data and construct $resumes array from the sixth table
    while ($row = $resultcl6->fetch_assoc()) {
        $cover[] = $row; // Add each row to $cover array
    }
}

// Close connection
$conn->close();
?>





<style>
/* CSS */
.button-33 {
  background-color: #c2fbd7;
  border-radius: 100px;
  box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset, rgba(44, 187, 99, .15) 0 1px 2px, rgba(44, 187, 99, .15) 0 2px 4px, rgba(44, 187, 99, .15) 0 4px 8px, rgba(44, 187, 99, .15) 0 8px 16px, rgba(44, 187, 99, .15) 0 16px 32px;
  color: green;
  cursor: pointer;
  display: inline-block;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  transition: all 250ms;
  border: 0;
  font-size: 16px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-33:hover {
  box-shadow: rgba(44, 187, 99, .35) 0 -25px 18px -14px inset, rgba(44, 187, 99, .25) 0 1px 2px, rgba(44, 187, 99, .25) 0 2px 4px, rgba(44, 187, 99, .25) 0 4px 8px, rgba(44, 187, 99, .25) 0 8px 16px, rgba(44, 187, 99, .25) 0 16px 32px;
  transform: scale(1.05) rotate(-1deg);
}

.floating-container {
    position: fixed;
    bottom: 20px;
    right: 20px;
    display: flex;
    flex-direction: row; /* Align items horizontally */
    align-items: center;
    z-index: 1000; /* Ensure the floating container is on top of other elements */
}

.button-85 {
    margin-right: 10px; /* Space between the button and the plus icon */
    z-index: 1001; /* Ensure it's on top of other elements */
}

.floating-controls {
    display: flex;
    flex-direction: column; /* Align the plus icon and menu vertically */
    align-items: center;
    z-index: 1002; /* Ensure it's on top of other elements */
}

.floating-button {
    background-color:#01050a;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 30px;
    cursor: pointer;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease;
    z-index: 1003; /* Ensure it's on top of other elements */
}

.floating-menu {
    display: none;
    flex-direction: column;
    position: absolute;
    bottom: 70px; /* Position the menu above the plus icon */
    right: 0;
    align-items: center;
    z-index: 1004; /* Ensure it's on top of other elements */
}

.floating-menu button {
    background-color:#01050a;
    border-radius: 20px;
    padding: 10px 20px;
    margin: 5px 0;
    border: none;
    color: white;
    cursor: pointer;
    transition: transform 0.3s ease;
    box-shadow: rgba(0, 0, 0, .2) 0 -25px 18px -14px inset, 
        rgba(0, 0, 0, .15) 0 1px 2px, 
        rgba(0, 0, 0, .15) 0 2px 4px, 
        rgba(0, 0, 0, .15) 0 4px 8px, 
        rgba(0, 0, 0, .15) 0 8px 16px, 
        rgba(0, 0, 0, .15) 0 16px 32px;
}

.floating-menu button:hover {
    transform: scale(1.05);
    box-shadow: rgba(44, 187, 99, .35) 0 -25px 18px -14px inset, rgba(44, 187, 99, .25) 0 1px 2px, rgba(44, 187, 99, .25) 0 2px 4px, rgba(44, 187, 99, .25) 0 4px 8px, rgba(44, 187, 99, .25) 0 8px 16px, rgba(44, 187, 99, .25) 0 16px 32px;
}


.btn {
  transition: all 0.3s ease-in-out;
  font-family: "Dosis", sans-serif;
}

.button-85 {
  padding: 0.6em 2em;
  border: none;
  outline: none;
  color: rgb(255, 255, 255);
  background: #111;
  cursor: pointer;
  position: relative;
  z-index: 0;
  border-radius: 10px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-85:before {
  content: "";
  background: linear-gradient(
    45deg,
    #ff0000,
    #ff7300,
    #fffb00,
    #48ff00,
    #00ffd5,
    #002bff,
    #7a00ff,
    #ff00c8,
    #ff0000
  );
  position: absolute;
  top: -2px;
  left: -2px;
  background-size: 400%;
  z-index: -1;
  filter: blur(5px);
  -webkit-filter: blur(5px);
  width: calc(100% + 4px);
  height: calc(100% + 4px);
  animation: glowing-button-85 20s linear infinite;
  transition: opacity 0.3s ease-in-out;
  border-radius: 10px;
}

@keyframes glowing-button-85 {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 400% 0;
  }
  100% {
    background-position: 0 0;
  }
}

.button-85:after {
  z-index: -1;
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: #222;
  left: 0;
  top: 0;
  border-radius: 10px;
}
.card {
    background-image: url('bg2.jpg');
    background-size: cover; /* Ensures the image covers the entire card */
    background-position: center; /* Centers the image */
    background-repeat: no-repeat; /* Prevents the image from repeating */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 
                0 1px 3px rgba(0, 0, 0, 0.08); /* Shadow effect */
    transition: box-shadow 0.3s ease-in-out;
    border-radius: 8px; /* Optional: Adds rounded corners */
}

.card-body {
    background-color:transparent;/* Adds a semi-transparent background to the text */
    padding: 20px; /* Adjust the padding as needed */
    border-radius: 8px; /* Matches the card's rounded corners */
}

.card:hover {
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2), 
                0 3px 5px rgba(0, 0, 0, 0.12);
}

.resume-card {
    background-image: url('resumebg.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.cover-card {
    background-image: url('bg3.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}







</style>

<div class="container">
    <div class="floating-container">
        <button class="button-85" role="button" onclick="window.location.href='<?= $action->helper->url('dashboard') ?>'">Back to Dashboard</button>
        <div class="floating-controls">
            <div class="floating-button" onclick="toggleMenu()">
                <i class="bi bi-plus"></i>
            </div>
            <div class="floating-menu">
                <button onclick="window.location.href='<?= $action->helper->url('select-template') ?>'">Create Resume</button>
                <button onclick="window.location.href='<?= $action->helper->url('select-letter-template') ?>'">Create Cover Letter</button>
            </div>
        </div>
    </div>

    <?php
if (count($resumes) > 0) {
    foreach ($resumes as $resume) {
        ?>
        <div class="card my-3 resume-card">
            <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($resume['name']) ?></h5>
                <p class="card-text"><?= htmlspecialchars($resume['objective']) ?></p>
                
                <a href="<?= htmlspecialchars($action->helper->url("resume/" . $resume['url']), ENT_QUOTES, 'UTF-8') ?>" class="btn btn-sm btn-primary">
                    <i class="bi bi-eye"></i> View
                </a>
                <a href="<?= htmlspecialchars($action->helper->url("action/deleteresume/" . $resume['url']), ENT_QUOTES, 'UTF-8') ?>" class="btn btn-sm btn-danger">
                    <i class="bi bi-trash3"></i> Delete
                </a>
                <a href="#" class="btn btn-sm btn-warning" onclick="copyurl('<?= htmlspecialchars($action->helper->url('resume/' . $resume['url']), ENT_QUOTES, 'UTF-8') ?>')">
                    <i class="bi bi-clipboard2"></i> Copy URL
                </a>
            </div>
        </div>
        <?php
    }
} else {
    ?>
    <div class="card my-3 resume-card">
        <div class="card-body">
            <h1 class="text-center text-muted">
                <i class="bi bi-cloud-drizzle"></i> No resume is created 
            </h1>
        </div>
    </div>
    <?php
}
?>

<?php
if (count($cover) > 0) {
    foreach ($cover as $cov) {
        ?>
        <div class="card my-3 cover-card">
            <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($cov['name']) ?></h5>
                <p class="card-text"><?= htmlspecialchars($cov['introduction']) ?></p>
                
                <a href="<?= htmlspecialchars($action->helper->url("cover/" . $cov['url']), ENT_QUOTES, 'UTF-8') ?>" class="btn btn-sm btn-primary">
                    <i class="bi bi-eye"></i> View
                </a>
                <a href="<?= htmlspecialchars($action->helper->url("action/deletecover/" . $cov['url']), ENT_QUOTES, 'UTF-8') ?>" class="btn btn-sm btn-danger">
                    <i class="bi bi-trash3"></i> Delete
                </a>
                <a href="#" class="btn btn-sm btn-warning" onclick="copyurl('<?= htmlspecialchars($action->helper->url('resume/' . $cov['url']), ENT_QUOTES, 'UTF-8') ?>')">
                    <i class="bi bi-clipboard2"></i> Copy URL
                </a>
            </div>
        </div>
        <?php
    }
} else {
    ?>
    <div class="card my-3 cover-card">
        <div class="card-body">
            <h1 class="text-center text-muted">
                <i class="bi bi-cloud-drizzle"></i> No cover letter is created 
            </h1>
        </div>
    </div>
    <?php
}
?>


<script>
    function toggleMenu() {
        const menu = document.querySelector('.floating-menu');
        menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
    }
</script>
