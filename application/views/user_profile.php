<?php
$user_id=$this->session->userdata('user_id');

if(!$user_id){

  redirect('user/login_view');
}

 ?>

<!DOCTYPE html>
<html>
<head>

<title>Codeigniter the Login User Details</title>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width">

<meta name="description" content="Codeigniter the Login User Details using MVC">

<meta name="keywords" content="CodeIgniter: Simple Register, login and Delete View With DataTable– MVC Application">

   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col-md-4">

      <table class="table table-bordered table-striped">


        <tr>
          <th colspan="2"><h4 class="text-center">User Info</h3></th>

        </tr>
          <tr>
            <td>User Name</td>
            <td><?php echo $this->session->userdata('name'); ?></td>
          </tr>
          <tr>
            <td>User Email</td>
            <td><?php echo $this->session->userdata('email');  ?></td>
          </tr>
          
          <tr>
            <td>User Address</td>
            <td><?php echo $this->session->userdata('address');  ?></td>
          </tr>
      </table>


    </div>
  </div>
<a href="<?php echo base_url('index.php/Curd/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
</div>
  </body>
</html>
