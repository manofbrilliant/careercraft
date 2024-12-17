<?php
    $backgroundImage =
   // Default background image
"https://img.pikbest.com/backgrounds/20191028/abstract-white-background-can-be-used-in-cover-design--book-design--website-background-v_1582398jpg!sw800";
// Default condition
    $someCondition = true; 

    // Determine background image based on condition
    if ($someCondition) {
        $backgroundImage =
"https://img.pikbest.com/backgrounds/20191028/abstract-white-background-can-be-used-in-cover-design--book-design--website-background-v_1582398jpg!sw800";
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon"href="<?=$action->helper->loadimage('logo.png')?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Dashboard</title>
  <style>
      body{
    background-image: url('<?php echo $backgroundImage; ?>');/* PHP to load the image */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }
  .card-space {
    margin-bottom: 1rem;
  }
  
  .card-container {
    display: flex;
    flex-wrap: wrap;
  }

  .card {
    margin-right: 1rem;
  }

  .card:last-child {
    margin-right: 0;
  }
  .k2 {
 padding: 15px 25px;
 border: unset;
 border-radius: 15px;
 color: #212121;
 z-index: 1;
 background: #e8e8e8;
 position: relative;
 font-weight: 1000;
 font-size: 17px;
 -webkit-box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
 box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
 transition: all 250ms;
 overflow: hidden;
}

.k2::before {
 content: "";
 position: absolute;
 top: 0;
 left: 0;
 height: 100%;
 width: 0;
 border-radius: 15px;
 background-color: #212121;
 z-index: -1;
 -webkit-box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
 box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
 transition: all 250ms
}

.k2:hover {
 color: #e8e8e8;
}

.k2:hover::before {
 width: 100%;
}

@keyframes rgbLightPass {
    0% {
      border-image-source: linear-gradient(90deg, red, orange, yellow);
    }
    25% {
      border-image-source: linear-gradient(180deg, yellow, green, cyan);
    }
    50% {
      border-image-source: linear-gradient(270deg, cyan, blue, purple);
    }
    75% {
      border-image-source: linear-gradient(360deg, purple, red, orange);
    }
    100% {
      border-image-source: linear-gradient(90deg, red, orange, yellow);
    }
  }

  /* Card styling */
  #rgb-light-card {
    max-width: 18rem;
    border: 5px solid transparent;
    border-image-slice: 1;
    animation: rgbLightPass 3s infinite linear;
    border-radius: 10px;
    position: relative; /* Needed for positioning the beta tag */
  }

  /* Beta tag styling */
  .beta-tag {
    position: absolute;
    top: -10px;
    right: -10px;
    background-color: red;
    color: white;
    padding: 5px 10px;
    font-size: 0.75rem;
    font-weight: bold;
    transform: rotate(45deg);
    border-radius: 5px;
  }

  /* Content inside the card */
  #rgb-light-card .card-body {
    padding: 1.5rem;
  }

  /* Button styling */
  .k2 {
    background-color: #fff;
    color: #000;
    padding: 0.5rem 1rem;
    border: none;
    cursor: pointer;
    transition: 0.3s ease;
  }
  .k2:hover {
    background-color: #ccc;
  }

 

  /* Marquee scrolling content */
  .marquee-content {
    display: inline-block;
    animation: scroll 10s linear infinite;
    direction:right;
    font-size: 1.25rem;
    font-weight: bold;
    color: white;
    background: linear-gradient(90deg, red, orange, yellow, green, cyan, blue, violet);
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  /* Keyframes for scrolling */
  @keyframes scroll {
    0% {
      transform: translateX(100%);
    }
    100% {
      transform: translateX(-100%);
    }
  }
</style>
<script>

Swal.fire({
  position: "top-end",
  icon: "success",
  title: "Your work has been saved",
  showConfirmButton: false,
  timer: 1500
});

</script>
</head>
<body>


<div class="container mt-3">
    <div class="d-flex justify-content-between align-items-center my-3">
        <h2 class="mb-0">Welcome to the CareerCraft's Dashboard</h2>
        <div>
            <button type="button" class="btn btn-outline-primary"onclick="window.location.href='<?= $action->helper->url('home')?>'">Go to Resumes</button>
            <button type="button" class="btn btn-outline-danger ms-2"onclick="window.location.href='<?= $action->helper->url('action/logout') ?>'">Log OUT</button>
        </div>
        </div>
    <hr>
    


<div class="card-container">
  <div class="card text-white bg-primary mb-3 card-space" style="max-width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Resume Builder</h5>
      <p class="card-text">Create resumes uisng templates click below to access</p><br>
      <button class="k2"onclick="window.location.href='<?= $action->helper->url('select-template') ?>'"> Create Resume</button> 
    </div>
  </div>
  <div class="card text-white bg-warning mb-3 card-space" style="max-width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Cover letter builder</h5>
      <p class="card-text">Create cover letters using templates click below to create</p><br>
      <button class="k2"onclick="window.location.href='<?= $action->helper->url('select-letter-template') ?>'"> Create letter</button> 
    </div>
  </div>




  <div class="card bg-light mb-3 card-space" style="max-width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Companies list</h5>
      <p class="card-text">Find your company what ou want in which field you want by clicking below</p>
      <button class="k2"onclick="window.location.href='<?= $action->helper->url('companies-list') ?>'"> Know more!</button> 
    </div>
  </div>
  <div class="card text-white bg-dark mb-3 card-space" style="max-width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Carrer Guidance</h5>
      <p class="card-text">Know your carrer by how to be and what to be here is an suggesition form this web</p>
      <button class="k2"onclick="window.location.href='<?= $action->helper->url('career-guide') ?>'"> Know more!</button> 
    </div>
  </div>
</div>



</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Welcome Back to dashboard",
        showConfirmButton: false,
        timer: 595
      });
    });
  </script>
</body>
</html>
