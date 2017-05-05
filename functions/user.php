<?php
/*
*@author Olivia Wangari <>
*@license MIT <>
*@copyright Mtaandao Digital
*@link 
*
*@package IFMAP
*@subpackage User Views
*/

if(isset($_GET['code'])) {
  if($_GET['code'] == "list" ) {
    if(isset($GET['by'])) {
      if(isset($_GET['sort'])) {
        $hUser -> sortUsers($GET['by'], $_GET['sort']);
      } else {
        $hUser -> sortUsers($GET['by']);
      }
    } else {
      $hUser -> getUsers();
    }
  } else {
    if(isset($_GET['action'])) {
      if($_GET['action'] == "create") {
        $hForm -> userForm($_GET['code']);
      } elseif($_GET['action'] == "edit") {
        $hForm -> editForm($_GET['code']);
      } elseif($_GET['action'] == view") {
        $hUser -> getUser($_GET['code']);
      } elseif($_GET['action'] == "delete") {
        $hUser -> deleteUser($_GET['code']);
      } else {
        $hUser -> getUser($_GET['code']);
      }
    } else {
      $hUser -> getUser($_GET['code']);
    }
  }
}
?>
