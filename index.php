<?php

require('dnlib/load.php');
require_once('dnlib/class/database.class.php');


// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$database = "cv";

// Create connection
$conn = new mysqli($servername,$username,$password,$database);

global $action;


$action->helper->route('/', function(){
    global $action;
    $action->onlyForUnauthUser();
    $data['title'] = 'CareerCraft choose your path';

    $action->view->load('home',$data);
 
});


// Template all filling
$action->helper->route('cv-details/$cvtype', function($data) {
    global $action;
    $action->onlyForAuthUser();
    $data['title'] = "CareerCraft details";
    $data['myresume'] = 'active';
    $action->view->load('header', $data);
    $action->view->load('navbar', $data);
    // Ensure data type and non-empty value for cvtype
    if (isset($data['cvtype']) && !empty($data['cvtype']) && is_numeric($data['cvtype'])) {
        // Store cvtype in session
        $action->session->set('cvtype', (int)$data['cvtype']); 
        switch ((int)$data['cvtype']) {
            case 1:
                $action->view->load('cv_details_1');
                break;
            case 2:
                $action->view->load('cv_details_2');
                break;
            case 3:
                $action->view->load('cv_details_3');
                break;
                case 4:
                    $action->view->load('cv_details_4');
                    break;
                    case 5:
                        $action->view->load('cv_details_5');
                        break;
            default:
                $action->session->set('error', 'Select the correct template you want');
                $action->helper->redirect('select-template');
                exit(); // Ensure no further code is executed
        }
    } else {
        $action->session->set('error', 'Invalid template selection');
        $action->helper->redirect('select-template');
        exit(); // Ensure no further code is executed
    }
    $action->view->load('footer');
});


//cover letter filling
$action->helper->route('cl-details/$cltype', function($data) {
    global $action;
    $action->onlyForAuthUser();
    $data['title'] = "CareerCrat details";
    $data['myresume'] = 'active';
    $action->view->load('header', $data);
    $action->view->load('navbar', $data);
    // Ensure data type and non-empty value for cvtype
    if (isset($data['cltype']) && !empty($data['cltype']) && is_numeric($data['cltype'])) {
        // Store cvtype in session
        $action->session->set('cltype', (int)$data['cltype']); 
        switch ((int)$data['cltype']) {
            case 1:
                $action->view->load('cover_detail');
                break;
            case 2:
                $action->view->load('cv_details_2');
                break;
            case 3:
                $action->view->load('cv_details_3');
                break;
                case 4:
                    $action->view->load('cv_details_4');
                    break;
                    case 5:
                        $action->view->load('cv_details_5');
                        break;
            default:
                $action->session->set('error', 'Select the correct template you want');
                $action->helper->redirect('select-template');
                exit(); // Ensure no further code is executed
        }
    } else {
        $action->session->set('error', 'Invalid template selection');
        $action->helper->redirect('select-template');
        exit(); // Ensure no further code is executed
    }
    $action->view->load('footer');
});




//displaying content
$action->helper->route('resume/$url', function($data) {
    global $action;
    $action->onlyForAuthUser();
    // Use prepared statements to prevent SQL injection
    $tables = ['cvb1', 'cvb2', 'cvb3', 'cvb4', 'cvb5'];
    $found = false; 
    foreach ($tables as $table) {
        $stmt = $action->db->prepare("SELECT * FROM $table WHERE url = ?");
        $stmt->bind_param("s", $data['url']); // Bind the $url parameter to the prepared statement
        $stmt->execute(); // Execute the statement
        $result = $stmt->get_result(); // Get the result set from the executed statement
        $resumedata = $result->fetch_assoc(); // Fetch the associative array
        $stmt->close();
        if ($resumedata) {
            // If data found in this table, load the corresponding view
            $data['resume'] = $resumedata;
            $data['title'] = $resumedata['name'];
            // Adjust view name based on table name
            if ($table == 'resumes') {
                // Set view name explicitly for resumes table
                $view_name = 'cv_content_1';
            } else {
                // For other tables, extract the number and use it
                $view_name = "cv_content_" . substr($table, -1);
            }
            $action->view->load($view_name, $data);
            $found = true;
            break; // Exit loop once data is found
        }
    }
    if (!$found) {
        // If not found in any table, redirect to home
        $action->helper->redirect('home');
        exit();
    }
});


