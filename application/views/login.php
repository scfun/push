<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>GKT PUSH</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('static/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="row">
      <div class="col-md-4 col-center">
      </div>
       <div class="col-md-3 col-center"> 
      		<?php 
      			echo form_open("login/check_user"); 
      		?>
        <h2 class="form-signin-heading">GKT</h2>
        <label for="inputUsername" class="sr-only">用户名</label>
        <input type="text" name="username" id="inputUsername" class="form-control" placeholder="用户名" required autofocus>
        <label for="inputPassword" class="sr-only">密码</label>
        <input type="password"  name="password"id="inputPassword" class="form-control" placeholder="密码" required>
     <!--    <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> 记住
          </label>
        </div> -->
        <br/>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
      </form>
      <div>
      	  <?php 
      	  		switch ($error){
      	  			case "0":
    					echo "用户不存在";
    				break;
      	  			case "1":
      	  				echo "用户名或密码错误";
      	  			break;
      	  		}
      	  	?>
      </div>
    </div>
    </div> <!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  </body>
</html>
