<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title><?=$pageTitle?></title>
	<link rel="stylesheet" href="<?=base_url('assets/css/normalize.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/themify-icons.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/cs-skin-elastic.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/flag-icon.min.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/scss/style.css')?>">
	<link rel="shortcut icon" href="<?=base_url('assets/img/favicon.ico')?>">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body class="bg-dark">

		<div class="sufee-login d-flex align-content-center flex-wrap">
	        <div class="container">
	            <div class="login-content">
	                <div class="login-logo">
	                    <a href="index.html">
	                        <?=$pageHeader?><br>
	                        PT. Aneka Mitra Gemilang
	                    </a>
	                </div>
	                <div class="login-form">
	                    <form action="<?=base_url('auth/login')?>" method="post">
	                        <div class="form-group">
	                            <label>Username</label>
	                            <input type="text" name="uname" class="form-control" placeholder="Username" maxlength="15" required autocomplete="off" autofocus>
	                        </div>
	                        <div class="form-group">
	                            <label>Password</label>
	                            <input type="password" name="passw" class="form-control" placeholder="Password" maxlength="15" required>
	                        </div>
	                        <!--<div class="checkbox">
	                            <label>
	                                <input type="checkbox"> Remember Me
	                            </label>
	                            <label class="pull-right">
	                                <a href="#">Forgotten Password?</a>
	                            </label>

	                        </div>-->
	                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>


	<script type="text/javascript" src="<?=base_url('assets/js/vendor/jquery-2.1.4.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/popper.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/plugins.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/main.js')?>"></script>
</body>
</html>