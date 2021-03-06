<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <LINK rel="Bookmark" href="/favicon.ico" >
    <LINK rel="Shortcut Icon" href="/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/Public/aunt/lib/html5.js"></script>
    <script type="text/javascript" src="/Public/aunt/lib/respond.min.js"></script>
    <script type="text/javascript" src="/Public/aunt/lib/PIE_IE678.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/Public/aunt/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/Public/aunt/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/Public/aunt/lib/Hui-iconfont/1.0.7/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/Public/aunt/lib/icheck/icheck.css" />
    <link rel="stylesheet" type="text/css" href="/Public/aunt/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/Public/aunt/static/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->

    <title>添加用户</title>
    <style>
        .table td{padding:1px 4px;}
    </style>
</head>
<body>
<article class="page-container">
    <form class="form-horizontal" enctype='multipart/form-data' id='addclient' name='addclient' method='post' action='/index.php/Aunt/User/add'>
        <div class="table-c" align="center">
            <table width="800" border="0" cellspacing="0" cellpadding="0" class="table table-border table-bordered table-hover table-bg table-sort">

                <tr>
                    <td rowspan="10" width="10%">
                        <div class="img"><span id="roate" onclick="roate('Uploads/aunt_img/mini/<?php echo ($info["pic"]); ?>')">翻转图片</span><img src="<?php if($info[pic]): ?>/Uploads/aunt_img/mini/<?php echo ($info["pic"]); else: ?>/Public/aunt/image/head.png<?php endif; ?>" class="myimg" id="img1" myid="1"></div>
                        <input type="file" class="uploadpic" myname="logo1" id="file1" myid="1" style="display: none;">
                        <input name="pic" value="<?php echo ($info["pic"]); ?>" id="pic" type="hidden" />
                        <input name="cid" value="<?php echo ($info["id"]); ?>" type="hidden" />
                        <input name="sub_type" value="1" type="hidden" /><!--判断是否是js提交-->
                    </td>
                </tr>

                <tr>
                    <td>姓名</td>
                    <td><input type="text" name="name" class="input-text " value="<?php echo ($info["name"]); ?>" /></td>
                    <td>工号</td>
                    <td><input type="text" name="jobnumber" class="input-text " value="<?php echo ($info["jobnumber"]); ?>" /></td>
                </tr>

                <tr>
                    <td>籍贯</td>
                    <td>
                        <select name="city" class="input-text ">
                            <option value="北京" <?php if($info[city] == '北京'): ?>selected<?php endif; ?>>北京市</option>
                            <option value="浙江省" <?php if($info[city] == '浙江省'): ?>selected<?php endif; ?>>浙江省</option>
                            <option value="天津市" <?php if($info[city] == '天津市'): ?>selected<?php endif; ?>>天津市</option>
                            <option value="安徽省" <?php if($info[city] == '安徽省'): ?>selected<?php endif; ?>>安徽省</option>
                            <option value="上海市" <?php if($info[city] == '上海市'): ?>selected<?php endif; ?>>上海市</option>
                            <option value="福建省" <?php if($info[city] == '福建省'): ?>selected<?php endif; ?>>福建省</option>
                            <option value="重庆市" <?php if($info[city] == '重庆市'): ?>selected<?php endif; ?>>重庆市</option>
                            <option value="江西省"<?php if($info[city] == '江西省'): ?>selected<?php endif; ?>>江西省</option>
                            <option value="山东省" <?php if($info[city] == '山东省'): ?>selected<?php endif; ?>>山东省</option>
                            <option value="河南省" <?php if($info[city] == '河南省'): ?>selected<?php endif; ?>>河南省</option>
                            <option value="湖北省" <?php if($info[city] == '湖北省'): ?>selected<?php endif; ?>>湖北省</option>
                            <option value="湖南省" <?php if($info[city] == '湖南省'): ?>selected<?php endif; ?>>湖南省</option>
                            <option value="广东省" <?php if($info[city] == '广东省'): ?>selected<?php endif; ?>>广东省</option>
                            <option value="海南省" <?php if($info[city] == '海南省'): ?>selected<?php endif; ?>>海南省</option>
                            <option value="山西省" <?php if($info[city] == '山西省'): ?>selected<?php endif; ?>>山西省</option>
                            <option value="青海省" <?php if($info[city] == '青海省'): ?>selected<?php endif; ?>>青海省</option>
                            <option value="江苏省" <?php if($info[city] == '江苏省'): ?>selected<?php endif; ?>>江苏省</option>
                            <option value="辽宁省" <?php if($info[city] == '辽宁省'): ?>selected<?php endif; ?>>辽宁省</option>
                            <option value="吉林省" <?php if($info[city] == '吉林省'): ?>selected<?php endif; ?>>吉林省</option>
                            <option value="台湾省" <?php if($info[city] == '台湾省'): ?>selected<?php endif; ?>>台湾省</option>
                            <option value="河北省" <?php if($info[city] == '河北省'): ?>selected<?php endif; ?>>河北省</option>
                            <option value="贵州省" <?php if($info[city] == '贵州省'): ?>selected<?php endif; ?>>贵州省</option>
                            <option value="四川省" <?php if($info[city] == '四川省'): ?>selected<?php endif; ?>>四川省</option>
                            <option value="云南省" <?php if($info[city] == '云南省'): ?>selected<?php endif; ?>>云南省</option>
                            <option value="陕西省" <?php if($info[city] == '陕西省'): ?>selected<?php endif; ?>>陕西省</option>
                            <option value="甘肃省" <?php if($info[city] == '甘肃省'): ?>selected<?php endif; ?>>甘肃省</option>
                            <option value="黑龙江省" <?php if($info[city] == '黑龙江省'): ?>selected<?php endif; ?>>黑龙江省</option>
                            <option value="香港特别行政区" <?php if($info[city] == '香港特别行政区'): ?>selected<?php endif; ?>>香港特别行政区</option>
                            <option value="澳门特别行政区" <?php if($info[city] == '澳门特别行政区'): ?>selected<?php endif; ?>>澳门特别行政区</option>
                            <option value="广西壮族自治区" <?php if($info[city] == '广西壮族自治区'): ?>selected<?php endif; ?>>广西壮族自治区</option>
                            <option value="宁夏回族自治区" <?php if($info[city] == '宁夏回族自治区'): ?>selected<?php endif; ?>>宁夏回族自治区</option>
                            <option value="新疆维吾尔自治区" <?php if($info[city] == '新疆维吾尔自治区'): ?>selected<?php endif; ?>>新疆维吾尔自治区</option>
                            <option value="内蒙古自治区" <?php if($info[city] == '内蒙古自治区'): ?>selected<?php endif; ?>>内蒙古自治区</option>
                            <option value="西藏自治区" <?php if($info[city] == '西藏自治区'): ?>selected<?php endif; ?>>西藏自治区</option>
                        </select>

                    </td>
                    <td>年龄</td>
                    <td><input type="text" class="input-text " name="age" value="<?php echo ($info["age"]); ?>"/></td>
                </tr>


                <tr>
                    <td>属相</td>
                    <td>
                        <select name="animal" class="input-text ">
                            <?php echo ($info["animal"]); ?>
                        </select>
                    </td>
                    <td>工作类型</td>
                    <td><input type="text" name="wtype" value="<?php echo ($info["wtype"]); ?>" class="input-text "/></td>
                </tr>

                <tr>
                    <td>学历</td>
                    <td>
                        <select name="edu" class="input-text ">
                            <?php echo ($info["edu"]); ?>
                        </select>
                    </td>
                    <td>食宿</td>
                    <td>
                        <select name="room" class="input-text">
                            <?php echo ($info["room"]); ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>出生年月</td>
                    <td>
                        <input type="text" id="from" name="birth" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" value="<?php echo ($info["birth"]); ?>" class="input-text ">
                    </td>
                    <td>工作年限</td>
                    <td>
                        <select name="worktime" class="input-text ">
                            <?php echo ($info["worktime"]); ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>资质证书</td>
                    <td>
                        <input type="text" name="certification" value="<?php echo ($info["certification"]); ?>" class="input-text " />
                    </td>
                    <td>服务过家庭</td>
                    <td>
                        <select name="shome" class="input-text " >
                            <?php echo ($info["shome"]); ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>语言能力</td>
                    <td>
                        <input type="text" name="language" value="<?php echo ($info["language"]); ?>" class="input-text " />
                    </td>
                    <td>煮菜口味</td>
                    <td><input type="text" name="taste" value="<?php echo ($info["taste"]); ?>" class="input-text " /></td>
                </tr>

                <tr>
                    <td>工作区域</td>
                    <td>
                        <input type="text" name="workspace" value="<?php echo ($info["workspace"]); ?>" class="input-text " />
                    </td>
                    <td>工作状态</td>
                    <td>
                        <select  name="workstate" class="input-text" >
                            <?php echo ($info["workstate"]); ?>
                        </select>
                    </td>

                </tr>

                <tr>
                    <td>手机号码</td>
                    <td>
                        <input type="text" name="phone" value="<?php echo ($info["phone"]); ?>" class="input-text " />
                    </td>
                    <td>入住时间</td>
                    <td><?php echo ($info["createtime"]); ?></td>
                </tr>

                <tr>
                    <td style="text-align: center;">工作经历</td>
                    <td colspan="5"><textarea type="text"   class="input-text" name="workhistory" style=" height: 60px;"><?php echo ($info["workhistory"]); ?></textarea></td>
                </tr>
                <tr>
                    <td style="text-align: center;">工作技能</td>
                    <td colspan="5"><textarea type="text" class="input-text" name="workability" style=" height: 60px;"><?php echo ($info["workability"]); ?></textarea></td>
                </tr>
                <tr>
                    <td style="text-align: center;">自我评价</td>
                    <td colspan="5"><textarea type="text" class="input-text" name="evaluation" style=" height: 60px;"><?php echo ($info["evaluation"]); ?></textarea></td>
                </tr>

                <tr>
                    <td colspan="6" style="text-align: center;">
                        <input class="btn btn-primary radius" type="button" onclick="sub_form()" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                    </td>
                </tr>



            </table>
        </div>
    </form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/aunt/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/aunt/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/Public/aunt/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/aunt/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/Public/aunt/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/Public/aunt/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">


    var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
    function sub_form(){
        $.ajax({
            url:"<?php echo U('user/user_edit_submit');?>",
            type:'POST', //GET
            data:$('#addclient').serialize(),
            dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
            beforeSend:function(xhr){
                layer.load();
            },
            success:function(data){
                layer.closeAll('loading');
                if(data.status == 1){
                    tips(data.msg,'',6);
                    parent.parent.window.location.reload();
                    parent.layer.close(index);
                }else{
                    tips(data.msg);
                }
            },
        });
    }

    function roate(url){
        $.ajax({
            url:"<?php echo U('user/get_rotate');?>",
            type:'POST', //GET
            data:'pic='+url,
            dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
            beforeSend:function(xhr){

            },
            success:function(data){
                layer.closeAll('loading');
                if(data.status == 1){
                    tips(data.msg,'',6);
                    window.location.reload();
                }else{
                    tips(data.msg);
                }
            },
        });
    }

    //提示窗口
    function tips(){
        msg = arguments[0] ? arguments[0] : '出现错误';
        offsets = arguments[1] ? arguments[1] : '50px';
        icon = arguments[2] ? arguments[2] : 5;
        parent.layer.msg(msg, {time: 800, icon:icon,shade: 0.3,offset: offsets });
    }

    $(function(){
        $(".myimg").click(function () {
            $('#file' + $(this).attr("myid")).click();
        });

        //上传图片
        $(".uploadpic").change(function () {
            var myid = $(this).attr("myid");
            var img = $('#img' + myid);
            var myimg = img.attr("src");
            img.attr("src", "/Public/aunt/image/loading.gif");
            var file = this.files[0];
            if (!file || !file.type.match(/image.*/)) return;
            if (file.size > 40000000) {
                alert("图片大小<10M");
                return;
            }
            var fd = new FormData();
            fd.append("id", 9163);
            fd.append("name", $(this).attr("myname"));
            fd.append("img", file);
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "<?php echo U('user/upload_pic');?>");
            var span = document.createElement("span");
            img.after(span);
            xhr.upload.addEventListener("progress", function (e) {
                if (e.lengthComputable) {
                    var percentage = Math.round((e.loaded * 100) / e.total);
                    span.innerText = percentage + "%";
                }
            }, false);
            xhr.addEventListener("readystatechange", function (e) {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var res = JSON.parse(xhr.responseText);
                    if (res.status) {
                        img.attr("src", res.thumb);
                        $("#pic").attr("value", res.img);
                    } else {
                        tips(res.msg);
                        img.attr("src", myimg);
                        $('#file' + myid).val('');
                    }
                    span.parentNode.removeChild(span);
                    span = null;
                }
            }, false);
            xhr.send(fd);
        });
    });
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>