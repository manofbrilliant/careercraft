<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon"href="<?=$action->helper->loadimage('logo.png')?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Cover letter Templates</title>

  <style>
/* From Uiverse.io by SalladShooter */ 
.button {
  cursor: pointer;
  padding: 1em;
  font-size: 1em;
  width: 7em;
  aspect-ratio: 1/0.25;
  color: white;
  background: #212121;
  background-size: cover;
  background-blend-mode: overlay;
  border-radius: 0.5em;
  outline: 0.1em solid #353535;
  border: 0;
  box-shadow: 0 0 1em 1em rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease-in-out;
  position: relative;
}

.button:hover {
  transform: scale(1.1);
  box-shadow: 0 0 1em 0.45em rgba(0, 0, 0, 0.1);
  background: linear-gradient(45deg, #212121, #252525);
  background: radial-gradient(
    circle at bottom,
    rgba(50, 100, 180, 0.5) 10%,
    #212121 70%
  );
  outline: 0;
}

.icon {
  fill: white;
  width: 1em;
  aspect-ratio: 1;
  top: 0;
  left: 0;
  margin: auto;
  transform: translate(-35%, 10%);
}

  </style>
</head>
<body>
<button class="button" onclick="window.location.href='<?= $action->helper->url('dashboard') ?>'">
  <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="icon">
    <path
      d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z"
    ></path>
  </svg>
  Go Back
</button>


  <div class="container">
    <h2 class="my-3">Select Your Cover letter  template</h2>
    <div class="row">
      <div class="col-md-6 mb-3">
        <div class="card">
          <div class="row g-1">
            <div class="col-md-4">
              <img src="<?=$action->helper->loadimage('cl_1.png')?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Normal</h5>
                <p class="card-text">This template for normal use </p>
                <a href="<?=$action->helper->url('cl-details/1')?>" class="btn btn-sm btn-success"><i class="bi bi-plus-lg"></i> Edit this template</a>
              </div>
            </div>
          </div>
        </div>
      </div>
   
 
   
     
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
