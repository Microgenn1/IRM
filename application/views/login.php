<html class="bg-black">
<head>
<meta charset="UTF-8">
<title>Admin | Log in</title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
 <link href="<?php echo scs_app?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="<?php echo scs_app?>js/jquery.js"></script>
<?php

include 'app/theme.php';

?>
<style>

</style>
</head>
<body class="login" >
<div class="container">
  <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-default" >
      <div class="panel-heading">
        <div class="panel-title" style="color:var(--main-bg-color)"><strong> Sign In</strong></div>
        <div style="float:right; font-size: 80%; position: relative; top:-10px"><!--<a href="#" style="color:#6D308A">Forgot password?</a>--></div>
      </div>
      <div style="padding-top:30px" class="panel-body" >
        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
       <form id="fram" name="fram" action="<?php echo scs_url ?>index.php/login" method="post">
          <div style="margin-bottom: 25px" class="input-group"> <span style="background-color:var(--main-bg-color); color: #fff" class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="Email" type="text" style="width:100%;height:40px"  name="Email" value="" placeholder="username " required="required">
          </div>
          <div style="margin-bottom: 25px" class="input-group"> <span class="input-group-addon" style="background-color:var(--main-bg-color); color:#fff"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="Password" type="password"  style="width:100%;height:40px" name="Password" placeholder="password" required="required">
          </div>
          <input class="btn btn-lg   btn-block" style="background-color:var(--main-bg-color); color:#fff"  type="submit" value="Sign In" id="Save" name="Save" >
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
<script src="<?php echo scs_app?>js/bootstrap.min.js" ></script>
 
