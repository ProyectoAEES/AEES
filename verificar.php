<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<title>Verificar</title>

</head>
<body>
    <div class="container">
    <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong> Please Sign In </strong></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form"  action="verificar.php"method="post">
                            <fieldset>
                            <div class="form-group">
                                <span class="form-group">
          <input class="form-control" placeholder="user" name="user" required type="text" autofocus>
        </span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="password" name="password" required type="password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                               <!-- <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                                <button class="btn btn-lg btn-success btn-block"> Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
session_start();
$servidor = "mysql9.000webhost.com";
$user= "a4612749_gedafr";
$pas="elbolsillo02";
$db="a4612749_login";

if(isset($_POST['user']) && !empty ($_POST['user']) && isset($_POST['password']) && !empty ($_POST['password']))
{
	$con = mysql_connect($servidor,$user,$pas) or die (mysql_error());
	mysql_select_db($db,$con) or die (mysql_error());
	$query = "SELECT * FROM usuarios WHERE  user = '$_POST[user]' and pass = '$_POST[password]'";
	$sel = mysql_query($query,$con);
	$sesion = mysql_fetch_array($sel);
	
if(($_POST['user'] == $sesion['user']) && ($_POST['password'] ==  $sesion['pass']))
	{ 
			//header("Location : otro.php");
			$_SESSION['user']= $_POST['user'];
			//echo "Secion inicidada";
			echo"<script language='javascript'>window.location='inicio.html'</script>";
			
	}
	else { 
			echo "<script language='javascript'> alert('Error de usuario o contraseniaa') </script>";
			}
	
	}
	
	else 
	{
		echo "<script language='javascript'> alert('Debes introducir todos los campos') </script>";
	}
?>
</body>
</html>