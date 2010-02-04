<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"<? if(!empty($html_class)) { echo ' class="'.$html_class.'"'; } ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?=$page_title; ?></title>
<link href="./styles/import.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="./scripts/pngfix.js"></script>
<![endif]-->
</head>

<body<? if(!empty($body_id)) { echo ' id="'.$body_id.'"'; } ?> class="<?=$body_cols; ?>">

<div id="page_container">
	
	<div id="page_header">
		<dl class="login">
			<form>
			<dt><label for="login_client_id">Client ID</label></dt>
				<dd><input type="text" class="text" id="login_client_id" name="login_client_id" /></dd>
			<div class="float_clearer"><hr /></div>
			<dt><label for="login_password">Password</label></dt>
				<dd><input type="password" class="text" id="login_password" name="login_password"  /></dd>
			<div class="float_clearer"><hr /></div>
			<dd><input type="image" src="./images/header_login.png" class="image" /></dd>
			</form>
		</dl>
		</ul>
		<ul id="page_nav">
			<li id="page_nav_home"><a href="#">Home</a></li>
			<li id="page_nav_about"><a href="#">About Us</a></li>
			<li id="page_nav_services"><a href="#">Services</a></li>
			<li id="page_nav_careers"><a href="#">Careers</a></li>
			<li id="page_nav_contact"><a href="#">Contact</a></li>
		</ul>
	</div>
	