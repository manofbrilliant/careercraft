

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="<?=$action->helper->loadjs('main.js')?>"></script>
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

// jQuery code to add skill badge
$("#addsk").click(function(){
var skill=$('#usersk').val();
  if(!skill){
    Toast.fire({
  icon: 'error',
  title: 'enter a skill'
});
return;
  }
  $("#sk").append('<span class="badge bg-danger p-2 m-1">' + skill + '<input type="hidden" name="skill[]" value="' + skill + '"/> <span class="text-black" onclick="removesk(this)"> X </span></span>');
  var skill=$('#usersk').val('');
 });

 // for education badge
 $(document).ready(function(){
  $("#addedu").click(function(){
    var college = $('#college').val();
    var course = $('#course').val();
    var e_duration = $('#e_duration').val();

    if (!college) {
      Toast.fire({
        icon: 'error',
        title: 'Enter college name/institute name'
      });
      return; // Prevent further execution if the field is empty
    }

    if (!course) {
      Toast.fire({
        icon: 'error',
        title: 'Enter your course'
      });
      return; // Prevent further execution if the field is empty
    }

    if (!e_duration) {
      Toast.fire({
        icon: 'error',
        title: 'Enter the education duration'
      });
      return; // Prevent further execution if the field is empty
    }

    $("#educations").append(`
      <div class="d-inline-block border rounded p-2 m-2">
        <input type="hidden" name="college[]" value="${college}">
        <input type="hidden" name="course[]" value="${course}">
        <input type="hidden" name="e_duration[]" value="${e_duration}">
        <h4>${college}</h4>
        <p>${course} - (${e_duration})</p>
        <button type="button" class="btn btn-sm btn-danger" onclick="removeedu(this)">Remove</button>
      </div>
    `);

    // Clear the input fields
    $('#college').val('');
    $('#course').val('');
    $('#e_duration').val('');
  });
});

//for experience badge
// for education badge
$(document).ready(function(){
  $("#addexp").click(function(){
    var company = $('#company').val();
    var jobrole = $('#jobrole').val();
    var exp_duration = $('#exp_duration').val();
    var about =$('#work_des').val();

    if (!company) {
      Toast.fire({
        icon: 'error',
        title: 'Enter company/workplace name'
      });
      return; // Prevent further execution if the field is empty
    }

    if (!jobrole) {
      Toast.fire({
        icon: 'error',
        title: 'Enter your jobrole'
      });
      return; // Prevent further execution if the field is empty
    }

    if (!exp_duration) {
      Toast.fire({
        icon: 'error',
        title: 'Enter the experience duration'
      });
      return; // Prevent further execution if the field is empty
    }
    if (!about) {
      Toast.fire({
        icon: 'error',
        title: 'Enter the description'
      });
      return; // Prevent further execution if the field is empty
    }

    $("#exp").append(`
      <div class="d-inline-block border rounded p-2 m-2">
        <input type="hidden" name="company[]" value="${company}">
        <input type="hidden" name="jobrole[]" value="${jobrole}">
        <input type="hidden" name="exp_duration[]" value="${exp_duration}">
        <textarea class="d-none" name="work_des[]">
        ${about}
        </textarea>
        <h4>${company}</h4>
        <p>${jobrole} -(${exp_duration})</p>
        <p>${about}</p>
        <button type="button" class="btn btn-sm btn-danger" onclick="removeexp(this)">Remove</button>
      </div>
    `);

    // Clear the input fields
    $('#company').val('');
    $('#jobrole').val('');
    $('#exp_duration').val('');
    $('#work_des').val('');
  });
});

 // JavaScript function to remove experience badge
 function removeexp(button){
    $(button).parent().remove();
}

 // JavaScript function to remove education badge
function removeedu(button){
    $(button).parent().remove();
}

// JavaScript function to remove skill badge
function removesk(button){
    $(button).parent().remove();
}
// for copy url
function copyurl(url){
  navigator.clipboard.writeText(url);
  Toast.fire({
        icon: 'success',
        title: 'Copied successfully'
      });
}
    </script>
</body> 
    </html>   