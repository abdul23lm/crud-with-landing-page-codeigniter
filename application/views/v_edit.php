<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter</h1>
		<h3>Edit Data</h3>
	</center>

	<div class="container">
	<div class="col-sm-2 col-sm offset-5">
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">	
  		<div class="form-group">

    	<label>Nama</label>
		<input type="hidden" name="id" value="<?php echo $u->id ?>">
		<input type="text" name="nama" value="<?php echo $u->nama ?>">
 		 </div>
  <div class="form-group">
   		 <label>Alamat</label>
		<td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
  </div>
  <div class="form-group">
  	  <label>Pekerjaan</label>
	<td><input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>"></td>
  </div>

  <button type="submit" value="Simpan" class="btn btn-primary">Submit</button>
  
</form>
		</div>
	</div>
	<?php } ?>
</body>

<script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
  <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.countdown.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url();?>assets/js/aos.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.fancybox.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.sticky.js"></script>

  
  <script src="<?php echo base_url();?>assets/js/main.js"></script
</html>
