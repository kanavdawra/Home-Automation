<?php

include('connect.php');

$i= $_GET['id'];

$sql = "SELECT id,name, cluster,address, color, icon FROM home WHERE id='$i'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo '<li style="background-color: '. $row["color"]. ' > <a href="index.html"> <i class="'.$row["icon"].'"></i><i class="'.$row['currstate'].'" style="position: relative;font-size:15px;top:-45px;right:30px;"></i> <span class="label label-success">'.$row["cluster"].'</span>'.$row["name"].'</a> </li>';
        $color=$row['color'];
		$name=$row['name'];
		$cluster=$row['cluster'];
		$icon=$row['icon'];
		$address=$row['address'];
		}
} else {
    echo "Results: 0";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/colorpicker.css" />
<link rel="stylesheet" href="css/datepicker.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="dist/css/bootstrap-iconpicker.min.css">
<script type="text/javascript" src="dist/js/bootstrap-iconpicker.min.js"></script>
<style>
	.icon-active{
		border-bottom:5px solid #62566b;
	}
	.icon-deactive{
		color: white;font-size: 40px;display:inline-block;background-color: #2295c9;border-radius: 5px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px;padding-top: 5px;margin-top: 5px;margin-bottom: 5px;margin-left: 5px;margin-right: 5px;white-space: nowrap
	}
	.icon-hover{
		color: #2295c9;font-size: 40px;display:inline-block;background-color: white;border-radius: 5px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px;padding-top: 5px;margin-top: 5px;margin-bottom: 5px;margin-left: 5px;margin-right: 5px;
	}
	</style>

	<script src="jquery-3.2.1.min.js"></script>
<script>

	/*$(function () {
            $("#iconcolor1").on("click", function () {
                $("#iconid").val(iconcolor());
            });
        });
	function colorChange() {
			//$('.icon-deactive').css("background-color":"#c95c5c")
			return "abc";
            
        }*/
	
$(function () {
            $("#iconpicker1").on("click", function () {
                $("#iconid").val(iconpicker1());
            });
        });
	$(function () {
            $("#iconpicker2").on("click", function () {
                $("#iconid").val(iconpicker2());
            });
        });
	$(function () {
            $("#iconpicker3").on("click", function () {
                $("#iconid").val(iconpicker3());
            });
        });
	
 
        function iconpicker1() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker1").addClass("icon-active")
            return "icon-dashboard";
        }
	function iconpicker2() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker2").addClass("icon-active")
            return "icon-book";
        }
	function iconpicker3() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker3").addClass("icon-active")
            return "icon-beaker";
        }

	$(function () {
            $("#iconpicker4").on("click", function () {
                $("#iconid").val(iconpicker4());
            });
        });
	
 
        function iconpicker4() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker4").addClass("icon-active")
            return "icon-briefcase";
        }
	$(function () {
            $("#iconpicker5").on("click", function () {
                $("#iconid").val(iconpicker5());
            });
        });
	
 
        function iconpicker5() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker5").addClass("icon-active")
            return "icon-cogs";
        }
	$(function () {
            $("#iconpicker6").on("click", function () {
                $("#iconid").val(iconpicker6());
            });
        });
	
 
        function iconpicker6() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker6").addClass("icon-active")
            return "icon-eye-open";
        }
	$(function () {
            $("#iconpicker7").on("click", function () {
                $("#iconid").val(iconpicker7());
            });
        });
	
 
        function iconpicker7() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker7").addClass("icon-active")
            return "icon-envelope-alt";
        }
	$(function () {
            $("#iconpicker8").on("click", function () {
                $("#iconid").val(iconpicker8());
            });
        });
	
 
        function iconpicker8() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker8").addClass("icon-active")
            return "icon-film";
        }
	$(function () {
            $("#iconpicker9").on("click", function () {
                $("#iconid").val(iconpicker9());
            });
        });
	
 
        function iconpicker9() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker9").addClass("icon-active")
            return "icon-camera";
        }
	$(function () {
            $("#iconpicker10").on("click", function () {
                $("#iconid").val(iconpicker10());
            });
        });
	
 
        function iconpicker10() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker10").addClass("icon-active")
            return "icon-cloud";
        }
	$(function () {
            $("#iconpicker11").on("click", function () {
                $("#iconid").val(iconpicker11());
            });
        });
	
 
        function iconpicker11() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker11").addClass("icon-active")
            return "icon-leaf";
        }
	$(function () {
            $("#iconpicker12").on("click", function () {
                $("#iconid").val(iconpicker12());
            });
        });
	
 
        function iconpicker12() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker12").addClass("icon-active")
            return "icon-home";
        }
	$(function () {
            $("#iconpicker13").on("click", function () {
                $("#iconid").val(iconpicker13());
            });
        });
	
 
        function iconpicker13() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker13").addClass("icon-active")
            return "icon-money";
        }
	
	
		 
		  
	$(function () {
            $("#iconpicker14").on("click", function () {
                $("#iconid").val(iconpicker14());
            });
        });
	
 
        function iconpicker14() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker14").addClass("icon-active")
            return "icon-rss";
        }
	$(function () {
            $("#iconpicker15").on("click", function () {
                $("#iconid").val(iconpicker15());
            });
        });
	
 
        function iconpicker15() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker15").addClass("icon-active")
            return "icon-plane";
        }
	$(function () {
            $("#iconpicker16").on("click", function () {
                $("#iconid").val(iconpicker16());
            });
        });
	
 
        function iconpicker16() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker16").addClass("icon-active")
            return "icon-star";
        }
	
	$(function () {
         $("#iconpicker17").on("click", function () {
                $("#iconid").val(iconpicker17());
            });
        });
	
 
        function iconpicker17() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker17").addClass("icon-active")
            return "icon-tasks";
        }
	
	$(function () {
         $("#iconpicker18").on("click", function () {
                $("#iconid").val(iconpicker18());
            });
        });
	
 
        function iconpicker18() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker18").addClass("icon-active")
            return "icon-tags";
        }
	$(function () {
         $("#iconpicker19").on("click", function () {
                $("#iconid").val(iconpicker19());
            });
        });
	
 
        function iconpicker19() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker19").addClass("icon-active")
            return "icon-tint";
        }
	$(function () {
         $("#iconpicker20").on("click", function () {
                $("#iconid").val(iconpicker20());
            });
        });
	
 
        function iconpicker20() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker20").addClass("icon-active")
            return "icon-trash";
        }
	$(function () {
         $("#iconpicker21").on("click", function () {
                $("#iconid").val(iconpicker21());
            });
        });
	
 
        function iconpicker21() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker21").addClass("icon-active")
            return "icon-phone-sign";
        }
	
	
		  
	$(function () {
         $("#iconpicker22").on("click", function () {
                $("#iconid").val(iconpicker22());
            });
        });
	
 
        function iconpicker22() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker22").addClass("icon-active")
            return "icon-play-circle";
        }
	$(function () {
         $("#iconpicker23").on("click", function () {
                $("#iconid").val(iconpicker23());
            });
        });
	
 
        function iconpicker23() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker23").addClass("icon-active")
            return "icon-link";
        }
	$(function () {
         $("#iconpicker24").on("click", function () {
                $("#iconid").val(iconpicker24());
            });
        });
	
 
        function iconpicker24() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker24").addClass("icon-active")
            return "icon-cut";
        }
	$(function () {
         $("#iconpicker25").on("click", function () {
                $("#iconid").val(iconpicker25());
            });
        });
	
 
        function iconpicker25() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker25").addClass("icon-active")
            return "icon-gift";
        }
	$(function () {
         $("#iconpicker26").on("click", function () {
                $("#iconid").val(iconpicker26());
            });
        });
	
 
        function iconpicker26() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker26").addClass("icon-active")
            return "icon-user";
        }
	$(function () {
         $("#iconpicker27").on("click", function () {
                $("#iconid").val(iconpicker27());
            });
        });
	
 
        function iconpicker27() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker27").addClass("icon-active")
            return "icon-legal";
        }
	$(function () {
         $("#iconpicker28").on("click", function () {
                $("#iconid").val(iconpicker28());
            });
        });
	
 
        function iconpicker28() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker28").addClass("icon-active")
            return "icon-shopping-cart";
        }
	$(function () {
         $("#iconpicker29").on("click", function () {
                $("#iconid").val(iconpicker29());
            });
        });
	
 
        function iconpicker29() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker29").addClass("icon-active")
            return "icon-truck";
        }
	$(function () {
         $("#iconpicker30").on("click", function () {
                $("#iconid").val(iconpicker30());
            });
        });
	
 
        function iconpicker30() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker30").addClass("icon-active")
            return "icon-hdd";
        }
	$(function () {
         $("#iconpicker31").on("click", function () {
                $("#iconid").val(iconpicker31());
            });
        });
	
 
        function iconpicker31() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker31").addClass("icon-active")
            return "icon-wrench";
        }
	$(function () {
         $("#iconpicker32").on("click", function () {
                $("#iconid").val(iconpicker32());
            });
        });
	
 
        function iconpicker32() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker32").addClass("icon-active")
            return "icon-print";
        }
	$(function () {
         $("#iconpicker33").on("click", function () {
                $("#iconid").val(iconpicker33());
            });
        });
	
 
        function iconpicker33() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker33").addClass("icon-active")
            return "icon-music";
        }
	$(function () {
         $("#iconpicker34").on("click", function () {
                $("#iconid").val(iconpicker34());
            });
        });
	
 
        function iconpicker34() {
			$('.icon-active').removeClass("icon-active")
			$("#iconpicker34").addClass("icon-active")
            return "icon-lock";
        }
	
	
	
	
	</script></head><body>
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

    <li ><a href="offlineprobe.php"><i class="icon icon-eye-close"></i> <span>Offline Probes</span><span class="label label-important" ><?php include('countoffline.php')?></span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-tags"></i> <span>Clusters</span> <span class="label label-important" style="background-color: #ffb848;"><?php include('countcluster.php');?></span></a>
      <ul>
          <?php include('fetchcluster.php')?>
      </ul>
    </li>
 
	  <li class="active"> <a href="edit.php"><i class="icon icon-pencil"></i> <span>Edit</span></a></li>
    
    <li> <a href="delete.php"><i class="icon icon-trash"></i> <span>Delete Probe</span></a> </li>
     
  </ul>
