<!DOCTYPE html>
<html>
<head>

<title>Codeigniter the Login User Details</title>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width">

<meta name="description" content="Codeigniter the Login User Details using MVC">

<meta name="keywords" content="CodeIgniter: Simple Register, login and Delete View With DataTable– MVC Application">

   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

                   <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');

                  if($success_msg){
                    ?>
                    <div class="alert alert-success">
                      <?php echo $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                    <?php
                  }
                  ?>

<?php
echo form_open('index.php/curd/store');
echo form_label('login Application');
echo "<br>";
echo "<br>";
echo form_label('Name');
echo "<br>";
echo "<br>";
echo form_input(array("name"=>"name","class"=>"name"));
echo "<br>";
echo "<br>";
echo form_label('Email Id');
echo "<br>";
echo "<br>";
echo form_input(array("name"=>"email","class"=>"email"));
echo "<br>";
echo "<br>";

echo form_submit("send","submit");
?>
