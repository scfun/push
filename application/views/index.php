<!-- 右侧导航 -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">操作什么</h3>
                </div>
                <div class="panel-body">
                    <ul class="nav nav-sidebar">
                        <li><a href="#">报告(未开)</a></li>
                        <li><a href="#">分析(未开)</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">今日动态</h3>
                </div>
                    <table class="table table-hover table-bordered table-condensed">
                        <thead class='info'>
                            <th>Task Id</th>
                            <th>标题</th>
                            <th>状态</th>
                        </thead>
                        <tbody>
                    <?php for($i=0;$i<count($today_task);$i++): ?>
                        <tr>
                            <td><?php echo $today_task[$i]['task_id']?></td>
                            <td><?php echo $today_task[$i]['title']?></td>
                            <td><?php
                                if($today_task[$i]['returnType']==0){
                                    echo "成功";
                                }else{
                                    echo "失败";
                                }
                                ?></td>
                        </tr>
                    <?php endfor ?>
                        </tbody>
                    </table>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">计划任务</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-1 date well">2015-03-20</div>
                        <div class="col-xs-1 date well">2015-03-20</div>
                        <div class="col-xs-1 date well">2015-03-20</div>
                        <div class="col-xs-1 date well">2015-03-20</div>
                        <div class="col-xs-1 date well">2015-03-20</div>
                        <div class="col-xs-1 date well">2015-03-20</div>
                        <div class="col-xs-1 date well">2015-03-20</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1 date well">2015-03-20</div>
                        <div class="col-xs-1 date well">2015-03-20</div>
                        <div class="col-xs-1 date well">2015-03-20</div>
                        <div class="col-xs-1 date well">2015-03-20</div>
                        <div class="col-xs-1 date well">2015-03-20</div>
                        <div class="col-xs-1 date well">2015-03-20</div>
                        <div class="col-xs-1 date well">2015-03-20</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Task统计</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <tr calss="active">
                            <td>任务总数</td>
                            <td><?php echo $task_count[0]['count(*)'] ?></td>
                        </tr>
                        <tr class="success">
                            <td>成功数</td>
                            <td><?php echo $sucess_task_count[0]['count(*)'] ?></td>
                        </tr>
                        <tr class="info">
                            <td>待发送</td>
                            <td>0</td>
                        </tr>
                    </table>
                </div>
                <div class="panel-heading">
                    <h3 class="panel-title">用户概况</h3>
                </div>
                <div class="panel-body">
                 <table class="table table-hover">
                        <tr calss="active">
                            <td>用户数</td>
                            <td><?=$user_count['today']?></td>
                        </tr>
                        <tr class="success">
                            <td>昨日用户数</td>
                            <td> <?=$user_count['lastday']?> </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>