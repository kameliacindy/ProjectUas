<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($this->session->userdata('level') == 'Penjaga'){
	$site="penjaga/";
}
else if($this->session->userdata('level') == 'Admin'){
	$site="admin/";
}
else{
	$site="welcome/";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sistem Antrian Loket</title>
	<link rel="stylesheet" type="text/css" href='assets/css/bootstrap.css?v=1.1'>
	<link rel="stylesheet" type="text/css" href='assets/css/loket.css?v=1.1'>
	<link rel="icon" type="icon" href='media/'>

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
</head>
<body>
<header>
	
</header>
<nav>
	<div class="row">
		<div class="col-md-12">	
			<div class="menu">
				
			</div>
		</div>
	</div>
</nav>

<section>
	<div class="container">
		<?php $this->load->view($content); ?>
	</div>
</section>


<footer>
	<div class="row">
		<div class="col-md-8">
		</div>
		<div class="col-md-4">
	<?php
if(empty($this->session->userdata('level'))){ ?>
	<a class="footer" href="<?php echo site_url('welcome/login/'); ?>">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ? '</strong>' : '' ?></a>
	<a class="footer" href="<?php echo site_url('welcome/antrian/'); ?>">Nomer Antrian</a>
<?php }
else{ ?>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ? '</strong>' : '' ?></p>
<?php }
?>
		</div>
	</div>
</footer>

</body>
</html>