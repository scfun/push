<!DOCTYPE html>
<HTML lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo base_url('static/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('static/css/bootstrap-datetimepicker.min.css') ?>">
    <script src="<?php echo base_url('static/js/jquery.min.js') ?>"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="<?php echo base_url('static/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('static/js/bootstrap-datetimepicker.min.js') ?>"></script>
    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').focus()
        })
    </script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">GKT PUSH</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url('index.php/main') ?>">主页</a></li>
                <li><a href="<?php echo base_url('index.php/task_list') ?>">任务管理</a></li>
                <li><a href="<?php echo base_url('index.php/app_list') ?>">应用管理</a></li>
                <!-- 		        <li><a href="#contact">效果管理</a></li> -->
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="输入点什么？">
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>
            <ul class="nav navbar-nav navbar-center">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span
                            class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>创建Task <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a a href="#messageModal" data-toggle="modal" data-target="#messageModal">消息模式</a></li>
                        <li><a href="#">透传模式</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href=<?php echo base_url('index.php/login') ?>>
            <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>退出</a></li>
            </ul>
            </li>
            </ul>
        </div>
    </div>
</nav>
<?php 
	if($str!=0){
		switch($str){
			//内容为空
			case '0':
				echo "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
						<button class='close' aria-label='Close' data-dismiss='alert' type='button'>
						<span aria-hidden='true'>×</span>
						</button>
						<strong>内容不能为空</strong>
						请填写任务信息.
					</div>";
			break;
			//tesk创建成功
			case '1':
				echo "<div class='alert alert-success alert-dismissible fade in' role='alert'>
						<button class='close' aria-label='Close' data-dismiss='alert' type='button'>
						<span aria-hidden='true'>×</span>
						</button>
						<strong>Task创建成功</strong>
					</div>";
			break;
			//添加成功
			case '2':
				echo "<div class='alert alert-success alert-dismissible fade in' role='alert'>
						<button class='close' aria-label='Close' data-dismiss='alert' type='button'>
						<span aria-hidden='true'>×</span>
						</button>
						<strong>添加成功</strong>
					</div>";
				break;
			//删除成功
			case '3':
				echo "<div class='alert alert-success alert-dismissible fade in' role='alert'>
						<button class='close' aria-label='Close' data-dismiss='alert' type='button'>
						<span aria-hidden='true'>×</span>
						</button>
						<strong>删除成功</strong>
					  </div>";
				break;
			
		}
	}
?>
<!--导航结束-->