<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Contacts</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <div class="text-center mb-4">
            <h1>CONTACTS APP</h1>
        </div>

  <h1>Update Contacts</h1>
  <form action="<?php echo base_url('crud/update/').$singlecontact -> id?> " method="post">
    <div class="mb-3">
      <label for="id" class="form-label">ID</label>
      <input type="number" class="form-control" id="id" name="id" placeholder="Enter ID" value="<?php echo $singlecontact -> id ?>">
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="<?php echo $singlecontact -> student_name ?>">
    </div>
    <div class="mb-3">
      <label for="mail" class="form-label">Email</label>
      <input type="text" class="form-control" id="mail" name="mail" placeholder="Enter Email" value="<?php echo $singlecontact -> student_mail ?>">
    </div>
    <div class="mb-3">
      <label for="number" class="form-label">Mobile Number</label>
      <input type="number" class="form-control" id="number" name="number" placeholder="Enter Mobile Number" value="<?php echo $singlecontact -> student_mobile ?>">
    </div>
    
    
    <button type="submit" class="btn btn-primary">update</button>
  </form>
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
