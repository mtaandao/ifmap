<?php
session_start();
require_once 'functions/jabali.php';

$hDB = new _hDatabase;
$hUser = new _hUsers;
$hResource = new _hResources;
$hService = new _hServices;
$hMessage = new _hMessages;
$hNote = new _hNotes;
$hForm = new _hForms;

$hDB -> connect();

echo '<html>
 <head>';
getStyle(hSTYLES."materialize.min.css");
getStyle(hSTYLES."login_style.css");

getScript(hSCRIPTS."jquery.js");
getScript(hSCRIPTS."materialize.min.js");
echo '
</head>
<body>';
echo '
<div id="wrapper">';

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

$hDB -> close();
echo '
</div>
</body>
</html>';
