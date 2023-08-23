<!DOCTYPE html>
<head>
    <title>Contacts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1>CONTACTS APP</h1>
        </div>
        <div class="text-right mb-3">
            <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Add Contacts</button>
        </div>
        <h2 class="mb-3">Details</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
        <?php
        
            foreach($data_details as $row)
            {
            ?>
            <tr>
                <td><?=$row -> id ?></td>
                <td><?=$row -> student_name ?></td>
                <td><?=$row -> student_mail ?></td>
                <td><?=$row -> student_mobile ?></td>
                <td>
                    <a href="<?php echo base_url('crud/editcontact/').$row -> id?>" class="btn btn-success">Edit</a>
                    <a href="<?php echo base_url('crud/deletecontact/').$row -> id?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php

            }
        ?>
            </tbody>
        </table>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="<?php echo base_url(); ?>crud/addProduct" method="post">
            <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="id">Id</label>
            <input type="number" name="id" placeholder="Enter the ID" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter your name" class="form-control">
            
        </div>
        <div class="form-group">
            <label for="mail">Mail</label>
            <input type="text" name="mail" placeholder="Enter your mail id" class="form-control">
            
        </div>
        <div class="form-group">
            <label for="number">Mobile Number</label>
            <input type="number" name="number" placeholder="Enter your mobile number" class="form-control">
            
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="insert" value="Add Products" class="btn btn-info">
      </div>
            
        </form>
      
    </div>
  </div>
</div>

<?php if($this -> session -> flashdata('error')): ?>
    <div align="center" style="color:#FFF" class="bg-danger" > 
    <?php echo $this -> session -> flashdata('error'); ?>

    </div>
<?php endif;?>

<?php if($this -> session -> flashdata('inserted')): ?>
    <div align="center" style="color:#FFF" class="bg-success" > 
    <?php echo $this -> session -> flashdata('inserted'); ?>

    </div>
<?php endif;?>

<?php if($this -> session -> flashdata('updated')): ?>
    <div align="center" style="color:#FFF" class="bg-success" > 
    <?php echo $this -> session -> flashdata('updated'); ?>

    </div>
<?php endif;?>

<?php if($this -> session -> flashdata('deleted')): ?>
    <div align="center" style="color:#FFF" class="bg-success" > 
    <?php echo $this -> session -> flashdata('deleted'); ?>

    </div>
<?php endif;?>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>