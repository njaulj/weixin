<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta charset="utf-8" /><link href="__STATIC__/css/admin/css.css" rel="stylesheet"/><title>管理中心</title><style>body {
	background-color:#f6f8f9;
	background-image:none;
}
.login h1 img{ vertical-align:bottom;}
</style></head><body><div class="login"><h1><img src="__STATIC__/images/admin/weixin.png"/>微信商城管理系统</h1><form action="<?php echo U('index/login');?>" method="post" id="myform"><div><img src="__STATIC__/images/admin/login-top.jpg" /></div><div class="login-center"><ul><li> 用户名:<br /><input name="username" type="text" class="input-text1" value="" style="width:320px;padding:0px 8px;"/></li><li> 密 码:<br /><input name="password" type="password" class="input-text1" style="width:320px;padding:0px 8px;"/></li><li> 验证码:<br /><input name="verify_code" type="text" class="input-text1" style="width:160px;padding:0px 8px;"/><img src="<?php echo U('index/verify_code', array('t'=>time()));?>"  title="<?php echo (L("refresh_verify_code")); ?>" class="verify_img" id="verify"  style="cursor:pointer; vertical-align:bottom; margin-left:5px;"></li><li><input name="remember" type="checkbox" value="1" class="remember-me"/><span class="fz12 fc999 remember-me2">&nbsp;记住我的登录信息</span></li></ul></div><div><img src="__STATIC__/images/admin/login_bottom.jpg" /></div><input type="submit" value="  " name="do" class="login-button" style="cursor:pointer;"/></form></div><script language="javascript" type="text/javascript" src="__STATIC__/js/jquery/jquery.js"></script><script>$(function(){
    if(self != top){
        top.location = self.location;
    }
    
    $(".verify_img").click(function(){
        var timenow = new Date().getTime();
        $(this).attr("src","<?php echo U('index/verify_code');?>&"+timenow)
    });
});
</script><iframe name="upload" style="display:none"></iframe></body></html>