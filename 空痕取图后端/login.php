<?php

include("./includes/function.php");

if ($name) {
    echo "<script>alert(\"您已登录,正在跳转~~\");url='./pages/home.php';window.location.href=url;</script>";
}else{
    echo "<script>alert(\"您还未登录,请先登录！\");</script>";
}

?>
<html lang="en">
<head>
  <title>后台登录</title>
  <?php 
    include("./pages/head.php");
  ?>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="/static/images/logo.svg" alt="logo">
              </div>
              <h4>欢迎使用管理后台</h4>
              <h6 class="font-weight-light">登录以继续.</h6>
              <div class="pt-3">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="username" placeholder="用户名">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" placeholder="密码">
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" id="islogin">
                      记住密码
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button style="width: 100% !important;" class="btn btn-block btn-primary btn-rounded btn-lg font-weight-medium auth-form-btn"  onclick="login()">登录</button>
                </div>
                
              </div>
              <div class="text-center mt-4 font-weight-light" style="margin-top: 50px !important;">
                  Copyright © <a href="https://www.khkj6.com" target="_blank" class="text-primary">空痕网络科技 </a>2022
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    include("./pages/script.php");
  ?>
</body>
<script>
    function login(){
        var uname = document.getElementById("username").value;
        var pword = document.getElementById("password").value;
        if((uname.length <= 0) || (pword.length <= 0)){
            alert("请确保账号或密码均不为空");
        }else{
            $.ajax({
                url: './includes/chklog.php',
                type: 'post',
                dataType:'json',
                data: {
                    "uname" : uname,
                    "pword" : pword
                },
                success:function(data){
                    if(data.flag==1){
                        alert( "登录成功，正在跳转");
                        window.location.replace('./pages/home.php');
                    }else{
                        alert(data.error);
                    }
                },
                error:function(data){
                    alert("服务器错误，请检查服务器！");
                }
            });
        }
    }
</script>
</html>