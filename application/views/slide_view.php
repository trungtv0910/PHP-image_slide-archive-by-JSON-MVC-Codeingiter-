<!DOCTYPE html>
<html lang="en"><head>
	<title> Home </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?=base_url()?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?=base_url()?>1.js"></script>
	<link rel="stylesheet" href="<?=base_url()?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url()?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?=base_url()?>1.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body >
 <?php 
include 'navbar.php';
 ?>
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				  	<?php
				  	$count=1;
				  	if(isset($data)){
				  		foreach ($data as $key => $value) {
				  	 ?>
				    <div class="carousel-item <?php if($count==1){ echo 'active'; $count++;} ?>">
				      <img style="height: 300px;" class="d-block w-100" src="<?=base_url()?>uploads/<?=$value['image_slide'] ?>" alt="First slide">
				       <div style="text-align: left;" class="carousel-caption d-none d-md-block">
						    <h5><?=$value['title'] ?></h5>
						    <p><?=$value['des'] ?></p>
						    <a class="btn btn-primary" target="_blank" href="<?=$value['btn_link'] ?>"><?=$value['btn_text'] ?></a>
						  </div>
				    </div>
				   
						
						 
				
				  	<?php }} ?>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
			</div>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-xl-8">
			
				<div class="card-deck">
				  <div class="card">
				    <img style="width: 100%;" class="card-img-top" src="<?=base_url()?>uploads/menback.jpg" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Card title</h5>
				      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				  <div class="card">
				    <img style="width: 100%;" class="card-img-top" src="<?=base_url()?>uploads/menback.jpg" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Card title</h5>
				      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				  <div class="card">
				    <img style="width: 100%;" class="card-img-top" src="<?=base_url()?>uploads/menback.jpg" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Card title</h5>
				      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				</div>




			</div>
			<div class="col-xl-4">
				<div id="list-example" class="list-group">
				  <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
				  <a class="list-group-item list-group-item-action" href="#list-item-2">Item2</a>
				  <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
				  <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
				</div>
				<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
				  <h4 id="list-item-1">Item 1</h4>
				  <p>...</p>
				  <h4 id="list-item-2">Item 2</h4>
				  <p>...</p>
				
				</div>
			</div>
		</div>
	</div>
	
<style>
	.carousel-control-prev {
    left: 0;
}
	.carousel-control-next {
    right: 0;
}


.carousel-control-next, .carousel-control-prev {
    position: absolute;
    top: 0;
    bottom: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 15%;
    color: #fff;
    text-align: center;
    opacity: .5;
}
.carousel-control-next-icon,.carousel-control-prev-icon{
	font-size: 40px;
}
</style>


</body>
</html>