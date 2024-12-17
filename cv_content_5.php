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
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            padding: 0;
            background-color: #f0f0f0;
            text-align: left;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        .section {
            margin-bottom: 20px;
        }
        .code-section {
            background-color: #f5f5f5;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
p{ text-align: center;
            color: #333;}
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
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/docxtemplater/3.22.0/docxtemplater.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip-utils/0.0.2/jszip-utils.min.js"></script>
</head>
<body>
<div class="button-container">
          <!-- Button for downloading as PDF -->
          <button id="downloadPdfBtn" class="button">
            <span class="button-content">Download as PDF</span>
        </button>

    
            <button onclick="window.location.href='<?= $action->helper->url('home')?>'">
                <span class="button_top">Go to Back</span>
            </button>
        </div>
<div id="content">
    <div class="container">
        <header class="section">
            <h1><?= htmlspecialchars(@$resume['name']) ?></h1>
<hr></hr>
            <p><?= htmlspecialchars(@$resume['headline']) ?></P>


        </header>
        
        <section class="section">
            <h2>Objective</h2>
<hr></hr>
            <p><?= htmlspecialchars($resume['objective']) ?></p>
        </section>
        
        <section class="section">
            <h2>contact details</h2>
<hr></hr>
            <p><li><strong>phone:</strong> <?= htmlspecialchars($contact->mobile) ?></li></p>
        <p><li><strong>email:</strong><?= htmlspecialchars($contact->email) ?></li></p>
          <p><li><strong>address:</strong> <?= htmlspecialchars($contact->address) ?></li></p>
        </section>      
        <section class="section">
            <h2>Skills</h2>
<hr></hr>
            <ul>
            <?php foreach ($skills as $skill): ?>
                <li><?= htmlspecialchars($skill) ?></li>
            <?php endforeach; ?>
            </ul>
        </section>
 <section class="section">
            <h2>Experience</h2>
<hr></hr>
            <article>
            
                <ul>
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
                </ul>
            </article>
        </section>
 <section class="section">
            <h2>Education</h2>
<hr></hr>
<?php if (empty($education)): ?>
            <div class="job">
                <h3>No Education</h3>
            </div>
        <?php else: ?>
            <?php foreach ($education as $edu): ?>
                    <li><strong>College Name:</strong> <?= htmlspecialchars($edu->college) ?></li>
                    <li><strong>Course:</strong> <?= htmlspecialchars($edu->course) ?></li>
                    <li><strong>Duration:</strong> <?= htmlspecialchars($edu->e_duration) ?></li>
                <?php endforeach; ?>
                <?php endif; ?>
        </section>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pizzip/3.1.5/pizzip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/docxtemplater/3.22.0/docxtemplater.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <script>
    var resume = {
        name: <?= json_encode($resume['name']) ?>,
        headline: <?= json_encode($resume['headline']) ?>,
        objective: <?= json_encode($resume['objective']) ?>,
        contact: {
            mobile: <?= json_encode($contact->mobile) ?>,
            email: <?= json_encode($contact->email) ?>,
            address: <?= json_encode($contact->address) ?>
        },
        // Include other data as needed, like skills, experience, education, etc.
    };
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/docxtemplater/3.22.0/docxtemplater.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
<script>
    var resume = {
        name: <?= json_encode($resume['name'] ?? 'Your Name') ?>,
        headline: <?= json_encode($resume['headline'] ?? 'Your Headline') ?>,
        objective: <?= json_encode($resume['objective'] ?? 'Your Objective') ?>,
        contact: {
            mobile: <?= json_encode($contact->mobile ?? 'N/A') ?>,
            email: <?= json_encode($contact->email ?? 'N/A') ?>,
            address: <?= json_encode($contact->address ?? 'N/A') ?>
        }
        // Include other data as needed
    };

    // PDF download functionality
    document.getElementById('downloadPdfBtn').addEventListener('click', function () {
        var element = document.getElementById('content');
        var opt = {
            margin: 0.5,
            filename: 'resume.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
        };
        html2pdf().from(element).set(opt).save();
    });



   
   
</script>
</body>
</html>




