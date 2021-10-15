<?php
include_once "header.php";
?>
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
          <div class="container">
            <!-- Sidebar Area Starts -->
<div class="email-overlay"></div>
<div class="sidebar-left sidebar-fixed">
  <div class="sidebar">
    <div class="sidebar-content">
      <div class="sidebar-header">
        <div class="sidebar-details">
          <h5 class="m-0 sidebar-title"><i class="material-icons app-header-icon text-top">mail_outline</i> Mailbox</h5>
          <div class="row valign-wrapper mt-10 pt-2 animate fadeLeft">
            <div class="col s3 media-image">
              <img src="app-assets/images/user/2.jpg" alt="" class="circle z-depth-2 responsive-img">
              <!-- notice the "circle" class -->
            </div>
            <div class="col s9">
              <?php
              echo "<p class='m-0 subtitle font-weight-700'>".$_SESSION["session_FullName"]."</p>
              <p class='m-0 text-muted'>".$_SESSION["session_email"]."</p>";
              ?>
            </div>
          </div>
        </div>
      </div>
      <div id="sidebar-list" class="sidebar-menu list-group position-relative animate fadeLeft">
        <div class="sidebar-list-padding app-sidebar sidenav" id="email-sidenav">
          <ul class="email-list display-grid">
            <li class="sidebar-title">Folders</li>
            <li class="active"><a href="#!" class="text-sub"><i class="material-icons mr-2"> mail_outline </i> Inbox</a>
            </li>
            <li><a href="app-email-sent.php" class="text-sub"><i class="material-icons mr-2"> send </i> Sent</a></li>
            
          </ul>
        </div>
      </div>
      <a href="#" data-target="email-sidenav" class="sidenav-trigger hide-on-large-only"><i
          class="material-icons">menu</i></a>
    </div>
  </div>
</div>
<!-- Sidebar Area Ends -->

<!-- Content Area Starts -->
<div class="app-email">
  <div class="content-area content-right">
    <div class="app-wrapper">
      <div class="app-search">
        <i class="material-icons mr-2 search-icon">search</i>
        <input type="text" placeholder="Search Mail" class="app-filter" id="email_filter">
      </div>
      <div class="card card card-default scrollspy border-radius-6 fixed-width">
        <div class="card-content p-0 pb-2">
          <div class="email-header">
            <div class="left-icons">
              <span class="header-checkbox">
                <label>
                  <input type="checkbox" onClick="toggle(this)" />
                  <span></span>
                </label>
              </span>
              <span class="action-icons">
                <i class="material-icons">refresh</i>
                <i class="material-icons">mail_outline</i>
                <i class="material-icons">label_outline</i>
                <i class="material-icons">folder_open</i>
                <i class="material-icons">info_outline</i>
                <i class="material-icons delete-mails">delete</i>
              </span>
            </div>
            <div class="list-content"></div>
            <div class="email-action">
              <span class="email-options"><i class="material-icons grey-text">more_vert</i></span>
            </div>
          </div>
          <div class="collection email-collection">
          <?php
                    $email=$_SESSION["session_email"];
                    $name=$_SESSION["session_FullName"];
                    $sql="SELECT * FROM Email where reciever='$email' and  OR reciever='$name' ";
                    $result= mysqli_query($conn,$sql);
                    if($result != null )
                    {
                          $rows = array();

                          while ($row = $result->fetch_assoc())
                        {
                            $rows[] = $row;
                        }
                        $val=$rows;
                        foreach ($val as $key => $value) 
                        {
                            echo"
                            <div class='email-brief-info collection-item animate fadeUp delay-1'>
                              <div class='list-left'>
                                <label>
                                  <input type='checkbox' name='foo' />
                                  <span></span>
                                </label>
                                <div class='favorite'>
                                  <i class='material-icons'>star_border</i>
                                </div>
                                <div class='email-label'>
                                  <i class='material-icons'>label_outline</i>
                                </div>
                              </div>
                              <a class='list-content' href='app-email-content.php?id=".$value['id']."'>
                                <div class='list-title-area'>
                                  <div class='user-media'>
                                    <img src='app-assets/images/user/2.jpg' alt=''
                                      class='circle z-depth-2 responsive-img avtar'>
                                    <div class='list-title'>".$value['reciever']."</div>
                                  </div>
                                </div>
                                <div class='list-desc'>".$value['subject']."</div>
                              </a>
                              <div class='list-right'>
                                <div class='list-date'>".$value['date_Time']."</div>
                              </div>
                          </div>";
                        }
                      
                    }
                    else{
                        echo "<div class='no-data-found collection-item'>
                        <h6 class='center-align font-weight-500'>No Sent Mail</h6>
                      </div>";
                    }
                ?>
          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Content Area Ends -->

