<?php

require_once 'functions/jabali.php';

$hUser = new _hUsers;
$hResource = new _hResources;
$hService = new _hServices;
$hMessage = new _hMessages;
$hNote = new _hNotes;
$hForm = new _hForms;

if(isset($_GET['login'])) {
  $hForm -> loginForm();
} elseif(isset($_GET['confirm'])) {
  $hForm -> loginForm();
} elseif(isset($_GET['forgot'])) {
  $hForm -> loginForm();
} elseif(isset($_GET['reset'])) {
  $hForm -> loginForm();
} elseif(isset($_GET['logout'])) {
  $hForm -> loginForm();
} else {
  $hForm -> startForm();
}

if(isset($_POST['login'])) {
  $hUser -> loginUser();
}

?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
<link href="login_style.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
</head>
<body>
<div id="wrapper">

<div id="login_div">
<form method="post">

<div class="input-field">
<i class="mdi-social-person-outline prefix"></i>
<input class="validate" id="email" type="email">
<label for="email" data-error="wrong" data-success="right" class="center-align">Enter Your Email</label>
</div>

<div class="input-field">
<i class="mdi-action-lock-outline prefix"></i>
<input id="password" type="password">
<label for="password">Password</label>
</div>
        
<div class="input-field">
<input type="checkbox" id="remember-me"/>
<label for="remember-me">Remember me</label>
</div>

<div class="input-field">
<button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
</div>

<p>
<a href="#" id="register">Register Now!</a>
<a href="#" id="forgot">Forgot password?</a>
</p>

<br>
<br>
</form>
</div>

</div>
</body>
</html>