</div>


<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="edit.php" class="current">Edit Probe</a></div>
  </div>



<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
    
     <form action="saveedit.php?id=<?php echo $i;?>" method="post" class="form-horizontal">
     
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Probe Info</h5>
        </div>
      <div class="widget-content nopadding">
          
          
          
          
          
            <div class="control-group">
              <label class="control-label">Probe Name :</label>
              <div class="controls">
                <input type="text" placeholder="ex. light, fan etc." id="probename" name="probename" value="<?php echo $name;?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Cluster Name :</label>
              <div class="controls">
                <input type="text" placeholder="ex. bedroom, kichen etc." id="clustername" name="clustername" value="<?php echo $cluster;?>"/>
              </div>
            </div>
            
<div class="control-group">
  <label class="control-label">Probe Address :</label>
  <div class="controls">
              <input type="text" placeholder="ex. 10110101" id="probeaddress" name="probeaddress" value="<?php echo $address;?>"/>
              </div>
          </div>
<!--</form>-->
        </div>
      </div>
      <div class="widget-box">
<div class="widget-content nopadding"> </div>
      </div>
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Elements</h5>
        </div>
        <div class="widget-content nopadding">
        <!--- <form class="form-horizontal" action="connect.php">-->
          
<div class="control-group">
  <label class="control-label">Color Picker (hex)</label>
              <div class="controls">
                <div data-color-format="hex" data-color=""  class="input-append color colorpicker">
                  <input type="text" value="<?php echo $color;?>" placeholder="#000000" class="span11" id="iconcolor" name="iconcolor">
                  <span class="add-on"><i style="background-color: #000000"></i></span> </div>
              </div>
        </div>
