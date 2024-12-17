<?php
$resume['contact'] = str_replace('\\', " ", $resume['contact']);
$resume['skills'] = str_replace('\\', " ", $resume['skills']);

$resume['experience'] = str_replace("\r\n", '', $resume['experience']);

$resume['objective'] = str_replace("\r\n", '', $resume['objective']);

$resume['education'] = str_replace('\\', " ", $resume['education']);

$contact = json_decode($resume['contact']);
$skills = json_decode($resume['skills']);

if (json_last_error() !== JSON_ERROR_NONE) {
    die('JSON decode error: ' . json_last_error_msg());
}

$education = json_decode($resume['education']);

if (json_last_error() !== JSON_ERROR_NONE) {
    die('Error decoding JSON');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" />
    <link rel="stylesheet" href="<?=$action->helper->loadcss('cv_content_1.css')?>">
    <link rel="icon" href="<?=$action->helper->loadimage('logo.png')?>">
    <title><?=@$title?></title>
    <style>
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
</head>
<body>
    <div id="doc2" class="yui-t7">
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
            <div id="inner">
                <div id="hd">
                    <div class="yui-gc">
                        <div class="yui-u first">
                            <h1><?=@$resume['name']?></h1>
                            <h2><?=$resume['headline']?></h2>
                        </div>
                        <div class="yui-u">
                            <div class="contact-info">
                                <h3><a id="pdf" href="#"><?=$contact->address?></a></h3>
                                <h3><a href="mailto:<?=$contact->email?>"><?=$contact->email?></a></h3>
                                <h3><?=$contact->mobile?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="bd">
                    <div id="yui-main">
                        <div class="yui-b">
                            <div class="yui-gf">
                                <div class="yui-u first">
                                    <h2>Objective</h2>
                                </div>
                                <div class="yui-u">
                                    <p class="enlarge"><?=$resume['objective']?></p>
                                </div>
                            </div>
                            <div class="yui-gf">
                                <div class="yui-u first">
                                    <h2>Skills</h2>
                                </div>
                                <div class="yui-u">
                                    <?php foreach($skills as $skill): ?>
                                        <ul class="talent">
                                            <li><?=@$skill?></li>
                                        </ul>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="yui-gf">
                                <?php
                                // Database connection (assuming PDO)
                                try {
                                    $pdo = new PDO('mysql:host=localhost;dbname=cv', 'root', '');
                                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                } catch (PDOException $e) {
                                    die("Database connection failed: " . $e->getMessage());
                                }

                                // Fetch data from the database
                                try {
                                    $stmt = $pdo->prepare("SELECT experience FROM cvb1");
                                    $stmt->execute();
                                    $experience = $stmt->fetchAll(PDO::FETCH_OBJ); // Fetch as array of objects
                                } catch (PDOException $e) {
                                    die("Query failed: " . $e->getMessage());
                                }

                                // Debugging output
                                //echo '<pre>'; print_r($experience); echo '</pre>';
                                ?>

                                <div class="yui-u first">
                                    <h2>Experience</h2>
                                </div>
                                <div class="yui-u">
                                <?php
                                // Assuming $resume['experience'] contains the JSON string
                                $experience = json_decode($resume['experience']);
                                if (json_last_error() !== JSON_ERROR_NONE) {
                                    die('JSON decode error: ' . json_last_error_msg());
                                }

                                // Print the decoded structure for debugging
                                ;

                                // Check if there are any experiences
                                if (!empty($experience) && is_array($experience)) {
                                    // Iterate over each experience and display it
                                    foreach ($experience as $exp) {
                                        echo '<div class="job">';
                                    
                                        // Check if each property exists before accessing
                                        $company = isset($exp->company) ? htmlspecialchars($exp->company) : 'N/A';
                                        $jobrole = isset($exp->jobrole) ? htmlspecialchars($exp->jobrole) : 'N/A';
                                        $exp_duration = isset($exp->exp_duration) ? htmlspecialchars($exp->exp_duration) : 'N/A';
                                        $work_des = isset($exp->work_des) ? htmlspecialchars($exp->work_des) : 'N/A';
                                        
                                        echo '<h2>' . $company . '</h2>';
                                        echo '<h3>' . $jobrole . '</h3>';
                                        echo '<h4>' . $exp_duration . '</h4>';
                                        echo '<p>' . $work_des . '</p>';
                                      
                                        echo '</div>';
                                    }
                                } else {
                                    echo 'Experience data not found.';
                                }
                                ?>
                                </div>
                            </div>

                            <div class="yui-gf last">
                                <div class="yui-u first">
                                    <h2>Education</h2>
                                </div>
                                <div class="yui-u" style="padding: 10px 0px; border-bottom: 3px solid rgba(0,0,0,0.1)">
                                    <?php if (count($education) < 1): ?>
                                        <div class="job">
                                            <h3>No Education</h3>
                                        </div>
                                    <?php endif; ?>
                                    <?php foreach($education as $edu): ?>
                                        <h2><?=$edu->college?></h2>
                                        <h3><?=$edu->course?> <strong><?=$edu->e_duration?></strong></h3><br>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ft">
                    <p><?=$resume['name']?> &mdash; <a href="mailto:<?=@$contact->email?>"><?=@$contact->email?></a> &mdash; <?=$contact->mobile?></p>
                </div>
            </div>
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
