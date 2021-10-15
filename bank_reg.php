<?php
include_once("header.php")
?>
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Bank Registration</span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="index.php">Home</a>
                  </li>
                </ol>
              </div>
             
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <div class="section">
  

  <!-- HTML VALIDATION  -->

  <div class="row">
    <div class="col s12">
      <div id="html-validations" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Bank Details</h4>
              </div>
              <div class="col s12 m6 l2">
              </div>
            </div>
          </div>
          <div id="html-view-validations">
            <form class="formValidate0" id="formValidate0" method="get">
              <div class="row">
                <div class="input-field col s12">
                  <label for="uname0">Bank Name*</label>
                  <input class="validate" required id="uname0" name="uname0" type="text">
                </div>
                <div class="input-field col s12">
                  <label for="cemail0">E-Mail *</label>
                  <input class="validate" required id="cemail0" type="email" name="cemail0">
                </div>
                <div class="input-field col s12">
                  <label for="password0">Password *</label>
                  <input class="validate" required id="password0" type="password" name="password0">
                </div>
                <div class="input-field col s12">
                  <label for="cpassword0">Confirm Password *</label>
                  <input class="validate" required id="cpassword0" type="password" name="cpassword0">
                </div>
                <div class="col s12">
                  <label for="tnc_select1">T&C *</label>
                  <p>
                    <label>
                      <input class="validate" required id="tnc_select1" type="checkbox" />
                      <span>Please agree to our policies</span>
                    </label>
                  </p>
                  <div class="input-field">
                  </div>
                </div>
                <div class="input-field col s12">
                  <button class="btn waves-effect waves-light right" onclick="regBank(); return false;" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- BEGIN: Footer-->

   
    <footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container"><span>&copy; 2020          <a href="http://getglobalselfservice.com" target="_blank">GetGlobalSelfservice</a> All rights reserved.</span><span class="right hide-on-small-only"></span></div>
      </div>
    </footer>
    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/jquery-validation/jquery.validate.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="app-assets/js/plugins.min.js"></script>
    <script src="app-assets/js/search.min.js"></script>
    <script src="app-assets/js/custom/custom-script.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/form-validation.js"></script>
    <script src="app-assets/js/validate.js"></script>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>

<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Sep 2021 11:29:28 GMT -->
</html>