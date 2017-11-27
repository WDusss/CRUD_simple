<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Web Dinamis Sederhana</title>

        <link href="bootstrap/css/bootstrap.css" rel="stylesheet"> 
        <link href="bootstrap/css/custom.css" rel="stylesheet">
		<link rel="shortcut icon" href="img/user.ico">
    </head>

    <body>

        <div class="container">
            <div>
                <div class="head">
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
                            <a href="./?p=mhs"> Data Siswa</a>                                
                        </li>
                        <li>
                            <a href="./?p=guru"> Data Guru</a>                                
                        </li>
						<li>
                            <a href="haladmin/login.php">Log In</a>                                
                        </li>
                    </ul>
                </div>
            </div>

            
			
			<div class="span4">      
				<div class="dsn-menu">
					
						<?php include "kalender.php";?>            
					 
					
				</div>      
			</div>
			
			
			<div class="span7">
				
				
				<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered tbl">
					<?php
											if($_GET['p']=='mhs'){
												include "siswa.php";														
												}elseif($_GET['p']=='guru'){
												include "guru.php";
												}else{
												echo "<h3>Selamat Datang</h3><hr/>
												<p>Selamat datang di websiteQ yang sederhana !</p>";
												}
											?>
				</table>    
			</div>            
		</div>
		<div class="foo"><small>&copy; 2013 - Sekolah Menengah Atas </small></div> 
 
    </body>
</html>        