<div class="control-group">
              <label class="control-label">Icon</label>
              <div class="controls">
                <input readonly type="text" class="span3" placeholder="icon-" id="iconid" name="iconid"value="<?php echo $icon;?>"/>
              </div>
            </div>
 <i class="icon-dashboard icon-deactive" id="iconpicker1" ></i>
 <i class="icon-book icon-deactive" id="iconpicker2" ></i>
 <i class="icon-beaker icon-deactive" id="iconpicker3" ></i>
		 <i class="icon-briefcase icon-deactive" id="iconpicker4" ></i>
		  <i class="icon-cogs icon-deactive" id="iconpicker5" ></i>
		  <i class="icon-eye-open icon-deactive" id="iconpicker6" ></i>
		  <i class="icon-envelope-alt icon-deactive" id="iconpicker7" ></i>
		  <i class="icon-film icon-deactive" id="iconpicker8" ></i>
		  <i class="icon-camera icon-deactive" id="iconpicker9" ></i>
		  <i class="icon-cloud icon-deactive" id="iconpicker10" ></i>
		  <i class="icon-leaf icon-deactive" id="iconpicker11" ></i>
		  <i class="icon-home icon-deactive" id="iconpicker12" ></i>
		  <i class="icon-money icon-deactive" id="iconpicker13" ></i>
		  <i class="icon-rss icon-deactive" id="iconpicker14" ></i>
		  <i class="icon-plane icon-deactive" id="iconpicker15" ></i>
		  <i class="icon-star icon-deactive" id="iconpicker16" ></i>
		  <i class="icon-tasks icon-deactive" id="iconpicker17" ></i>
		  <i class="icon-tags icon-deactive" id="iconpicker18" ></i>
		  <i class="icon-tint icon-deactive" id="iconpicker19" ></i>
		  <i class="icon-trash icon-deactive" id="iconpicker20" ></i>
		  <i class="icon-phone-sign icon-deactive" id="iconpicker21" ></i>
		  <i class="icon-play-circle icon-deactive" id="iconpicker22" ></i>
		  <i class="icon-link icon-deactive" id="iconpicker23" ></i>
		  <i class="icon-cut icon-deactive" id="iconpicker24" ></i>
		  <i class="icon-gift icon-deactive" id="iconpicker25" ></i>
		  <i class="icon-user icon-deactive" id="iconpicker26" ></i>
		  <i class="icon-legal icon-deactive" id="iconpicker27" ></i>
		  <i class="icon-shopping-cart icon-deactive" id="iconpicker28" ></i>
		  <i class="icon-truck icon-deactive" id="iconpicker29" ></i>
		  <i class="icon-hdd icon-deactive" id="iconpicker30" ></i>
		  <i class="icon-wrench icon-deactive" id="iconpicker31" ></i>
		  <i class="icon-print icon-deactive" id="iconpicker32" ></i>
		  <i class="icon-music icon-deactive" id="iconpicker33" ></i>
		  <i class="icon-lock icon-deactive" id="iconpicker34" ></i>
			  
			  
 <div class="container"> </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
<button type="submit" class="btn btn-danger">Cancel</button>
            </div>
          
         
          
          
        </div>
      </div>
      </form> 
    </div>
    
</div>
  <div class="row-fluid"> </div>
</div>


</div>



<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Matrix Admin. Brought to you by <a href="http://kanavdawra.com">kanavdawra.com</a> </div>
</div>
<!--end-Footer-part--> 
  


<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/jquery.toggle.buttons.js"></script> 
<script src="js/masked.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.form_common.js"></script> 
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script> 
<script>
	$('.textarea_editor').wysihtml5();
</script>

</body>
</html>
