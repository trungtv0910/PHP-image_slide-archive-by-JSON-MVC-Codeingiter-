<!DOCTYPE html>
<html lang="en"><head>
	<title> Add Slide </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?=base_url()?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?=base_url()?>1.js"></script>
	<link rel="stylesheet" href="<?=base_url()?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url()?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?=base_url()?>1.css">
</head>
<body >
 <?php 
include 'navbar.php';
 ?>
 <br>
	<div class="container">
		<div class="row">
			<div class="col-xl-6 push-xl-3">
				<h4 class="text-xl-center">New Slide</h4>
			<form action="<?= base_url() ?>Slide/handleDataAdd" method="post" enctype="multipart/form-data">
				<fieldset class="form-group">
					<label for="">Title</label>
					<input type="text" name="title" class="form-control"  placeholder="Add title">
				</fieldset>
				<fieldset class="form-group">
					<label for="">Description</label>
					<input type="text" name="des" class="form-control" placeholder="Description">
				</fieldset>
				<fieldset class="form-group">
					<label for="">Link</label>
					<input type="text" name="btn_link" class="form-control" placeholder="Ex: fb.com/xxxxx/xxxx">
				</fieldset>
				<fieldset class="form-group">
					<label for="text-btn">Text btn</label>
					<input type="text" name="btn_text" class="form-control" placeholder="Click view,Other,More">
				</fieldset>
				<fieldset class="form-group">
					<label for="">Image slide</label>
					<input type="file" name="image_slide" class="form-control" placeholder="">
				</fieldset>
				<fieldset class="form-group">
					<input type="submit" name="addSlide" class="btn btn-success" value="Add Slide">
				</fieldset>
			</form>
			</div>
		</div>
	</div>



 
</body>
</html>