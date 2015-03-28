<!-- MessageModal -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">消息模式</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open("task_list/add_task") ?>
                <div class="form-group">
                    <label for="title">标题：</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="输入标题">
                </div>
                <div class="form-group">
                    <label for="message">内容：</label>
                    <textarea row="3" class="form-control" name="content" id="message"> </textarea>
                </div>
                <div class="form-group">
                    <label for="select">静默下载:</label>
                    <input type="text" class="form-control" name="url" id="title" placeholder="输入url">
                </div>
                <div class="form-group">
                    <label for="select">用户范围:</label>
                    <label>
                        <input type="radio" name="all_user" id="all" value="option1" checked>
                        所有用户
                    </label>
                </div>
                <div class="form-group">
                    <label for="select">发送时间:</label>
                    <div class="radio">
                    <label>
                        <input type="radio" name="send_time" id="sendTime1" value="now" checked>
                         立即
                    </label>
                   <!--  <label>
                        <input type="radio" name="send_time"id="sendTime1" value="now" >
                           定时
                         <input size="16" name="send_time" type="text" value= "" readonly class="form_datetime">
                    </label> -->
                    </div>
                </div>
                <div class="form-group">

                    <button type="submit" class="btn btn-default">创建Task</button>

                </div>
                <?php echo form_close() ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
</script>
<!-- MessageModal end -->
