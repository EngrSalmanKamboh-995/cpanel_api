<?php
	session_start();
	require_once dirname(__FILE__).'/../helpers/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>./../assets/font-awesome.min.css"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<title>Home | CPanel API</title>

	<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link rel="stylesheet" href="./../assets/dashboard.css">
</head>
<body>


	<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-auto px-3" href="#">CPANEL API - BSD</a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">

    <main role="main" class="col-12">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>


      <div class="row">
      	<div class="col-12">
      		<div class="listConnections" id="listConnections">
      			<a href="#" class="card card-connection" style="width: 18rem !important;">
				  <div class="card-body">
      				<h5>Connection: 192.168.0.1</h5>
      				<i class="fa fa-database"></i>
				  </div>
				</a>
				<a href="#" class="card card-connection" style="width: 18rem !important;">
				  <div class="card-body">
      				<h5>Connection: 192.168.0.1</h5>
      				<i class="fa fa-database"></i>
				  </div>
				</a>
				<a href="#" class="card card-connection" style="width: 18rem !important;">
				  <div class="card-body">
      				<h5>Connection: 192.168.0.1</h5>
      				<i class="fa fa-database"></i>
				  </div>
				</a>
				<a href="#" class="card card-connection" style="width: 18rem !important;">
				  <div class="card-body">
      				<h5>Connection: 192.168.0.1</h5>
      				<i class="fa fa-database"></i>
				  </div>
				</a>
				<a href="#" class="card card-connection" style="width: 18rem !important;">
				  <div class="card-body">
      				<h5>Connection: 192.168.0.1</h5>
      				<i class="fa fa-database"></i>
				  </div>
				</a>
				<a href="#" class="card card-connection" style="width: 18rem !important;">
				  <div class="card-body">
      				<h5>Connection: 192.168.0.1</h5>
      				<i class="fa fa-database"></i>
				  </div>
				</a>
      		</div>
      	</div>
      </div>

  </div>
</div>



	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>	
</body>
</html>