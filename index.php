<?php
session_start();
require_once 'functions/jabali.php';

$hUser = new _hUsers;
$hResource = new _hResources;
$hService = new _hServices;
$hMessage = new _hMessages;
$hNote = new _hNotes;
$hForm = new _hForms;

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
 <?php
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
</div>
</body>
</html>
