<?php
include "header.php";
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
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Account Settings</span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item active">Account Settings
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <!-- Account settings -->
<section class="tabs-vertical mt-1 section">
  <div class="row">
    <div class="col l4 s12">
      <!-- tabs  -->
      <div class="card-panel">
        <ul class="tabs">
          <li class="tab">
            <a href="#general">
              <i class="material-icons">brightness_low</i>
              <span>General</span>
            </a>
          </li>
          <li class="tab">
            <a href="#change-password">
              <i class="material-icons">lock_open</i>
              <span>Change Password</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col l8 s12">
      <!-- tabs content -->
      <div id="general">
        <div class="card-panel">
          <div class="display-flex">
            <div class="media">
              <img src="app-assets/images/avatar/avatar-12.png" class="border-radius-4" alt="profile image"
                height="64" width="64">
            </div>
            <div class="media-body">
              <div class="general-action-btn">
                <button id="select-files" class="btn indigo mr-2">
                  <span>Upload new photo</span>
                </button>
                <button class="btn btn-light-pink">Reset</button>
              </div>
              <small>Allowed JPG, GIF or PNG. Max size of 800kB</small>
              <div class="upfilewrapper">
                <input id="upfile" type="file" />
              </div>
            </div>
          </div>
          <div class="divider mb-1 mt-1"></div>
          <form class="formValidate" method="get">
            <?php
              if($_SESSION["usertype"]=="6")
              {
                $email=$_SESSION["session_email"];
                  $sql_query = "select * from users where Email='$email'";
                  $result = mysqli_query($conn,$sql_query);
                  $rows = array();
                  while ($row = $result->fetch_assoc())
                  {
                      $rows[] = $row;
                  }
                      $val=$rows;
                          if($val != null)
                         {
                              foreach ($val as $key => $value) 
                              {
                                echo"
                                <div class='row'>
                                  <div class='col s12'>
                                    <div class='input-field'>
                                      <label for='uname'>First Name</label>
                                      <input type='text' id='uname' name='uname' value=".$value["Fname"]." data-error='.errorTxt1' readonly>
                                      <small class='errorTxt1'></small>
                                    </div>
                                  </div>
                                  <div class='col s12'>
                                    <div class='input-field'>
                                      <label for='name'>Last Name</label>
                                      <input id='name' name='name' type='text' value=".$value["Lname"]." data-error='.errorTxt2' readonly>
                                      <small class='errorTxt2'></small>
                                    </div>
                                  </div>
                                  <div class='col s12'>
                                    <div class='input-field'>
                                      <label for='email'>E-mail</label>
                                      <input id='email' type='email' name='email' value=".$value["email"]." data-error='.errorTxt3' readonly>
                                      <small class='errorTxt3'></small>
                                    </div>
                                  </div>
                                  <div class='col s12 display-flex justify-content-end form-action'>
                                  <button type='reset' onclick='deleteuser();return false;' class='btn btn-light-pink waves-effect waves-light'>Delete</button>
                                </div>
                                </div>";
                              }
                         }
              }
              if($_SESSION["usertype"]=="7")
              {
                $email=$_SESSION["session_email"];
                  $sql_query = "select * from bank where Email='$email'";
                  $result = mysqli_query($conn,$sql_query);
                  $rows = array();
                  while ($row = $result->fetch_assoc())
                  {
                      $rows[] = $row;
                  }
                      $val=$rows;
                          if($val != null)
                         {
                              foreach ($val as $key => $value) 
                              {
                                echo"
                                <div class='row'>
                                  <div class='col s12'>
                                    <div class='input-field'>
                                      <label for='uname'>Bank Name</label>
                                      <input type='text' id='uname' name='uname' value=".$value["BankName"]." data-error='.errorTxt1' readonly>
                                      <small class='errorTxt1'></small>
                                    </div>
                                  </div>
                                  // <div class='col s12'>
                                  //   <div class='input-field'>
                                  //     <label for='name'>Last Name</label>
                                  //     <input id='name' name='name' type='text' value=".$value["Lname"]." data-error='.errorTxt2' readonly>
                                  //     <small class='errorTxt2'></small>
                                  //   </div>
                                  // </div>
                                  <div class='col s12'>
                                    <div class='input-field'>
                                      <label for='email'>E-mail</label>
                                      <input id='email' type='email' name='email' value=".$value["bankEmail"]." data-error='.errorTxt3' readonly>
                                      <small class='errorTxt3'></small>
                                    </div>
                                  </div>
                                  <div class='col s12 display-flex justify-content-end form-action'>
                                  <button type='reset' onclick='deleteuser();return false' class='btn btn-light-pink waves-effect waves-light'>Delete</button>
                                </div>
                                </div>";
                              }
                         }
              }
              else if($_SESSION["usertype"]<6)
              {
                {
                  $email=$_SESSION["session_email"];
                    $sql_query = "select * from Admin where Email='$email'";
                    $result = mysqli_query($conn,$sql_query);
                    $rows = array();
                    while ($row = $result->fetch_assoc())
                    {
                        $rows[] = $row;
                    }
                        $val=$rows;
                            if($val != null)
                           {
                                foreach ($val as $key => $value) 
                                {
                                  echo"
                                  <div class='row'>
                                    <div class='col s12'>
                                      <div class='input-field'>
                                        <label for='uname'>First Name</label>
                                        <input type='text' id='uname' name='uname' value=".$value["Fname"]." data-error='.errorTxt1' readonly>
                                        <small class='errorTxt1'></small>
                                      </div>
                                    </div>
                                    <div class='col s12'>
                                      <div class='input-field'>
                                        <label for='name'>Last Name</label>
                                        <input id='name' name='name' type='text' value=".$value["Lname"]." data-error='.errorTxt2' readonly>
                                        <small class='errorTxt2'></small>
                                      </div>
                                    </div>
                                    <div class='col s12'>
                                      <div class='input-field'>
                                        <label for='name'>Phone</label>
                                        <input id='Phone' name='name' type='text' value=".$value["phone"]." data-error='.errorTxt2' readonly>
                                        <small class='errorTxt2'></small>
                                      </div>
                                    </div>
                                    <div class='col s12'>
                                      <div class='input-field'>
                                        <label for='email'>E-mail</label>
                                        <input id='email' type='email' name='email' value=".$value["email"]." data-error='.errorTxt3' readonly>
                                        <small class='errorTxt3'></small>
                                      </div>
                                    </div>
                                  </div>";
                                }
                           }
                }
              }
            ?>
          </form>
        </div>
      </div>
      <div id="change-password">
        <div class="card-panel">
          <form class="paaswordvalidate">
            <div class="row">
            <div class='col s12'>
                <div class='input-field'>
                  <label for='email'>E-mail</label>
                  <input id='email' type='email' name='email' value=<?php $valy=$value["email"]; echo $valy;?> data-error='.errorTxt3' readonly>
                  <small class='errorTxt3'></small>
                </div>
              </div>
              <div class='col s12'>
                <div class='input-field'>
                  <input id='type' type='hidden' name='type' value=<?php $va=$_SESSION["usertype"]; echo $va;?> data-error='.errorTxt3' readonly>
                  <small class='errorTxt3'></small>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="oldpswd" name="oldpswd" type="password" data-error=".errorTxt4">
                  <label for="oldpswd">Old Password</label>
                  <small class="errorTxt4"></small>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="newpswd" name="newpswd" type="password" data-error=".errorTxt5">
                  <label for="newpswd">New Password</label>
                  <small class="errorTxt5"></small>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="repswd" type="password" name="repswd" data-error=".errorTxt6">
                  <label for="repswd">Retype new Password</label>
                  <small class="errorTxt6"></small>
                </div>
              </div>
              <div class="col s12 display-flex justify-content-end form-action">
                <button type="submit" onclick="updatepword(); return false;" class="btn indigo waves-effect waves-light mr-1">Save changes</button>
                <button type="reset" class="btn btn-light-pink waves-effect waves-light">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
   
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
    <script src="app-assets/vendors/select2/select2.full.min.js"></script>
    <script src="app-assets/vendors/jquery-validation/jquery.validate.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="app-assets/js/plugins.min.js"></script>
    <script src="app-assets/js/search.min.js"></script>
    <script src="app-assets/js/custom/custom-script.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/page-account-settings.min.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>

</html>