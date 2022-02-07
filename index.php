<?php
	session_start();
	require_once dirname(__FILE__).'/helpers/functions.php';

	if(isset($_SESSION['is_loggedin'])&&$_SESSION['is_loggedin']==true){
		header("Location: ./admin/home.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<title>Login - Cpanel API</title>
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

    html,
	body {
	  height: 100%;
	}

	body {
	  display: -ms-flexbox;
	  display: flex;
	  -ms-flex-align: center;
	  align-items: center;
	  padding-top: 40px;
	  padding-bottom: 40px;
	  background-color: #f5f5f5;
	}

	.form-signin {
	  width: 100%;
	  max-width: 330px;
	  padding: 15px;
	  margin: auto;
	}
	.form-signin .checkbox {
	  font-weight: 400;
	}
	.form-signin .form-control {
	  position: relative;
	  box-sizing: border-box;
	  height: auto;
	  padding: 10px;
	  font-size: 16px;
	}
	.form-signin .form-control:focus {
	  z-index: 2;
	}
	.form-signin input[type="email"] {
	  margin-bottom: -1px;
	  border-bottom-right-radius: 0;
	  border-bottom-left-radius: 0;
	}
	.form-signin input[type="password"] {
	  margin-bottom: 10px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
    </style>
</head>
<body class="text-center">
	<form class="form-signin" method="post" autocomplete="off" id="login">
	  <img class="mb-4" src="./images/bsd_logo.png" alt="" width="100" style="object-fit:contain">
	  <h1 class="h4 mb-3 font-weight-normal">Please sign in</h1>
	  <input type="text" id="username" class="form-control mb-3" autocomplete="off" placeholder="Username" autofocus>
	  <input type="password" id="password" class="form-control mb-3" autocomplete="off" placeholder="Password">
	  <div class="checkbox mb-3">
	  </div>
	  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	  <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
	</form>    

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
	<script>
			
		jQuery('form').validate({
			'rules' : {
				'username': {
					'required' : true
				},
				'password': {
					'required' : true
				}
			}
		});	

		$('#login').on('submit', function(e){
			if(!$(this).valid()) return;

			e.preventDefault();

			$.ajax({
		        url: '<?= base_url('apis/login.php') ?>',
		        dataType: 'json',
		        type: 'post',
		        data: {
		        	username: $('#username').val(),
		        	password: $('#password').val()
		        },
		        mimeType:"multipart/form-data",
		        beforeSend: function() {},
		        complete: function() {},
		        success: function(json) {
		        	console.log(json)

		            if(json.success)
		            {
		                $('#sub_project_id').html(json.html).trigger('change');
		            } else {

		            }
		        },
		        error: function(xhr, ajaxOptions, thrownError) {
		            console.log(xhr.responseText);
		        }
		    });

		});

	</script>
  </body>
</html>