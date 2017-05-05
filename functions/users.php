<?php

class _hUsers() {
h_alias, h_author, h_avatar, h_center, h_code, h_created, h_custom, h_description, h_email, h_key, h_level, h_link, h_location, h_logdate, h_logip, h_notes, h_phone, h_status, h_style, h_type, h_updated
h_alias, h_author, h_avatar, h_center, h_code, h_created, h_custom, h_description, h_email, h_key, h_level, h_link, h_location, h_logdate, h_logip, h_notes, h_phone, h_status, h_style, h_type, $h_updated
  var h_h_alias, h_author, h_avatar, h_center, h_code, h_created, h_custom, h_description, h_email, h_key, h_level, h_link, h_location, h_logdate, h_logip, h_notes, h_phone, h_status, h_style, h_type, h_updated
  
  function createUser() {
  }
  
  function updateUser() {
  }
  
  function deleteUser()  {
  }
  
  function getUsers() {
    $conn = $_GLOBALS['conn'];
    $sql = "SELECT * FROM hUsers ORDER BY h_created DESC";
    $result = mysqli_querry($sql);
    if( $result-num_rows>0 ) {
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row[''];
        
        echo '<table></table>';
      }
    } else {
      echo '<div>
      </div>
    }
  }
  
  function getUser($code) {
  }
  
  function editUser($code) {
  }
  
  function sortUsers($by, $sort) {
  }
  
  function sortUsers($by) {
  }
  
 function loginUser() {
 }
  
 function logoutUser() {
 }
  
 function confirmUser() {
 }
  
 function forgotPass() {
 }
  
 function resetPass() {
 }
  
 function getKey() {
 }
  
 function emailUser($email, $subject, $key) {
   if($subject == "create") {
   } elseif($subject == "confirm") {
   } elseif($subject == "forgot") {
   } elseif($subject == "reset") {
   }
 }
  
 
}
