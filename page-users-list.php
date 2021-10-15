<?php
  include("header.php");
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
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>User List</span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item active">User List
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <!-- users list start -->
<section class="users-list-wrapper section">
  <div class="users-list-filter">
    <div class="card-panel">
      <div class="row">
        <form>
          <div class="col s12 m6 l3">
            <label for="users-list-status">Status</label>
            <div class="input-field">
              <select class="form-control" id="users-list-status">
                <option value="">Any</option>
                <option value="Active">Active</option>
                <option value="Banned">De-Activated</option>
              </select>
            </div>
          </div>
          <div class="col s12 m6 l3 display-flex align-items-center show-btn">
            <button type="submit" class="btn btn-block indigo waves-effect waves-light">Show</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="users-list-table">
    <div class="card">
      <div class="card-content">
        <!-- datatable start -->
        <div class="responsive-table">
          <table id="users-list-datatable" class="table">
            <thead>
              <tr>
                <th>id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email </th>
                <th>Reg Date</th>
                <th>Status</th>
                <th>view</th>
              </tr>
            </thead>
            <tbody>
              <?php
                 $sql_query = "select * from users";
                 $result = mysqli_query($conn,$sql_query);
                 if($result!= null)
                     {

                 
                      $rows = array();

                        while ($row = $result->fetch_assoc())
                      {
                          $rows[] = $row;
                      }
                      $val=$rows;
                      $i=0;
                             foreach($val as $key => $value)
                             {
                              $i++;
                              $status=$value["Status"];
                              if($status==1)
                              {
                                echo"
                                    <tr>
                                      <td>".$i."</td>
                                      <td>".$value["Fname"]."</td>
                                      <td>".$value["Lname"]."</td>
                                      <td>".$value["email"]."</td>
                                      <td>".$value["regDate"]."</td>
                                      <td><span class='chip green lighten-5'>
                                      <span class='green-text'>Active</span>
                                      </span></td>
                                      <td><a href='' onclick='alert('\\".$value["id"]."')'><i class='material-icons'>remove_red_eye</i></a></td>
                                    </tr>";
                              }
                              else
                              {
                                echo"
                                <tr>
                                <td>".$i."</td>
                                <td>".$value["Fname"]."</td>
                                <td>".$value["Lname"]."</td>
                                <td>".$value["email"]."</td>
                                <td>".$value["regDate"]."</td>
                                <td><span class='chip red lighten-5'><span class='red-text'>Banned</span></span></td>
                                <td><a href='' onclick='alert('\\".$value["id"]."')'><i class='material-icons'>remove_red_eye</i></a></td>
                              </tr>";
                              }
                             }
                        }
              ?>
            </tbody>
          </table>
        </div>
        <!-- datatable ends -->
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
    <script src="app-assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <script src="app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="app-assets/js/plugins.min.js"></script>
    <script src="app-assets/js/search.min.js"></script>
    <script src="app-assets/js/custom/custom-script.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/page-users.min.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>

<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/page-users-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Sep 2021 11:27:54 GMT -->
</html>