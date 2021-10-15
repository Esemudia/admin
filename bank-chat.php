<?php
  include_once("header.php");
?>
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
          <div class="container">
            <div class="chat-application">
  <div class="chat-content-head">
    <div class="header-details">
      <h5 class="m-0 sidebar-title"><i class="material-icons app-header-icon text-top">mail_outline</i> Chat</h5>
    </div>
  </div>
  <div class="app-chat">
    <div class="content-area content-right">
      <div class="app-wrapper">
        <!-- Sidebar menu for small screen -->
        <a href="#" data-target="chat-sidenav" class="sidenav-trigger hide-on-large-only">
          <i class="material-icons">menu</i>
        </a>
        <!--/ Sidebar menu for small screen -->

        <div class="card card card-default scrollspy border-radius-6 fixed-width">
          <div class="card-content chat-content p-0">
            <!-- Sidebar Area -->
            <div class="sidebar-left sidebar-fixed animate fadeUp animation-fast">
              <div class="sidebar animate fadeUp">
                <div class="sidebar-content">
                  <div id="sidebar-list" class="sidebar-menu chat-sidebar list-group position-relative">
                    <div class="sidebar-list-padding app-sidebar sidenav" id="chat-sidenav">
                      <!-- Sidebar Header -->
                      <div class="sidebar-header">
                        <div class="row valign-wrapper">
                          <div class="col s2 media-image pr-0">
                            <img src="app-assets/images/user/12.jpg" alt=""
                              class="circle z-depth-2 responsive-img">
                          </div>
                          <div class="col s10">
                            <p class="m-0 blue-grey-text text-darken-4 font-weight-700"id="dname" ><?php echo $_SESSION["session_FullName"]; ?></p>
                            <p class="m-0 info-text">.....</p>
                          </div>
                        </div>
                        <span class="option-icon">
                          <i class="material-icons">more_vert</i>
                        </span>
                      </div>
                      <!--/ Sidebar Header -->

                      <!-- Sidebar Search -->
                      <div class="sidebar-search animate fadeUp">
                        <div class="search-area">
                          <i class="material-icons search-icon">search</i>
                          <input type="text" placeholder="Search Chat" class="app-filter" id="chat_filter">
                        </div>
                        <div class="add-user">
                          <a href="#">
                            <i class="material-icons mr-2 add-user-icon">person_add</i>
                          </a>
                        </div>
                      </div>
                      <!--/ Sidebar Search -->

                      <!-- Sidebar Content List -->
                      <div class="sidebar-content sidebar-chat">
                        <div class="chat-list">
                          
                         
                            <?php
                                                
                                                   if($_SESSION["usertype"]=="7" ||$_SESSION["usertype"]==7)
                                                   {
                                                      $sql_query = "select * from messages";
                                                        $result = mysqli_query($conn,$sql_query);
                                                        if($result!= null)
                                                            {
                                                            $rows = array();
                                                             while ($row = $result->fetch_assoc())
                                                            {
                                                                $rows[] = $row;
                                                            }
                                                            $val=$rows;
                                                                    foreach($val as $key => $value)
                                                                    {
                                                                       $uname=$value["fullname"];
                                                                       $uuid=$value["outgoing_msg_id"];
                                                                        echo "
                                                                        <div class='chat-user animate fadeUp delay-2 active'  onclick= getuserchat('".$uname."'); return false;'>
                                                                        
                                                                        <div class='user-section'> <div class='row valign-wrapper'>
                                                                              <div class='col s2 media-image online pr-0'> 
                                                                              <img src='app-assets/images/user/7.jpg' alt=''
                                                                               class='circle z-depth-2 responsive-img'>
                                                                               </div>
                                                                               <div class='col s10'>
                                                                                   <p class='m-0 blue-grey-text text-darken-4 font-weight-700' id='bankname'>".$uname."</p>
                                                                                   <p class='m-0 info-text'>Apple pie bonbon cheesecake tiramisu</p>
                                                                                 </div>
                                                                               </div>
                                                                             </div>
                                                                             <div class='info-section'>
                                                                               <div class='star-timing'>
                                                                                 <div class='time'>
                                                                                   <span>12.58 pm</span>
                                                                                 </div>
                                                                               </div>
                                                                             </div>
                                                                           </div>";
                                                                       }
                                                                            
                                                                
                                                             }
                                                     }
                                            else
                                            {
                                                echo "No bank found";
                                            }
?>
                        </div>
                        <div class="no-data-found">
                          <h6 class="center">No Results Found</h6>
                        </div>
                      </div>
                      <!--/ Sidebar Content List -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Sidebar Area -->

            <!-- Content Area -->
            <div class="chat-content-area animate fadeUp" id="chat" style="display:none;">
              <!-- Chat header -->
              
              <!--/ Chat header -->

              <!-- Chat content area -->
             
              <!--/ Chat content area -->

              <!-- Chat footer <-->
              
              <!--/ Chat footer -->
            </div>
            <!--/ Content Area -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

    <!-- Theme Customizer -->
  
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
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="app-assets/js/plugins.min.js"></script>
    <script src="app-assets/js/search.min.js"></script>
    <script src="app-assets/js/custom/custom-script.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <script src="app-assets/js/validate.js"></script>
    <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/app-chat.min.js"></script>
     <!-- <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-app.js"></script> -->
        <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-database.js"></script>
<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-app.js"></script>
    <!-- END PAGE LEVEL JS-->
    <script>
      var firebaseConfig = {
        apiKey: "AIzaSyDBA58GVXOes8Xz93javE6QUB0skTWWOIc",
        authDomain: "getselfservice.firebaseapp.com",
        databaseURL: "https://getselfservice-default-rtdb.firebaseio.com",
        projectId: "getselfservice",
        storageBucket: "getselfservice.appspot.com",
        messagingSenderId: "157251055469",
        appId: "1:157251055469:web:4ace74e1fadd29b8ddf464"
      };
      firebase.initializeApp(firebaseConfig);
    </script>
  </body>
</html>