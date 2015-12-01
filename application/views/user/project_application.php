<!DOCTYPE html>

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>项目基本信息填写</h1>
</div>


                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                



<!-- Place this in the body of the page content -->
<form id="add-form" class="form-horizontal" method="post" role="form" action="<?php echo site_url('user/project_application');?>">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="ProjectRequest">项目名称</label>
        <div class="col-sm-7">
            <input class="col-xs-10 col-sm-7" type="text" name="name" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="ProjectRequest">项目类别</label>
        <div class="col-sm-7">
            <select name="type" class="col-xs-10 col-sm-7">
                <option>竞赛</option>
                <option>教师科研</option>
                <option>个人兴趣自拟</option>
                <option>外部合作</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="ProjectRequest">性质</label>
        <div class="col-sm-7">
            <select name="property" class="col-xs-10 col-sm-7">
                <option>外包项目</option>
                <option>校级立项</option>
                <option>其他</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="ProjectRequest">报酬形式</label>
        <div class="col-sm-7">
            <select name="reward_method" class="col-xs-10 col-sm-7">
                <option>资金</option>
                <option>设备</option>
                <option>无报酬</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="ProjectRequest">现金额度</label>
        <div class="col-sm-7">
            <input class="col-xs-10 col-sm-7" type="number" name="fund" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="ProjectRequest">项目需求介绍</label>
        <div class="col-sm-7">
            <textarea class="col-xs-10 col-sm-7" name="description"></textarea>
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="ProjectRequest">项目起止时间</label>
        <div class="col-sm-2 input-daterange">
            <input type="text" class="col-xs-10 col-sm-12" name="start_time"/>
        </div>
        <div class="col-sm-2 input-daterange">
            <input type="text" class="col-xs-10 col-sm-12" name="finish_time"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="ProjectRequest">联系咨询方式</label>
        <div class="col-sm-7">
            <input type="text" class="col-xs-10 col-sm-7" name="contact_way"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="ProjectRequest">人数限制（竞赛类填0）</label>
        <div class="col-sm-6">
            <input class="col-xs-10 col-sm-3" type="number" name="max_member">
        </div>
    </div>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9 ">
            <button class="btn btn-info" type="submit">
                <i class="ace-icon fa fa-check bigger-110"></i> 保存
            </button>

            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset">
                <i class="ace-icon fa fa-undo bigger-110"></i> 重置
            </button>
        </div>
    </div>
</form>
</body>
</html>