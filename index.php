<!DOCTYPE html>
<!--
This web is developed by STISAlfa's Member :
Name        : Thosan Girisona S
Coder-ID    : blank123
University  : Statistics Institute Of Indonesia
Year        : 2014

All Right Reserved
Copyright 2014 TGS
-->
<?php
include('login.php');
?>

<html>
    <head>
        <title>PEMIRA STIS</title>
        <meta charset="UTF-8">
        <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="js/login.js "></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">

    </head>
    
    <body>

    <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4"  id="containers">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock" id="iconlog" style="font-size:30px; vertical-align: middle;"></span> 
                    <div style="font-size:30px;">Login</div></div>
                <div class="panel-body">
                    
                    <form class="form-horizontal" role="form" method="post" action="index.php">
                        
                    
                        
                    <div class="input-group input-group-lg" id="formuser">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-lock"></i>
                      </span>
                      <input tabindex="2" class="form-control" type="password" placeholder="Password" name="password" id="login-password">
                    </div>

                    <p><?php echo $error ?></p> 
                        
                    <div class="form-group last" id="buton" >
                        <div class="col-sm-offset-3 col-sm-9">
                            <button tabindex="3" type="submit" class="btn btn-success btn-sm" style="font-size: 20px;">
                                Masuk</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <a href="#">Need help?</a></div>
            </div>
        </div>
    </div>
</div> 
       
    <footer id="foter">
        <b>&COPY;STISAlfa 2014</b>
    </footer>
        
    </body>

</html>
