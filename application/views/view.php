<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113518719-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-113518719-2');
</script>

<title>Codeigniter the Login User Details</title>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width">

<meta name="description" content="Codeigniter the View Registe Details Details using MVC">

<meta name="keywords" content="CodeIgniter: Simple Register, login and Delete View With DataTable– MVC Application">
</head>
<?php
//echo "<h1>CodeIgniter: Simple Add, Edit, Delete, View With DataTable– MVC CRUD Application</h1>";
?>
<button><a href="<?php echo base_url(). "index.php/Curd/insert" ?>">Add New</a></button>

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
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Action</th>
                
            </tr>
        </thead>
        
<?php foreach ($print as $print){
    ?>
    <tbody>
            <tr>
            <td>
<?php echo $print->name; ?></td> 
<td>
<?php echo $print->email; ?></td> 
 <td>
 <?php echo $print->address; ?></td> 
<td> <a href="<?php echo base_url() . "index.php/Curd/del/" . $print->email; ?>">
<button>Delete</button></a></td>
<?php echo "<br>";
}
?></tr>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>