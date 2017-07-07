<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>移动端图片上传解决方案localResizeIMG先压缩后ajax无刷新上传</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width , initial-scale=1.0 , user-scalable=0 , minimum-scale=1.0 , maximum-scale=1.0" />
<script type='text/javascript' src='/nanny/Public/aunt/javascript/local_upload/js/jquery-2.0.3.min.js'></script>
<script type='text/javascript' src='/nanny/Public/aunt/javascript/local_upload/js/LocalResizeIMG.js'></script>
<script type='text/javascript' src='/nanny/Public/aunt/javascript/local_upload/js/patch/mobileBUGFix.mini.js'></script>
<style type="text/css">
body{font-family:"微软雅黑"}
.uploadbtn{ display:block;height:40px; line-height:40px; color:#333; text-align:center; width:100%; background:#f2f2f2; text-decoration:none; }
.imglist{min-height:200px;margin:10px;}
.imglist img{width:100%;}
.input_txt{width:200px;height:30px;font-size: 15px;}
</style>
</head>
<body>
<div style="width:400px;text-align:center;margin:10px auto; border:solid 1px #ddd; overflow:hidden; ">
  <input type="file" id="uploadphoto" name="uploadfile" value="请点击上传图片"   style="display:none;" />
  <div class="imglist"><img onclick="uploadphoto.click()" id="head_pic" src="/nanny/Public/aunt/image/head.png"/></div>
 <!-- <a href="javascript:void(0);"  class="uploadbtn">点击上传文件</a>-->
  <p>阿姨姓名：<input id="user_name" class="input_txt"/></p>
  <p>阿姨手机号：<input id="phone" class="input_txt"/></p>
  <p>
    <input type="hidden" id="pic" value=""/>
    <input type="button" value="确定上传" id="ok" />
  </p>
</div>
<script type="text/javascript">
$(document).ready(function(e) {
    $('#uploadphoto').localResizeIMG({
        width: 800,
        quality: 1,
        success: function (result) {
            var submitData={
                base64_string:result.clearBase64,
            };
            $.ajax({
                type: "POST",
                url: "<?php echo U('up_pic');?>",
                data: submitData,
                dataType:"json",
                success: function(data){
                    if (0 == data.status) {
                        alert(data.content);
                        return false;
                    }else{
                        alert(data.content);
//                        var attstr= '<img src="'+data.url+'">';
//                        $(".imglist").append(attstr);
                        $("#head_pic").attr('src',data.url);
                        $('#pic').val(data.img);
                        return false;
                    }
                },
                complete :function(XMLHttpRequest, textStatus){
                },
                error:function(XMLHttpRequest, textStatus, errorThrown){ //上传失败
                    alert(XMLHttpRequest.status);
                    alert(XMLHttpRequest.readyState);
                    alert(textStatus);
                }
            });
        }
    });

   $('#ok').click(function() {
       var names = $('#user_name').val();
       var phones = $('#phone').val();
       var pics = $('#pic').val();
       if (!names || !phones || !pics) {
           alert('请编写姓名、手机号码、图片');
           return false;
       }

       $.ajax({
           type: "POST",
           url: "<?php echo U('submit_user');?>",
           data: {
               pic:pics,
               name:names,
               phone:phones
           },
           dataType:"json",
           success: function(data){
               if (0 == data.status) {
                   alert(data.content);
                   return false;
               }else{
                   alert(data.content);
                   window.location.reload();
                   return false;
               }
           },
           complete :function(XMLHttpRequest, textStatus){
           },
           error:function(XMLHttpRequest, textStatus, errorThrown){ //上传失败
               alert(XMLHttpRequest.status);
               alert(XMLHttpRequest.readyState);
               alert(textStatus);
           }
       })
   })

}); 
</script>
</body>
</html>