
<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

<!-- icon picker-->




</head>
<body>

<!--Header-part-->
<div id="header" href="dashboard.php">
  <h1><a>Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-home"></i>Home</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-key"></i>Change Password</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-signout"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-hdd"></i> <span class="text">Probes</span> <span class="label label-info"><?php include('countall.php')?></span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="insertprobe.php"><i class="icon-plus"></i>New Probe</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="dashboard.php"><i class="icon-asterisk"></i>All Probes</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="onlineprobe.php"><i class="icon-eye-open"></i>Online Probes</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="offlineprobe.php"><i class="icon-eye-close"></i> Offline Probes</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="edit.php"><i class="icon-pencil"></i> Edit Probes</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="delete.php"><i class="icon-trash"></i> Delete Probes</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="#"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->

<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i>Dashboard</a>
  <ul>
    <li><a href="dashboard.php"><i class="icon icon-home"></i> <span>Dashboard</span><span class="label label-important" style="background-color: #2255a4;"><?php include('countall.php')?></span></a> </li>
    <li> <a href="insertprobe.php"><i class="icon icon-plus"></i> <span>New Probe</span></a> </li>
    <li><a href="onlineprobe.php"><i class="icon icon-eye-open"></i> <span>Online Probe</span><span class="label label-success"style="background-color: #468847;"><?php include('countonline.php')?></span></a></li>

    <li  class="active"><a href="offlineprobe.php"><i class="icon icon-eye-close"></i> <span>Offline Probes</span><span class="label label-important" ><?php include('countoffline.php')?></span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-tags"></i> <span>Clusters</span> <span class="label label-important" style="background-color: #ffb848;"><?php include('countcluster.php');?></span></a>
      <ul>
          <?php include('fetchcluster.php')?>
      </ul>
    </li>
 
	  <li> <a href="edit.php"><i class="icon icon-pencil"></i> <span>Edit</span></a></li>
    
    <li> <a href="delete.php"><i class="icon icon-trash"></i> <span>Delete Probe</span></a> </li>
     
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="offlineprobe.php" class="current">Offline Probes</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        
        
      
      
     <?php include('fetchoffline.php')
		  
		  ?>

      </ul>
    </div>
<!--End-Action boxes-->    

<!--Chart-box-->    
    <div>
     
    </div>
<!--End-Chart-box--> 
    <hr/>
</div>
</div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Matrix Admin. Brought to you by <a href="http://kanavdawra.com">kanavdawra.com</a> </div>
</div>

<!--end-Footer-part-->

<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
