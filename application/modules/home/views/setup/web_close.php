<?php 
	if(!isset($_SESSION['ulogin']) && $info['set_pass'] == "" || isset($_SESSION['ulogin'])){
		redirect(base_url());
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <title>Thông báo</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style type="text/css">
	*{margin: 0;padding: 0;}
	img{border: 0;}
	body{margin: 0;background-color: #e0e0e0;font: 1em/1.4em Arial, Helvetica, sans-serif;color: #333;}
	h1, h2, h3, h4, h5, h6 {color: #000;margin: 5px 0 10px 0;font-weight: 400;}
	h3, h4, h5, h6 {font-weight: 700;}
	a {color: #3084CA;}
	a:hover {color: #25669C;}
	p {color: #666;margin-bottom: 13px;font-size: 14px;}
	ul, ol {margin-bottom: 13px;margin-left: 15px;}
	ol {margin-left: 25px;}
	input.btn {font-weight: bold;cursor: pointer;border: 1px solid #bbb;border-top: 1px solid #ccc;border-bottom: 1px solid #aaa;background: #ddd url('/admin/images/icons/bg.gif?1') top left repeat-x;padding: 4px 6px;-moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius: 5px;text-shadow: 0px 1px 1px #fff;color: #3a3a3a;}
	input.btn:hover {-webkit-box-shadow: 0px 0px 3px #3084CA;-moz-box-shadow: 0px 0px 3px #3084CA;}
	input.btn:active, input.btn:focus {outline: none;-moz-outline-style: none;background: #eee;border-top: 1px solid #aaa;border-bottom: 1px solid #ccc;color: #555;}
	#container {width: 500px;margin: 50px auto 0 auto;}
	#login {background: #fff;border: none;border-bottom: 1px solid #ccc;margin: 50px auto 0 auto;padding: 30px;width: 450px;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;box-shadow: 0 0 10px rgba(0,0,0,0.1);-moz-box-shadow: 0 0 10px rgba(0,0,0,0.1);-webkit-box-shadow: 0 0 10px rgba(0,0,0,0.1);box-shadow: 0 0 10px rgba(0,0,0,0.1);}
	#login h1 {margin: 0 0 18px 0;text-align: center;line-height: 30px;}
	#login .default-text {font-family: serif;font-style: italic;margin-bottom: 1.5em;font-size: 17px;display: block;text-align: center;margin-top: 33px;}
	form#login_form {border-top: 1px solid #e0e0e0;padding-top: 25px;margin-top: 25px;font-size: 80%;margin-bottom: 35px;}
	form#login_form label {color: #777;}
	#login_form #password {font-size: 14px;padding: 4px 6px;border: 1px solid #ccc;outline: none;background: #e9e9e9;background: -moz-linear-gradient(top, #ececec 0%, #fff 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ececec), color-stop(100%, #fff));}
	#login_form label, #login_form input {float: left;margin-right: 3px;}
	#footer {margin-top: 15px;margin-bottom: 40px;font-size: 13px;color: #666;text-shadow: 0 1px rgba(255,255,255,0.4);text-align: center;}
	#powered {color: #9c9c9c;display: block;margin-top: 15px;}
	#powered a {color: #9c9c9c;text-decoration: none;}
	#powered a:hover {text-decoration: underline;}
	.error {background: #feebeb;padding: 4px 5px;font-size: 15px;color: #7e1412;display: block;margin-bottom: 15px;}
	.center {text-align: center;display: block;font-size: 17px;}
</style>
  </head>
  <body>
<div id='container'>
    <div id='login'>
    <div>
        <h1>Thông báo</h1>
        <p style="margin-bottom:0px;"> <span class="default-text" style="margin-bottom:0px;">
			<?php if($info['set_info'] == NULL){echo "Website hiện tại đang được chỉnh sửa. Vui lòng quay lại sau.";}else{echo $info['set_info'];}; ?>
        </p>
      </div>
    <form id='login_form' method='post' class="clearfix">
    	<div style="clear:both;text-align:center;color:#f00"><?php if(isset($error)){echo $error;} ?></div>
        <label for='password'>Nhập mật khẩu để xem: </label>
        <input type='password' name='password' id='password' autofocus />
        <div class="actions">
        <input class="btn" name="commit" type="submit" value="Xem" />
      </div>
      </form>
  </div>
    <div id='footer'>
    <div id='owner'>Dành cho quản trị website? <a href="/admin">đăng nhập admin</a></div>
    
    <!-- <div id='powered'>Thiết kế website bởi <a href="http://www.northstar.vn" title="Thiết kế website NorthStar.vn">NorthStar</a></div> --> 
  </div>
  </div>
</body>
</html>