//displaying all cover letter content
$action->helper->route('cover/$url', function($data) {
    global $action;
    $action->onlyForAuthUser();
    // Use prepared statements to prevent SQL injection
    $tables = ['clb1'];
    $found = false;
    foreach ($tables as $table) {
        $stmt = $action->db->prepare("SELECT * FROM $table WHERE url = ?");
        $stmt->bind_param("s", $data['url']); // Bind the $url parameter to the prepared statement
        $stmt->execute(); // Execute the statement
        $result = $stmt->get_result(); // Get the result set from the executed statement
        $resumedata = $result->fetch_assoc(); // Fetch the associative array
        $stmt->close();
        if ($resumedata) {
            // If data found in this table, load the corresponding view
            $data['cover'] = $resumedata;
            $data['title'] = $resumedata['name'];
            // Adjust view name based on table name
            if ($table == 'clb1') {
                // Set view name explicitly for resumes table
                $view_name = 'cover_content';
            } 
            $action->view->load($view_name, $data);
            $found = true;
            break; // Exit loop once data is found
        }
    }
    if (!$found) {
        // If not found in any table, redirect to home
        $action->helper->redirect('home');
        exit();
    }
});


//slecting cv templates
$action->helper->route('select-template', function(){
    global $action;
    $action->onlyForAuthUser();
    $data['title'] ="Select CV template";
    $data['myresume'] = 'active';
    $action->view->load('header',$data);
    $action->view->load('navbar',$data);
        $action->view->load('template_content_1');
    $action->view->load('footer');
});


//selectign cover letter templates
$action->helper->route('select-letter-template', function(){
    global $action;
    $action->onlyForAuthUser();
    $data['title'] ="Select Cl template";
    $data['myresume'] = 'active';
    $action->view->load('header',$data);
    $action->view->load('navbar',$data);
        $action->view->load('cover_template');
    $action->view->load('footer');
});


// Home form
$action->helper->route('home', function(){
    global $action;
    $action->onlyForAuthUser();
    $data['title'] = 'CareerCraft My Resumes';
    $data['myresume'] = 'active';
    $action->db->read('cvb1','*',"WHERE user_id=".$action->user_id());
    $action->view->load('header',$data);
    $action->view->load('navbar',$data);
    $action->view->load('home_content',$data);
    $action->view->load('footer');
});

//chatbot integration page
$action->helper->route('chatbot', function(){
    global $action;
    $action->onlyForAuthUser();
    $data['title'] = 'CareerCraft chatbot';
    $action->view->load('chatbot',$data);
});

//companies listed page
$action->helper->route('companies-list', function(){
    global $action;
    $action->onlyForAuthUser();
    $data['title'] = 'CareerCraft companies list';
    $action->view->load('companies',$data);
});

//Career guide route
$action->helper->route('career-guide', function(){
    global $action;
    $action->onlyForAuthUser();
    $data['title'] = 'Career Guide';
    $action->view->load('header',$data);
    $action->view->load('navbar',$data);
    $action->view->load('career_guide',$data);
});

//dashboard route
$action->helper->route('dashboard', function(){
    global $action;
    $action->onlyForAuthUser();
    $data['title'] = 'CareerCraft dashboard';
    $action->view->load('dashboard_page',$data);
});


// Login form
$action->helper->route('login', function(){
    global $action;
    $action->onlyForUnauthUser();
    $data['title'] = 'Login-CareerCraft';

    $action->view->load('login');
    $action->session->set('success','logged in !!');
});


// Signup form
$action->helper->route('signup', function(){
    global $action;
    $action->onlyForUnauthUser();
    $data['title'] = 'Signup-CareerCraft';

    $action->view->load('signup');
    $action->session->set('success','Created Account successfully !!');
});


// Logout form
$action->helper->route('action/logout', function(){
    global $action;
   $action->session->delete('Auth');
   $action->session->set('success','Logged out !');
   $action->helper->redirect('login');
});

$action->helper->route('action/deleteresume/$url', function($data) {
    global $action;
    $url = $data['url'];
    $tables = ['cvb1', 'cvb2', 'cvb3', 'cvb4', 'cvb5'];

    foreach ($tables as $table) {
        try {
            $action->db->delete($table, "url='$url'");
        } catch (Exception $e) {
            // Handle the exception (e.g., log the error)
            echo "Error deleting from $table: " . $e->getMessage();
        }
    }

    $action->session->set('success', 'Resume Deleted');
    $action->helper->redirect('home');
});



