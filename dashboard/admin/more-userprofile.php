<?php
require '../../include/db_conn.php';
page_protect();

if(isset($_POST['submit'])){

  $usrname=$_POST['login_id'];
  $fulname=$_POST['full_name'];

  $query="update admin set username='".$usrname."',Full_name='".$fulname."' where username='".$_SESSION['full_name']."'";

  if(mysqli_query($con,$query)){
  	echo "<head><script>alert('Perfil Cambiado ');</script></head></html>";

     echo "<meta http-equiv='refresh' content='0; url=logout.php'>";
  }
  else{
  	echo "<head><script>alert('NO ES EXITOSO, verifique nuevamente');</script></head></html>";
	 echo "error".mysqli_error($con);
  }

  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>ConfiguroWeb | Admin</title>
    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" rel="stylesheet" type="text/css">
	<style>
    	.page-container .sidebar-menu #main-menu li#adminprofile > a {
    	background-color: #2b303a;
    	color: #ffffff;
		}

    </style>

</head>
     <body class="page-body  page-fade" onload="collapseSidebar()">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
		
			<div class="logo">
				<a href="main.php">
					<img src="../../images/logo.png" alt="" width="192" height="80" />
				</a>
			</div>
			
					
					<div class="sidebar-collapse" onclick="collapseSidebar()">
				<a href="#" class="sidebar-collapse-icon with-animation">
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
		
			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content">
		
				<div class="row">
					
					
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">

							<li>Bienvenido <?php echo $_SESSION['full_name']; ?> 
							</li>						
						
							<li>
								<a href="logout.php">
									Cerrar Sesión <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>

		<h3>Editar Perfil de Usuario</h3>
		
		(Deberá iniciar sesión nuevamente después de la actualización del perfil)
		
		<hr />
		
		<?php $user_id_auth = $_SESSION['user_data']; ?>

		
		<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:600px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>Cambiar Perfil</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">ID:</td>
           	   <td height="35"><input type="text" name="login_id" value="<?php echo $_SESSION['user_data']; ?>" class="form-control" required/></td>
         	   </tr>
             <tr>
               <td height="35">Nombre Completo:</td>
               <td height="35"><input class="form-control" type="text" name="full_name" id="textfield2" value="<?php echo $_SESSION['username']; ?>" maxlength="25" required></td>
             </tr>
             <tr>
               <td height="35">Contraseña</td>
               <td height="35"><span class="form-control">*********</span> <a href="change_pwd.php" class="a1-btn a1-orange">Cambiar Contraseña</a> </td><br>
             </tr>
             
             <br>
            
             <tr>
             <tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="Enviar" >
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Borrar"></td>
             </tr>
           </table></td>
         </tr>
         </table>
       </form>
    </div>
    </div>   
		
			<?php include('footer.php'); ?>

    	</div>

    </body>
</html>


										
