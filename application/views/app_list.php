<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">操作什么</h3>

                </div>
                <div class="panel-body">
                    <ul class="nav nav-sidebar">
                        <li class="active"><a href="#addModal" data-toggle="modal" data-target="#addModal">创建应用 <span
                                    class="sr-only">(current)</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-10 sidebar">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>应用名</th>
                    <th>应用包名</th>
                    <!--                    <th>ACCESS ID</th>-->
                    <!--                    <th>ACCESS KEY</th>-->
                    <!--                    <th>SECRET KEY</th>-->
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < count($app_info); $i++): ?>
                    <tr class="info package-info" data-toggle="modal" data-target="#myModal"
                        id='<?= $app_info[$i]['Id'] ?>'
                        data-user=<?= $app_info[$i]['Id'] ?>>
                        <td><?= $app_info[$i]['Id'] ?></td>
                        <td class="appName"><?= $app_info[$i]['appName'] ?></td>
                        <td class="packageName"><?= $app_info[$i]['packageName'] ?></td>
                        <td class="accessID" style="display:none"><?= $app_info[$i]['access_id'] ?></td>
                        <td class="accessKey" style="display:none"><?= $app_info[$i]['access_key'] ?></td>
                        <td class="secretKey" style="display:none"><?= $app_info[$i]['secret_key'] ?></td>
                        <td>
						  		<span class="glyphicon glyphicon-pencil" aria-hidden="true">
						  		</span>&nbsp;&nbsp;<a
                                href=<?php echo base_url('index.php/app_list/del_app_info/' . $app_info[$i]['Id']) ?>><span
                                    class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                        </td>
                    </tr>
                <?php endfor; ?>
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
        <!-- daModal -->
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
                                <td><strong>应用名:</strong></td>
                                <td class="appName"></td>
                            </tr>
                            <tr>
                                <td><strong>应用包名:</strong></td>
                                <td class="packageName"></td>
                            </tr>
                            <tr>
                                <td><strong>ACCESS ID:</strong></td>
                                <td class="accessID"></td>
                            </tr>
                            <tr>
                                <td><strong>ACCESS KEY:</strong></td>
                                <td class="accessKey"></td>
                            </tr>
                            <tr>
                                <td><strong>SECRET KEY:</strong></td>
                                <td class="secretKey"></td>
                            </tr>
                            <tr>
                                <td><strong>分类:</strong></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- addModal -->
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><strong>应用信息</strong></h4>
                    </div>
                    <div class="modal-body">
                        <?php echo form_open('app_list/add_app'); ?>
                        <div class="form-group">
                            <label for="app_name">应用名:</label>
                            <input type="text" class="form-control" name="app_name" id="app-name" placeholder="输入应用名">
                        </div>
                        <div class="form-group">
                            <label for="package_name">应用包名:</label>
                            <input type="text" class="form-control" name="package_name" id="package_name"
                                   placeholder="如:com.yaoqibaike.jj">
                        </div>
                        <div class="form-group">
                            <label for="access_id">ACCESS ID:</label>
                            <input type="text" class="form-control" name="access_id" id="access_id" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="access_key">ACCESS KEY:</label>
                            <input type="text" class="form-control" name="access_key" id="access_key" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="secret_key">SECRET KEY:</label>
                            <input type="text" class="form-control" name="secret_key" id="secret_key" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-default">创建</button>
                        <?php echo form_close() ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>