// Delete form
$action->helper->route('action/deletecover/$url', function($data){
    global $action;
   $url= $data['url'];
   $action->db->delete('clb1',"url='$url'");
   $action->session->set('success','Cover letter Deleted');
   $action->helper->redirect('home');
});

$action->helper->route('action/createletter', function() {
    global $action;
    $action->onlyForAuthUser();
    // Initialize coverletter data
    $resume_data = [];
    $resume_data[0] = $action->session->get('Auth')['data']['id']; // user_id
    $resume_data[1] = date('Y-m-d H:i:s'); // created_at
    $resume_data[2] = date('Y-m-d H:i:s'); // updated_at
    $resume_data[3] = $action->db->clean($_POST['name']);
    $resume_data[4] = $action->db->clean($_POST['address']);
    $resume_data[5] = $action->db->clean($_POST['email']);
    $resume_data[6] = $action->db->clean($_POST['phone']);
    $resume_data[7] = $action->db->clean($_POST['date']);
    $resume_data[8] = $action->db->clean($_POST['cname']);
    $resume_data[9] = $action->db->clean($_POST['caddress']);
    $resume_data[10] = $action->db->clean($_POST['zip']);
    $resume_data[11] = $action->db->clean($_POST['salutation']);
    $resume_data[12] = $action->db->clean($_POST['introduction']);
    $resume_data[13] = $action->db->clean($_POST['paraone']);
    $resume_data[14] = $action->db->clean($_POST['paratwo']);
    $resume_data[15] = $action->db->clean($_POST['conclusion']);
    $resume_data[16] = $action->db->clean($_POST['closing']);
    $resume_data[17] = $action->db->clean($_POST['signature']);
    $resume_data[18] = $action->helper->UID(); // url
    
    // Wrap resume_data in an outer array
    $wrapped_resume_data = [$resume_data];
    
    // Debugging: print the wrapped_resume_data to verify its structure
    var_dump($wrapped_resume_data);
    
    try {
        $run = $action->db->insert('clb1', [
            'user_id', 'created_at', 'updated_at', 'name', 'address', 'email', 'phone', 'date', 'cname', 
            'caddress', 'zip', 'salutation', 'introduction', 'paraone', 'paratwo', 'conclusion', 'closing', 
            'signature', 'url'
        ], $wrapped_resume_data);
        
        if ($run) {
            echo "Insert successful!";
            $action->session->set('success', 'Cover letter Created');
            $action->helper->redirect('home');
        } else {
            // Detailed error logging for debugging
            error_log("Cover letter creation failed. Data: " . print_r($wrapped_resume_data, true));
            $action->session->set('error', 'Something went wrong !! Try again after sometime');
            $action->helper->redirect('home');
        }
    } catch (Exception $e) {
        // Log the detailed error message
        error_log("Error inserting data into cover1: " . $e->getMessage());
        echo "Error: " . $e->getMessage();
    }
});