<!-- Add new email popup -->
<div style="bottom: 54px; right: 19px;" class="fixed-action-btn direction-top">
  <a class="btn-floating btn-large primary-text gradient-shadow compose-email-trigger" href="#">
    <i class="material-icons">add</i>
  </a>
</div>
<!-- Add new email popup Ends-->

<!-- email compose sidebar -->
<div class="email-compose-sidebar">
  <div class="card quill-wrapper">
    <div class="card-content pt-0">
      <div class="card-header display-flex pb-2">
        <h3 class="card-title">NEW MESSAGE</h3>
        <div class="close close-icon">
          <i class="material-icons">close</i>
        </div>
      </div>
      <div class="divider"></div>
      <!-- form start -->
      <form class="edit-email-item mt-10 mb-10">
        <div class="input-field">
        <?php 
          $val=$_SESSION['session_email'];
          echo" 
          <input type='email' class='edit-email-item-title validate' id='edit-item-from' value=".$val."
            disabled>";
            ?>
          <label for="edit-item-from">From</label>
        </div>
        <div class="input-field">
          <input type="email" class="edit-email-item-date" id="edit-item-to">
          <label for="edit-item-to">To</label>
        </div>
        <div class="input-field">
          <input type="text" class="edit-email-item-date" id="edit-item-subject">
          <label for="edit-item-subject">Subject</label>
        </div>
        <div class="input-field">
          <input type="email" class="edit-email-item-date" id="edit-item-CC">
          <label for="edit-item-CC">CC</label>
        </div>
        <div class="input-field">
          <input type="email" class="edit-email-item-date" id="edit-item-BCC">
          <label for="edit-item-BCC">BCC</label>
        </div> 
        
        <!-- Compose mail Quill editor -->
        <div class="input-field">
          <div class="snow-container mt-2">
          <textArea id="mailbody" style="height:400px; border:none"></textArea>
            <div class="compose-editor"style="display:none">></div>
           
             <div class="compose-quill-toolbar" > 
              <!-- <span class="ql-formats mr-0">
                <button class="ql-bold"></button>
                <button class="ql-italic"></button>
                <button class="ql-underline"></button>
                <button class="ql-link"></button>
                <button class="ql-image"></button>
              </span> -->
              
            </div>
          </div>
        </div>
        <div class="file-field input-field">
          <div class="btn btn-file">
            <span>Attach File</span>
            <input type="file" id="file" name="file" >
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
      </form>
      <div class="card-action pl-0 pr-0 right-align">
        <button type="reset" class="btn-small waves-effect waves-light cancel-email-item mr-1">
          <i class="material-icons left">close</i>
          <span>Cancel</span>
        </button>
        <button onClick="sendmail(); return false;" class="btn-small waves-effect waves-light send-email-item">
          <i class="material-icons left">send</i>
          <span>Send</span>
        </button>
      </div>
      <!-- form start end-->
    </div>
  </div>
</div>
          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

  
    <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container"><span>&copy; 2020          <a href="http://getglobalselfservice.com" target="_blank">GetGlobalSelfservice</a> All rights reserved.</span></div>
      </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/sortable/jquery-sortable-min.js"></script>
    <script src="app-assets/vendors/quill/quill.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="app-assets/js/plugins.min.js"></script>
    <script src="app-assets/js/search.min.js"></script>
    <script src="app-assets/js/custom/custom-script.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <script src="app-assets/js/validate.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/app-email.min.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>

<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/app-email.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Sep 2021 11:25:57 GMT -->
</html>