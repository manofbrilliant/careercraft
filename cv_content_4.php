<?php
// Sanitize the input data
$resume['contact'] = str_replace('\\', " ", $resume['contact']);
$resume['skills'] = str_replace('\\', " ", $resume['skills']);
$resume['experience'] = str_replace("\\", '', $resume['experience']);
$resume['objective'] = str_replace("\\", '', $resume['objective']);
$resume['education'] = str_replace('\\', " ", $resume['education']);

$contact = json_decode($resume['contact']);
$skills = json_decode($resume['skills']);
$education = json_decode($resume['education']);
$experience = json_decode($resume['experience']);

if (json_last_error() !== JSON_ERROR_NONE) {
    die('JSON decode error: ' . json_last_error_msg());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" />

    <link rel="icon" href="<?= htmlspecialchars($action->helper->loadimage('logo.png')) ?>">
    <title><?= htmlspecialchars(@$title) ?></title>
<style>
    body {
        font-family:Arial, sans-serif;
        line-height: 1.6;
        background-color: blue;
        padding: 10px;
        text-align: left;
p{text-align:center}; 
    }
    .resume {
        background-color: black;
        color:white;
        box-shadow: black;
        padding: 20px;
        border-radius: 8px;
        max-width: 700px;
        margin: auto; 
    }
    .name {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 10px;  
}
    .objective {
        margin-bottom: 15px;
    }
    .contact {
        margin-bottom: 15px;
    }
    .skills {
        margin-bottom: 15px;
    }
    .experience {
        margin-bottom: 15px;
    }
    .education {
        margin-bottom: 15px;
    }      
    .button {
  position: relative;
  overflow: hidden;
  height: 3rem;
  padding: 0 2rem;
  border-radius: 1.5rem;
  background: #3d3a4e;
  background-size: 400%;
  color: #fff;
  border: none;
  cursor: pointer;
  margin-right: 1rem; /* Add margin to the right to separate the buttons */
}

.button:hover::before {
  transform: scaleX(1);
}

.button-content {
  position: relative;
  z-index: 1;
}

.button::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  transform: scaleX(0);
  transform-origin: 0 50%;
  width: 500%;
  height: inherit;
  border-radius: inherit;
  background: linear-gradient(
    82.3deg,
    rgba(150, 93, 233, 1) 10.8%,
    rgba(99, 88, 238, 1) 94.3%
  );
  transition: all 0.475s;
}

button {
  /* Variables */
  --button_radius: 0.75em;
  --button_color: #e8e8e8;
  --button_outline_color: #000000;
  font-size: 17px;
  font-weight: bold;
  border: none;
  border-radius: var(--button_radius);
  background: var(--button_outline_color);
}

.button_top {
  display: block;
  box-sizing: border-box;
  border: 2px solid var(--button_outline_color);
  border-radius: var(--button_radius);
  padding: 0.75em 1.5em;
  background: var(--button_color);
  color: var(--button_outline_color);
  transform: translateY(-0.2em);
  transition: transform 0.1s ease;
}

button:hover .button_top {
  /* Pull the button upwards when hovered */
  transform: translateY(-0.33em);
}

button:active .button_top {
  /* Push the button downwards when pressed */
  transform: translateY(0);
}

.button-container {
  display: flex;
  align-items: center;
}
</style>
<title>Resume</title>
</head>
<body>
<br clear="all" />
<script type="text/javascript">
    google_ad_client = "ca-pub-7098929294805077";
    google_ad_slot = "1871226713";
    google_ad_width = 728;
    google_ad_height = 90;
</script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
<div class="button-container">
            <button id="downloadBtn" class="button">
                <span class="button-content">Download as PDF</span>
            </button>
            <button onclick="window.location.href='<?= $action->helper->url('home')?>'">
                <span class="button_top">Go to Back</span>
            </button>
        </div>
<div id="content">
<div class="resume">
    <div class="name"><?= htmlspecialchars(@$resume['name']) ?></div> 
     <div class="objective">
<h3><?= htmlspecialchars(@$resume['headline']) ?></h3>
<h3>Objective</h3>
 <hr>
<p1><?= htmlspecialchars($resume['objective']) ?>
     <p> </p>
    </div>

    <div class="contact">
        <h2>Contact Details</h2>
 <hr>
        <p><li><strong>Phone no:</strong><?= htmlspecialchars($contact->mobile) ?>.</li></p>
        <p><li><strong>Email:</strong> <?= htmlspecialchars($contact->email) ?></li></p>
        <p><li><strong>Address:</strong> <?= htmlspecialchars($contact->address) ?></li></p>
    </div>
    
    <div class="skills">
        <h2>Skills</h2>
 <hr>
 <?php foreach ($skills as $skill): ?>
                <li><?= htmlspecialchars($skill) ?></li>
            <?php endforeach; ?>
    </div>
    
    <div class="experience">
        <h2>Experience</h2>
 <hr>
 <?php
            if (!empty($experience) && is_array($experience)) {
                foreach ($experience as $exp) {
                    echo '<li><strong>Name:</strong> ' . htmlspecialchars($exp->company ?? 'N/A') . '</li>';
                    echo '<li><strong>Role:</strong> ' . htmlspecialchars($exp->jobrole ?? 'N/A') . '</li>';
                    echo '<li><strong>Description:</strong> ' . htmlspecialchars($exp->work_des ?? 'N/A') . '</li>';
                    echo '<li><strong>Duration:</strong> ' . htmlspecialchars($exp->exp_duration ?? 'N/A') . '</li>';
                }
            } else {
                echo '<li>Experience data not found.</li>';
            }
            ?>
    </div>
    <div class="education">
        <h2>Education</h2>
        <?php if (empty($education)): ?>
            <div class="job">
                <h3>No Education</h3>
            </div>
        <?php else: ?>
 <hr>
 <?php foreach ($education as $edu): ?>
                    <li><strong>College Name:</strong> <?= htmlspecialchars($edu->college) ?></li>
                    <li><strong>Course:</strong> <?= htmlspecialchars($edu->course) ?></li>
                    <li><strong>Duration:</strong> <?= htmlspecialchars($edu->e_duration) ?></li>
                <?php endforeach; ?>
                <?php endif; ?>
 </div>
 </div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script>
        document.getElementById('downloadBtn').addEventListener('click', function () {
            var element = document.getElementById('content');
            var opt = {
                margin:       0.5,
                filename:     'myContent.pdf',
                image:        { type: 'jpeg', quality: 0.98 },
                html2canvas:  { scale: 2 },
                jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
            };

            // New Promise-based usage:
            html2pdf().from(element).set(opt).save();
        });
    </script>
</body>
</html>
