<!DOCTYPE html>
<html lang="en"><head>
	<title> Edit Slide </title>
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
				<h4 class="text-xl-center">Edit Slide</h4>
			<form action="<?= base_url() ?>Slide/handleDataEdit" method="post" enctype="multipart/form-data">
				<?php
				if(isset($data)){
					$count=0;
					foreach ($data as $key => $value) {
						// code...
					$titleMD5=md5($value['title']);
				 ?>
				<div style="background-color: gray; padding: 10px; margin-bottom: 15px;" class="slide_one">
					<h3>Slide :<?=++$count; ?></h3><div class="text-xl-right"><a class="btn btn-danger " href="<?=base_url() ?>/slide/deleteData/<?=$titleMD5?>"> Xoá</a></div>
				<fieldset class="form-group">
					<label for="">Title</label>

					<input type="text" name="title[]" class="form-control"  value="<?=$value['title']?>">
				</fieldset>
				<fieldset class="form-group">
					<label for="">Description</label>
					<input type="text" name="des[]" class="form-control" value="<?=$value['des']?>">
				</fieldset>
				<fieldset class="form-group">
					<label for="">Link</label>
					<input type="text" name="btn_link[]" class="form-control" value="<?=$value['btn_link']?>">
				</fieldset>
				<fieldset class="form-group">
					<label for="text-btn">Text btn</label>
					<input type="text" name="btn_text[]" class="form-control" value="<?=$value['btn_text']?>">
				</fieldset>
				<fieldset class="form-group">
					<label for="">Image slide</label>
					<img width="100%" src="<?=base_url()?>uploads/<?=$value['image_slide']?>" alt="">
					<input type="file" name="image_slide[]" class="form-control" placeholder="">
					<input type="hidden" name="image_slideOld[]" value="<?=$value['image_slide']?>">
				</fieldset>
				</div>
				<br>
				<?php }} ?>
				<fieldset class="form-group">
					<input type="submit" name="addSlide" class="btn btn-success" value="Update Slide">
				</fieldset>
			</form>
			</div>
		</div>
	</div>



 
</body>
</html>