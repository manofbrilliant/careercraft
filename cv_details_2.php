<div class="container">
  <h3 class="my-3">Enter Your Details--2</h3>

  <form method="post" action="<?= $action->helper->url('action/createresume2') ?>" class="border border-2 rounded-2 p-2 my-3">
  
<label for="inputEmail3" class="col-sm-2 col-form-label fs-4"><i class="bi bi-person-circle"></i> Personal Details</label>
  <div class="row justify-content-between">
  <div class="col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="">
      <input type="text" class="form-control" name="name" placeholder="Your Name"id="inputEmail3">
    </div>
  </div>
  <div class="col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Headline</label>
    <div class="">
      <input type="text" class="form-control" name="headline" id="inputEmail3"required>
    </div>
  </div>
  <div class="row justify-content-between">
  <div class="col mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Objective</label>
    <div class="">
       <textarea class="w-100"name="objective"required ></textarea>
    </div>
  </div>
</div>
  <hr>
  <label for="inputEmail3" class="col-sm-2 col-form-label fs-4"><i class="bi bi-person-lines-fill"></i> Contact Details</label>
  <div class="row justify-content-between">
  <div class="col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="">
      <input type="email" class="form-control"name="email" placeholder="Youremail@gmail.com"id="inputEmail3"required>
    </div>
  </div>
  <div class="col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile</label>
    <div class="">
      <input type="mobile" class="form-control"name="mobile"placeholder="Type Your Phone no." id="inputEmail3"required>
    </div>
  </div>
</div>
<div class="row justify-content-between">
  <div class="mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
    <div class="">
      <input type="text" name="address" placeholder="New Delhi,India"class="form-control" id="inputEmail3"required>
    </div>
  </div>
<hr>
<div class="col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label fs-4"><i class="bi bi-tools"></i> Skills</label>
    <di id="sk">

    </div>
    <div class="input-group mb-3">
    <input type="text" class="form-control" id="usersk" placeholder="Add Your Skill here">
      <button class="btn btn-primary" type="button" id="addsk">Add Skill</button>
   </div>
  </div>
  <hr>
  <div class="mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label fs-4"><i class="bi bi-book"></i> Education</label>
    <div id="educations" class="">
     
    </div>
    <div class="d-flex gap-2">
    <select class="form-control" id="college">
  <option value="diploma">School</option>
  <option value="ug">college</option>
  <option value="pg">university</option>
  <option value="higher_education">institute</option>
</select>
      
      <select class="form-control" id="course">
      <option value="diploma">SSC</option>
  <option value="diploma">Diploma</option>
  <option value="ug">UG</option>
  <option value="pg">PG</option>
  <option value="higher_education">Higher Education</option>
</select>
      <input type="text" class="form-control" id="e_duration" placeholder="2022-2025">
      <button type="button" class="btn btn-primary" id="addedu">Add</button>
    </div>
  </div>
  <hr>
  <div class="mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label fs-4"><i class="bi bi-briefcase-fill"></i> Experience</label>
    <div id="exp" class="">
     
    </div>
    <div class="d-flex gap-2">
      <input type="text" class="form-control" id="company" placeholder="Google">
      <input type="text" class="form-control" id="jobrole" placeholder="Software developer">
      <input type="text" class="form-control" id="exp_duration" placeholder="2022-2025">
    
    </div>
    <span class="d-block mt-2">About Your Company( DESCRIPTION )</span>
    <textarea id="work_des" class="w-100 mb-2">
    </textarea>
    <button type="button" class="btn btn-primary" id="addexp">Add</button>
  </div>
  <button type="submit" class="btn btn-warning" style="width: 20%;">
    <i class="bi bi-plus-circle-dotted"></i> Create Resume
</button>

</form>
</div>