<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Your Account</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="animate.css">
    <link rel="stylesheet" type="text/css" href="hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="select2.min.css">
    <link rel="stylesheet" type="text/css" href="util.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon"href="<?=$action->helper->loadimage('logo.png')?>">
    <style>
   

.toggle-password {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: #999;
}

        </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">

                <?php
                $action = new Action(); // Replace ActionClass with the actual class name

                $imageUrl = htmlspecialchars($action->helper->loadimage('login2.jpg'), ENT_QUOTES, 'UTF-8');
                echo "<!-- Image URL: $imageUrl -->";
                ?>
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?php echo $imageUrl; ?>" alt="IMG">
                </div>
                <!-- Debug: Print form action URL -->
                <?php
                $formAction = htmlspecialchars($action->helper->url('action/login'), ENT_QUOTES, 'UTF-8');
                echo "<!-- Form Action URL: $formAction -->";
                ?>
                <form class="login100-form validate-form" method="post" action="<?php echo $formAction; ?>">
                    <h1>Login To Your Account</h1>
                    <br>


                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="email_id" placeholder="name@example.com" required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
        <input class="input100" type="password" name="password" id="password" placeholder="Password" required>
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
        <span class="toggle-password">
            <i class="fa fa-eye" id="togglePassword" aria-hidden="true"></i>
        </span>
    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Login-CV
                        </button>
                    </div>

                    <div>
                        <h2><a class="txt2" href="<?php echo htmlspecialchars($action->helper->url('signup'), ENT_QUOTES, 'UTF-8'); ?>">
                         New !! Create here
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a></h2>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
    <script src="jquery-3.2.1.min.js"></script>
    <script src="popper.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="select2.min.js"></script>
    <script src="tilt.jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.js-tilt').tilt({
                scale: 1.1
            });
        });
    </script>
    <script src="main2.js"></script>
    <script>
    function toggleMenu() {
        const menu = document.querySelector('.floating-menu');
        menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
    }

    document.addEventListener('DOMContentLoaded', function() {
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    togglePassword.addEventListener('click', function() {
        // Toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        
        // Toggle the eye / eye-slash icon
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
});

</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
     const Toast = Swal.mixin({
  toast: true,
  position: "bottom-end",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  }
});
    <?php
    $error= $action->session->get('error');
    $success=$action->session->get('success');
    if($error){
        ?>

Toast.fire({
  icon: 'error',
  title: '<?=$error?>'
});
<?php
$action->session->delete('error');
    }
       if($success){
   ?>
 
Toast.fire({
  icon: 'success',
  title: '<?=$success?>'
});
<?php
       }
$action->session->delete('success');
    ?>
    </script>
</body>
</html>
