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
        <div class="col-md-10 sidebar">
            <table class="table table-hover table-bordered table-condensed">
                <thead class="info">
                <th>Task_ID</th>
                <th>标题</th>
                <th>内容</th>
                <th width="30px">状态</th>
                <th>推送时间</th>
                <th>删除</th>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < count($task_info); $i++): ?>
                    <tr class="info task-info"data-toggle="modal" data-target="#myModal">
                        <td class='task_id'><?= $task_info[$i]['task_id'] ?></td>
                        <td class='task_title'><?= $task_info[$i]['title'] ?></td>
                        <td class='task_content'><p width="30px"><?= $task_info[$i]['content'] ?></p></td>
                        <td class='task_type' width="150px"><?if ($task_info[$i]['returnType'] == 0) {
                                echo "成功";
                            } else {
                                echo "失败";
                            }?></td>
                        <td class='task_time'><?= $task_info[$i]['createTime'] ?></td>
                        <td>
                            <a href=<?php echo base_url('index.php/task_list/del_task/' . $task_info[$i]['task_id']) ?>><span
                                    class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                        </td>
                    </tr>
                <?php endfor ?>
                </tbody>
            </table>
            <nav>
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--taskModal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><strong>应用信息</strong></h4>
                    </div>
                    <div class="modal-body" id="modal-info">
                        <table class="table table-striped table-bordered">
                            <tbody>
                            <tr>
                                <td><strong>Task_ID</strong></td>
                                <td class="task_id"></td>
                            </tr>
                            <tr>
                                <td><strong>标题:</strong></td>
                                <td class="task_title">com.gkt.yyhezi</td>
                            </tr>
                            <tr>
                                <td><strong>内容:</strong></td>
                                <td class="task_content">2100096125</td>
                            </tr>
                            <tr>
                                <td><strong>状态:</strong></td>
                                <td class="task_type">A38VLQ74Y7BK</td>
                            </tr>
                            <tr>
                                <td><strong>推送时间:</strong></td>
                                <td class="task_time"">b80c534e980d3337416b129b41bec365</td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- <p> 应用名：应用盒子</p>
                             <p> 应用包名：com.gkt.yyhezi</p>
                             <p> ACCESS ID：2100096125</p>
                             <p> ACCESS KEY：A38VLQ74Y7BK</p>
                             <p> SECRET KEY：b80c534e980d3337416b129b41bec365</p>
                             <p> 分类：工具</p> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.task-info').on('click', function () {
        var task_id = $(this).children('.task_id').text();
        var task_title = $(this).children('.task_title').text();
        var task_content = $(this).children('.task_content').text();
        var task_type = $(this).children('.task_type').text();
        var task_time = $(this).children('.task_time').text();
        var modal = $('#modal-info');
        modal.find('.task_id').text(task_id);
        modal.find('.task_title').text(task_title);
        modal.find('.task_content').text(task_content);
        modal.find('.task_type').text(task_type);
        modal.find('.task_time').text(task_time);
    });
</script>
</html>