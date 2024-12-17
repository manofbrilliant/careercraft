<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.css">
  <title>Letter Details Form</title>
</head>
<body>
<div class="container">
  <h3 class="my-3">Enter Your Letter Details</h3>
  <form method="post" action="<?= $action->helper->url('action/createletter') ?>" class="border border-2 rounded-2 p-4 my-3">

    <label class="col-form-label fs-4 mb-3"><i class="bi bi-person-circle"></i> Personal Details</label>
    <div class="row g-3">
      <div class="col-md-6">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
      </div>
      <div class="col-md-6">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" name="address" id="address" placeholder="New Delhi, India" required>
      </div>
      <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="youremail@gmail.com" required>
      </div>
      <div class="col-md-6">
        <label for="mobile" class="form-label">Mobile</label>
        <input type="tel" class="form-control" name="phone" id="mobile" placeholder="Your Phone Number" required>
      </div>
    </div>
    
    <hr>
    
    <label class="col-form-label fs-4 mb-3"><i class="bi bi-calendar"></i> Date</label>
    <div class="mb-3">
      <input type="date" class="form-control" name="date" required>
    </div>
    
    <hr>
    
    <label class="col-form-label fs-4 mb-3"><i class="bi bi-building"></i> Company Details</label>
    <div class="row g-3">
      <div class="col-md-4">
        <input type="text" class="form-control" name="cname" placeholder="Company Name" required>
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" name="caddress" placeholder="Company Address" required>
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" name="zip" placeholder="ZIP Code" required>
      </div>
    </div>
    
    <hr>
    
    <label class="col-form-label fs-4 mb-3"><i class="bi bi-briefcase-fill"></i> Letter Content</label>
    <div class="mb-3">
      <input type="text" class="form-control mb-3" name="salutation" placeholder="Salutation" required>
      <textarea class="form-control mb-3" name="introduction" rows="2" placeholder="Introduction" required></textarea>
      <textarea class="form-control mb-3" name="paraone" rows="2" placeholder="Paragraph One" required></textarea>
      <textarea class="form-control mb-3" name="paratwo" rows="2" placeholder="Paragraph Two" required></textarea>
      <textarea class="form-control mb-3" name="conclusion" rows="2" placeholder="Conclusion" required></textarea>
      <input type="text" class="form-control mb-3" name="closing" placeholder="Closing (e.g., Yours faithfully)" required>
      <input type="text" class="form-control mb-3" name="signature" placeholder="Signature" required>
    </div>
    
    <button type="submit" class="btn btn-warning w-66">
      <i class="bi bi-plus-circle-dotted"></i> Create Letter
    </button>
    
  </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
