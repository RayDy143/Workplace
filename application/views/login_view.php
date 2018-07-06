<!DOCTYPE html>
<html lang="en">
<head>
	<title>OES-Login</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Metro 4 -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/metro/css/metro-all.css');?>">
	<style>
	       .login-form {
	           width: 350px;
	           height: auto;
	           top: 50%;
	           margin-top: -160px;
	       }
	</style>
</head>
<body class="h-vh-100 bg-brandColor2">
	<div class="container-fluid p-3 bg-white win-shadow">
		<h3 class="text-center">ONLINE EVALUATION SYSTEM FOR NON-ACADEMIC SCHOLARS OF ACT</h5>
	</div>
	<form class="login-form bg-white p-8 mx-auto border win-shadow"
          data-role="validator"
          action="javascript:"
          data-clear-invalid="2000"
          data-on-error-form="invalidForm"
          data-on-validate-form="validateForm">
        <span class="mif-vpn-lock mif-4x place-right" style="margin-top: -10px;"></span>
        <h2 class="text-light">Login here</h2>
        <hr class="thin mt-4 mb-4 bg-white">
        <div class="form-group">
            <input type="text" data-role="input" data-prepend="<span class='mif-envelop'>" placeholder="Enter your email..." data-validate="required email">
        </div>
        <div class="form-group">
            <input type="password" data-role="input" data-prepend="<span class='mif-key'>" placeholder="Enter your password..." data-validate="required minlength=6">
        </div>
        <div class="form-group mt-10">
            <input type="checkbox" data-role="checkbox" data-caption="Remember me" class="place-right">
            <button class="button bg-brandColor2 fg-white">Login</button>
        </div>
    </form>
	<!-- jQuery first, then Metro UI JS -->
	<script type="text/javascript" src="<?php echo base_url('assets/metro/js/jquery-3.2.1.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/metro/js/metro.js');?>"></script>
	<script>
        function invalidForm(){
            var form  = $(this);
            form.addClass("ani-ring");
            setTimeout(function(){
                form.removeClass("ani-ring");
            }, 1000);
        }
        function validateForm(){
            $(".login-form").animate({
                opacity: 0
            });
        }
    </script>
</body>
</html>
</body>
</html>