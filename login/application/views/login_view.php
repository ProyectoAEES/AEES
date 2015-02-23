<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <title>Login</title>

</head>

<body>
<div class="well" aling = "center">  <h1 style = "color: blue" align= "center">  Adverse Events Emergency System</h1></div>
<br><br><br>
<?php echo validation_errors(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" align ="center"> <strong> Sign In </strong> </h3>
                    </div>
                    <div class="panel-body">
                        <form action ="login/validar" method="post">
                            <fieldset>
                                <div class="form-group">
                                   <input class="form-control" placeholder="user" name="user" id= "user" type="text"  required autofocus>
                                  
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" id= "pass" type="password" value="" required>
    
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                               <!-- <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                                <button class="btn btn-lg btn-success btn-block" type ="submit" name="submit"> Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
