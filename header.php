
<!DOCTYPE php>

<php class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/php; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>GetGlobalSelfservice</title>
    <!-- <link rel="apple-touch-icon" href="app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/favicon/favicon-32x32.png"> -->
    <link href="fonts.googleapis.com/icone91f.css?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/chartist-js/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/chartist-js/chartist-plugin-tooltip.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/quill/quill.snow.css">
    <link rel="stylesheet" href="app-assets/vendors/select2/select2.min.css" type="text/css">
    <link rel="stylesheet" href="app-assets/vendors/select2/select2-materialize.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/style.min.css">
   <?php 
   include "procedure/conn.php";
   if(basename($_SERVER['PHP_SELF']) == "app-chat.php" || basename($_SERVER['PHP_SELF']) == "bank-chat.php") 
   {
    echo"  <link rel='stylesheet' type='text/css' href='app-assets/css/pages/app-chat.min.css'>";
   } 
  else {
  echo" <link rel='stylesheet' type='text/css' href='app-assets/css/pages/dashboard-modern.css'>
    <link rel='stylesheet' type='text/css' href='app-assets/css/pages/intro.min.css'>
    <link rel='stylesheet' type='text/css' href='app-assets/css/pages/app-email.min.css'>
    <link rel='stylesheet' type='text/css' href='app-assets/css/pages/app-sidebar.min.css'>
    <link rel='stylesheet' type='text/css' href='app-assets/css/pages/page-account-settings.min.css'>
    <link rel='stylesheet' type='text/css' href='app-assets/css/pages/form-select2.min.css'>
    <link rel='stylesheet' type='text/css' href='app-assets/css/pages/page-users.min.css'>";

  }
  ?>
    
    
      <!-- BEGIN: VENDOR CSS-->
      <link rel="stylesheet" type="text/css" href="app-assets/vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-chat.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="app-assets/css/pages/page-account-settings.min.css"> -->
    <!-- END: Page Level CSS-->
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
  </head>
  <?php 
  session_start();
 
  if(   $_SESSION["session_FullName"]==null ||    $_SESSION["session_FullName"]=="")
  {
    header("Location:login.php");
  }
  
  else 
      {
?>
  <!-- END: Head-->
  <body  class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
          <div class="nav-wrapper">
            
            <ul class="navbar-list right">
            <?php
              echo $_SESSION["session_FullName"];
              }
            ?>
             <li>
               
             <a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" style="margin-top: 16px;" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="app-assets/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>
             
            </ul>
            <!-- profile-dropdown-->
            <ul class="dropdown-content" id="profile-dropdown">
            
              <li><a class="grey-text text-darken-1" href="user-profile-page.php"><i class="material-icons">person_outline</i> Profile</a></li>
              <li><a class="grey-text text-darken-1" href="app-chat.php"><i class="material-icons">chat_bubble_outline</i> Chat</a></li>
              <li class="divider"></li>
              <li><a class="grey-text text-darken-1" href="procedure/logout.php"><i class="material-icons">keyboard_tab</i> Logout</a></li>
            </ul>
          </div>
         
        </nav>
      </div>
    </header>
    <!-- END: Header-->
    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index-2.php"><img class="hide-on-med-and-down" src="app-assets/images/logo" alt=""/><img class="show-on-medium-and-down hide-on-med-and-up" src="app-assets/images/logo/" alt=""/><span class="logo-text hide-on-med-and-down">GetGlobal</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="active bold"><a class="collapsible-header waves-effect waves-cyan " href="index.php"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
          
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-email.php"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="Mail">Mail</span><span class="badge new badge pill pink accent-2 float-right mr-2">5</span></a>
        </li>
        <?php
        if($_SESSION["usertype"]!="7")
        {
          echo"<li class='bold'><a class='waves-effect waves-cyan ' href='app-chat.php'><i class='material-icons'>chat_bubble_outline</i><span class='menu-title' data-i18n='Chat'>Chat</span></a>
          </li>";
        }
        else{
          echo"<li class='bold'><a class='waves-effect waves-cyan ' href='bank-chat.php'><i class='material-icons'>chat_bubble_outline</i><span class='menu-title' data-i18n='Chat'>Chat</span></a>
          </li>";
        } 
       ?>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-todo.php"><i class="material-icons">check</i><span class="menu-title" data-i18n="ToDo">ToDo</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-complains.php"><i class="material-icons">format_list_bulleted</i><span class="menu-title" data-i18n="Kanban">Complains</span></a>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">face</i><span class="menu-title" data-i18n="User">User</span><span class="badge badge pill purple float-right mr-10">3</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li class="bold"><a class="waves-effect waves-cyan " href="page-users-list.php"><i class="material-icons">radio_button_unchecked</i><span data-i18n="List">View Users</span></a>
              </li>
              <li class="bold"><a class="waves-effect waves-cyan " href="page-admin-list.php"><i class="material-icons">radio_button_unchecked</i><span data-i18n="List">View Admin</span></a>
              </li>
              <li class="bold"><a class="waves-effect waves-cyan " href="page-bank-list.php"><i class="material-icons">radio_button_unchecked</i><span data-i18n="List">View Banks</span></a>
              </li>
              <li class="bold"><a class="waves-effect waves-cyan " href="bank_reg.php"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Validation">Bank Registration</span></a>
              </li>
              <li class="bold"><a class="waves-effect waves-cyan " href="AddAdmin.php"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Validation">Register New Admin</span></a>
              </li>
            </ul>
          </div>
        </li>
        </li>
      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->