//reusem 1 route
$action->helper->route('action/createresume', function() {
    global $action;
    $action->onlyForAuthUser();
    // Initialize resume data
    $resume_data = [];
    $resume_data[0] = $action->session->get('Auth')['data']['id'];
    $resume_data[1] = $action->db->clean($_POST['name']);
    $resume_data[2] = $action->db->clean($_POST['headline']);
    $resume_data[4] = $action->db->clean($_POST['objective']);
    // Collect contact information
    $contact = [
        'email' => $action->db->clean($_POST['email']),
        'mobile' => $action->db->clean($_POST['mobile']),
        'address' => $action->db->clean($_POST['address'])
    ];
    $resume_data[3] = json_encode($contact);
    $resume_data[5] = json_encode($_POST['skill']);
    $education = [];
    $experience = [];
    // Process education information
    foreach ($_POST['college'] as $key => $value) {
        $education[$key]['college'] = $action->db->clean($value);
        $education[$key]['course'] = $action->db->clean($_POST['course'][$key]);
        $education[$key]['e_duration'] = $action->db->clean($_POST['e_duration'][$key]);
    }
    // Process experience information
    foreach ($_POST['company'] as $key => $value) {
        $experience[$key]['company'] = $action->db->clean($value);
        $experience[$key]['jobrole'] = $action->db->clean($_POST['jobrole'][$key]);
        $experience[$key]['work_des'] = $action->db->clean($_POST['work_des'][$key]);
        $experience[$key]['exp_duration'] = $action->db->clean($_POST['exp_duration'][$key]);
    }
    $resume_data[6] = json_encode($experience);
    $resume_data[7] = json_encode($education);
    $resume_data[8] = $action->helper->UID();
    // Wrap resume_data in an outer array
    $wrapped_resume_data = [$resume_data];
    // Debugging: print the wrapped_resume_data to verify its structure
    var_dump($wrapped_resume_data);
    try {
        $run = $action->db->insert('cvb1', ['user_id', 'name', 'headline', 'objective', 'contact', 'skills', 'experience', 'education', 'url'], $wrapped_resume_data);
        if ($run) {
            echo "Insert successful!";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    if ($run) {
        $action->session->set('success', 'Resume Created');
        $action->helper->redirect('home');
    } else {
        $action->session->set('error', 'Something went wrong !! Try again after sometime');
        $action->helper->redirect('home');
    }
});


//resume 2 route
$action->helper->route('action/createresume2', function() {
    global $action;
    $action->onlyForAuthUser();
    // Initialize resume data
    $resume_data = [];
    $resume_data[0] = $action->session->get('Auth')['data']['id'];
    $resume_data[1] = $action->db->clean($_POST['name']);
    $resume_data[2] = $action->db->clean($_POST['headline']);
    $resume_data[4] = $action->db->clean($_POST['objective']);
    // Collect contact information
    $contact = [
        'email' => $action->db->clean($_POST['email']),
        'mobile' => $action->db->clean($_POST['mobile']),
        'address' => $action->db->clean($_POST['address'])
    ];
    $resume_data[3] = json_encode($contact);
    $resume_data[5] = json_encode($_POST['skill']);
    $education = [];
    $experience = [];
    // Process education information
    foreach ($_POST['college'] as $key => $value) {
        $education[$key]['college'] = $action->db->clean($value);
        $education[$key]['course'] = $action->db->clean($_POST['course'][$key]);
        $education[$key]['e_duration'] = $action->db->clean($_POST['e_duration'][$key]);
    }
    // Process experience information
    foreach ($_POST['company'] as $key => $value) {
        $experience[$key]['company'] = $action->db->clean($value);
        $experience[$key]['jobrole'] = $action->db->clean($_POST['jobrole'][$key]);
        $experience[$key]['work_des'] = $action->db->clean($_POST['work_des'][$key]);
        $experience[$key]['exp_duration'] = $action->db->clean($_POST['exp_duration'][$key]);
    }
    $resume_data[6] = json_encode($experience);
    $resume_data[7] = json_encode($education);
    $resume_data[8] = $action->helper->UID();
    // Wrap resume_data in an outer array
    $wrapped_resume_data = [$resume_data];
    // Debugging: print the wrapped_resume_data to verify its structure
    var_dump($wrapped_resume_data);
    try {
        $run = $action->db->insert('cvb2', ['user_id', 'name', 'headline', 'objective', 'contact', 'skills', 'experience', 'education', 'url'], $wrapped_resume_data);
        if ($run) {
            echo "Insert successful!";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    if ($run) {
        $action->session->set('success', 'Resume Created');
        $action->helper->redirect('home');
    } else {
        // Detailed error logging for debugging
        error_log("Resume creation failed. Data: " . print_r($wrapped_resume_data, true));
        $action->session->set('error', 'Something went wrong !! Try again after sometime');
        $action->helper->redirect('home');
    }
});


//resume 3 route
$action->helper->route('action/createresume3', function() {
    global $action;
    $action->onlyForAuthUser();
    // Initialize resume data
    $resume_data = [];
    $resume_data[0] = $action->session->get('Auth')['data']['id'];
    $resume_data[1] = $action->db->clean($_POST['name']);
    $resume_data[2] = $action->db->clean($_POST['headline']);
    $resume_data[4] = $action->db->clean($_POST['objective']);
    // Collect contact information
    $contact = [
        'email' => $action->db->clean($_POST['email']),
        'mobile' => $action->db->clean($_POST['mobile']),
        'address' => $action->db->clean($_POST['address'])
    ];
    $resume_data[3] = json_encode($contact);
    $resume_data[5] = json_encode($_POST['skill']);
    $education = [];
    $experience = [];
    // Process education information
    foreach ($_POST['college'] as $key => $value) {
        $education[$key]['college'] = $action->db->clean($value);
        $education[$key]['course'] = $action->db->clean($_POST['course'][$key]);
        $education[$key]['e_duration'] = $action->db->clean($_POST['e_duration'][$key]);
    }
    // Process experience information
    foreach ($_POST['company'] as $key => $value) {
        $experience[$key]['company'] = $action->db->clean($value);
        $experience[$key]['jobrole'] = $action->db->clean($_POST['jobrole'][$key]);
        $experience[$key]['work_des'] = $action->db->clean($_POST['work_des'][$key]);
        $experience[$key]['exp_duration'] = $action->db->clean($_POST['exp_duration'][$key]);
    }
    $resume_data[6] = json_encode($experience);
    $resume_data[7] = json_encode($education);
    $resume_data[8] = $action->helper->UID();
    // Wrap resume_data in an outer array
    $wrapped_resume_data = [$resume_data];
    // Debugging: print the wrapped_resume_data to verify its structure
    var_dump($wrapped_resume_data);
    try {
        $run = $action->db->insert('cvb3', ['user_id', 'name', 'headline', 'objective', 'contact', 'skills', 'experience', 'education', 'url'], $wrapped_resume_data);
        if ($run) {
            echo "Insert successful!";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    if ($run) {
        $action->session->set('success', 'Resume Created');
        $action->helper->redirect('home');
    } else {
        // Detailed error logging for debugging
        error_log("Resume creation failed. Data: " . print_r($wrapped_resume_data, true));
        $action->session->set('error', 'Something went wrong !! Try again after sometime');
        $action->helper->redirect('home');
    }
});


//resume 4 route
$action->helper->route('action/createresume4', function() {
    global $action;
    $action->onlyForAuthUser();
    // Initialize resume data
    $resume_data = [];
    $resume_data[0] = $action->session->get('Auth')['data']['id'];
    $resume_data[1] = $action->db->clean($_POST['name']);
    $resume_data[2] = $action->db->clean($_POST['headline']);
    $resume_data[4] = $action->db->clean($_POST['objective']);
    // Collect contact information
    $contact = [
        'email' => $action->db->clean($_POST['email']),
        'mobile' => $action->db->clean($_POST['mobile']),
        'address' => $action->db->clean($_POST['address'])
    ];
    $resume_data[3] = json_encode($contact);
    $resume_data[5] = json_encode($_POST['skill']);
    $education = [];
    $experience = [];
    // Process education information
    foreach ($_POST['college'] as $key => $value) {
        $education[$key]['college'] = $action->db->clean($value);
        $education[$key]['course'] = $action->db->clean($_POST['course'][$key]);
        $education[$key]['e_duration'] = $action->db->clean($_POST['e_duration'][$key]);
    }
    // Process experience information
    foreach ($_POST['company'] as $key => $value) {
        $experience[$key]['company'] = $action->db->clean($value);
        $experience[$key]['jobrole'] = $action->db->clean($_POST['jobrole'][$key]);
        $experience[$key]['work_des'] = $action->db->clean($_POST['work_des'][$key]);
        $experience[$key]['exp_duration'] = $action->db->clean($_POST['exp_duration'][$key]);
    }
    $resume_data[6] = json_encode($experience);
    $resume_data[7] = json_encode($education);
    $resume_data[8] = $action->helper->UID();
    // Wrap resume_data in an outer array
    $wrapped_resume_data = [$resume_data];
    // Debugging: print the wrapped_resume_data to verify its structure
    var_dump($wrapped_resume_data);
    try {
        $run = $action->db->insert('cvb4', ['user_id', 'name', 'headline', 'objective', 'contact', 'skills', 'experience', 'education', 'url'], $wrapped_resume_data);
        if ($run) {
            echo "Insert successful!";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    if ($run) {
        $action->session->set('success', 'Resume Created');
        $action->helper->redirect('home');
    } else {
        // Detailed error logging for debugging
        error_log("Resume creation failed. Data: " . print_r($wrapped_resume_data, true));
        $action->session->set('error', 'Something went wrong !! Try again after sometime');
        $action->helper->redirect('home');
    }
});


//resume 5 route
$action->helper->route('action/createresume5', function() {
    global $action;
    $action->onlyForAuthUser();
    // Initialize resume data
    $resume_data = [];
    $resume_data[0] = $action->session->get('Auth')['data']['id'];
    $resume_data[1] = $action->db->clean($_POST['name']);
    $resume_data[2] = $action->db->clean($_POST['headline']);
    $resume_data[4] = $action->db->clean($_POST['objective']);
    // Collect contact information
    $contact = [
        'email' => $action->db->clean($_POST['email']),
        'mobile' => $action->db->clean($_POST['mobile']),
        'address' => $action->db->clean($_POST['address'])
    ];
    $resume_data[3] = json_encode($contact);
    $resume_data[5] = json_encode($_POST['skill']);
    $education = [];
    $experience = [];
    // Process education information
    foreach ($_POST['college'] as $key => $value) {
        $education[$key]['college'] = $action->db->clean($value);
        $education[$key]['course'] = $action->db->clean($_POST['course'][$key]);
        $education[$key]['e_duration'] = $action->db->clean($_POST['e_duration'][$key]);
    }
    // Process experience information
    foreach ($_POST['company'] as $key => $value) {
        $experience[$key]['company'] = $action->db->clean($value);
        $experience[$key]['jobrole'] = $action->db->clean($_POST['jobrole'][$key]);
        $experience[$key]['work_des'] = $action->db->clean($_POST['work_des'][$key]);
        $experience[$key]['exp_duration'] = $action->db->clean($_POST['exp_duration'][$key]);
    }
    $resume_data[6] = json_encode($experience);
    $resume_data[7] = json_encode($education);
    $resume_data[8] = $action->helper->UID();
    // Wrap resume_data in an outer array
    $wrapped_resume_data = [$resume_data];
    // Debugging: print the wrapped_resume_data to verify its structure
    var_dump($wrapped_resume_data);
    try {
        $run = $action->db->insert('cvb5', ['user_id', 'name', 'headline', 'objective', 'contact', 'skills', 'experience', 'education', 'url'], $wrapped_resume_data);
        if ($run) {
            echo "Insert successful!";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    if ($run) {
        $action->session->set('success', 'Resume Created');
        $action->helper->redirect('home');
    } else {
        // Detailed error logging for debugging
        error_log("Resume creation failed. Data: " . print_r($wrapped_resume_data, true));
        $action->session->set('error', 'Something went wrong !! Try again after sometime');
        $action->helper->redirect('home');
    } 
});


//for signup actions 
$action->helper->route('action/signup', function() {
    global $action;
    $error = $action->helper->isAnyEmpty($_POST);
    if ($error) {
        $action->session->set('error', "$error is empty !");
        $action->helper->redirect('signup');
    } else {
        $signup_data = [
            $action->db->clean($_POST['full_name']),
            $action->db->clean($_POST['email_id']),
            $action->db->clean($_POST['password']),
            $action->db->clean($_POST['confirm_password'])
        ];
        $user = $action->db->read('usersl', 'email_id', "WHERE email_id='$signup_data[1]'");
        if (count($user) > 0) {
            $action->session->set('error', $signup_data[1] . " is already Registered !");
            $action->helper->redirect('signup');
        } else {
      
            $columns = ['full_name', 'email_id', 'password','confirm_password'];
            $action->db->insert('usersl', $columns, [$signup_data]);
            $action->session->set('success', 'Account Created');
            $action->helper->redirect('dashboard');
        }
    }
});


// Login action
$action->helper->route('action/login', function() {
    global $action;

    // Check if any POST fields are empty
    $error = $action->helper->isAnyEmpty($_POST);
    if ($error) {
        $action->session->set('error', "$error is empty!");
    } else {
        // Clean the email and password input to prevent SQL injection
        $email = $action->db->clean($_POST['email_id']);
        $password = $action->db->clean($_POST['password']);
        
        // Read user from the database
        $user = $action->db->read('usersl', 'id, email_id', "WHERE email_id='$email' AND password='$password'");

        if (count($user) > 0) {
            $action->session->set('Auth', ['status' => true, 'data' => $user[0]]);
            $action->helper->redirect('dashboard');
            $action->session->set('success', 'Logged In');
        } else {
            $action->session->set('error', "Incorrect email/password");
            $action->helper->redirect('login');
        }
    }
});


if(!Helper::$isPageIsAvailable){
$data['title'] = '404 Page not found';
$action->view->load('header');
$action->view->load('not_found');
$action->view->load('footer');
}
