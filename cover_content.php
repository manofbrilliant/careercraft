<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" href="<?=$action->helper->loadimage('documentation.png')?>">
<title><?=@$title?></title>
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        position: relative;
    }
    .container {
        border: 5px solid #ccc;
        max-width: 800px;
        background-color: #fff;
        padding: 20px;
        margin: 20px;
        position: relative;
    }
    h1 {
        color: #333;
        border-bottom: 5px solid #333;
        padding-bottom: 5px;
        margin-bottom: 20px;
    }
    p {
        margin-bottom: 15px;
    }
    .contact-info {
        margin-bottom: 20px;
    }
    .signature {
        margin-top: 30px;
        font-style: italic;
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
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<div>
       <div class="button-container">
            <button id="downloadBtn" class="button">
                <span class="button-content">Download as PDF</span>
            </button>
            <button onclick="window.location.href='<?= $action->helper->url('home')?>'">
                <span class="button_top">Go to Back</span>
            </button>
        </div>


        <div id="content">
    <div class="container">
        <div class="contact-info">
            <p><?=$cover['name']?><br>
            <?=$cover['address']?><br>
            <?=$cover['email']?><br>
            <?=$cover['phone']?></p>
        </div>
        <p>Date: <?=$cover['date']?></p>
        <p><strong>COMPANY DETAILS</strong><br>
        <?=$cover['cname']?><br>
        <?=$cover['caddress']?><br>
        <?=$cover['zip']?></p>
        <h2><?=$cover['salutation']?>,</h2>
        <p><?=$cover['introduction']?></p>
        <p><?=$cover['paraone']?></p>
        <p><?=$cover['paratwo']?></p>
        <p><?=$cover['conclusion']?></p>
        <h2><?=$cover['closing']?></h2><p><?=$cover['signature']?></p>
    </div>
    </div>

</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script>
        document.getElementById('downloadBtn').addEventListener('click', function () {
            var element = document.getElementById('content');
            var opt = {
                margin:       0.5,
                filename:     'letter.pdf',
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
