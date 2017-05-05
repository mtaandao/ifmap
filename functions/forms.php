<?php
/*
*User Forms
*/

class _hForms() {

  function loginForm() {
    echo '<div id="login_div">
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
    </div>';
  }
  
  function logoutForm() {
  }
  
  function registerForm() {
  }
  
  function forgotForm() {
  }
  
  function resetForm() {
  }
  
  function aboutForm() {
  }
  
  function userForm() {
  }
  
  /*
  *Service Forms
  */
  
  
  //Users class
  function typeSummary() {
  }
  
  function getTypes() {
  }
  
  function getCount() {
  }
  
  function getCount($status) {
  }
  
  function listUsers($by) {
  }
  
  function lastLogin() {
  }
  
}
