<?php
include "config.php";
session_start();
if(!isset($_SESSION['username']) AND !isset($_SESSION['password'])){
	echo "<script>window.location = 'login.php'</script>";
}else{
?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		
        <title>Web Dinamis Sederhana</title>

        <link href="bootstrap/css/bootstrap.css" rel="stylesheet"> 
        <link href="bootstrap/css/custom.css" rel="stylesheet">
		<link rel="stylesheet" href="bootstrap/css/jquery.fancybox.css">
		<link rel="stylesheet" href="bootstrap/css/style.css">
		<link rel="shortcut icon" href="img/favicon.ico">
    </head>

    <body>

        <div class="container">
            <div>
                <div class="head" >
                   <h1>Web Dinamis Sederhana</h1>
                </div>
            </div>

            <div class="navbar">
                <div class="navbar-inner">
                    <ul class="nav">   
                        <li>
                            <a href="index.php"><i class="icon-home"></i> Home</a>
                        </li>                        
                        <li>
                            <a href="./?p=mhs"><i class="icon-th-list"></i> Data Siswa</a>                                
                        </li>
                        <li>
                            <a href="./?p=guru"><i class="icon-th-list"></i> Data Guru</a>                                
                        </li>
						<li >
                            <a href="logout.php" ><i class=" icon-off"> </i>Logout</a>                                
                        </li>
						
            

                    </ul>
                </div>
            </div>

            
  
			
			
			<div class="span9">
				
				
				<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered tbl">
					<?php
												if($_GET['p']=='prodi'){
												include "prodi.php";
												}elseif($_GET['p']=='mhs'){
												include "adm_siswa/siswa.php";														
												}elseif($_GET['p']=='viewweb'){
												include "#";														
												}elseif($_GET['p']=='guru'){
												include "adm_guru/guru.php";
												}else{
												echo "<h3>Halaman Administrator</h3><hr/>
												<p>Selamat datang admin, dikelola dengan baik ya..!</p>";
												}
											?>
				</table>    
			</div>            
		</div>
		<div class="foo"><small>&copy; 2013 - Sekolah Menengah Atas </small></div> 
		
		<script src="bootstrap/js/dropdownmenu.js"></script>
		<script type='text/javascript'>//<![CDATA[
        $(window).load(function(){
            jQuery('.submenu').hover(function () {
                jQuery(this).children('ul').removeClass('submenu-hide').addClass('submenu-show');
            }, function () {
                jQuery(this).children('ul').removeClass('.submenu-show').addClass('submenu-hide');
            }).find("a:first").append(" &raquo; ");
        });//]]>
        </script>
		 
    </body>
</html>  
<?php
}
?>      