<?php

session_start();
$name = $_SESSION["username"];

include("../includes/function.php");
include("./function.php");

?>
<html lang="en">

<head>
    <?php 
    include("./head.php");
    ?>
    <title>空痕网络科技后端管理</title>
    <style>
        h5{
            margin-top: 20px;
            
        }
    </style>
</head>

<body>
  <div class="container-scroller">
    <!-- 顶部通知开始 -->
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">此处为通知位置</p>
              <a href="https://www.khkj6.com" target="_blank" class="btn me-2 buy-now-btn border-0">前往</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href=""><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- 顶部通知结束 -->
    <?php 
    
    include("./header.php"); 
    
    ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

	  <?php include("./sidebar.php"); ?>
      
      
      <!-- 首页主体开始 -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="me-md-3 me-xl-5">
                    <h2>欢迎回来,</h2>
                    <p class="mb-md-0">空痕取图小程序管理后台.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <blockquote class="blockquote">
                      <h4>尊敬的<font color="red">管理员</font>:</h4>
                      <div class="row">
                          <div class="col-md-6">
                              <h5 class="text-primary">当前登录IP为:</h5>
                          </div>
                          <div class="col-md-6">
                              <h5 class="text-primary"><?php echo $_SERVER["REMOTE_ADDR"];?></h5>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <h5 class="text-success">操作系统为:</h5>
                          </div>
                          <div class="col-md-6">
                              <h5 class="text-success"><?php echo (php_uname('s'))?></h5>
                              
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <h5 class="text-info">PHP版本为:</h5>
                          </div>
                          <div class="col-md-6">
                              <h5 class="text-info"><?php echo (PHP_VERSION);?></h5>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <h5 class="text-warning">服务器端口为:</h5>
                          </div>
                          <div class="col-md-6">
                              <h5 class="text-warning"><?php echo $_SERVER['SERVER_PORT'];?></h5>
                          </div>
                      </div>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
                    <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <blockquote class="blockquote">
                      <h4>使用说明:</h4>
                      <div class="row">
                          <div class="col-md-6">
                              <h5 class="text-primary">版权:</h5>
                          </div>
                          <div class="col-md-6">
                              <h5 class="text-primary">空痕网络科技工作室</h5>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <h5 class="text-success">客服微信:</h5>
                          </div>
                          <div class="col-md-6">
                              <h5 class="text-success">KongHen02</h5>
                              
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <h5 class="text-info">推荐PHP版本为:</h5>
                          </div>
                          <div class="col-md-6">
                              <h5 class="text-info">7.2</h5>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <h5 class="text-warning">请开启SSL:</h5>
                          </div>
                          <div class="col-md-6">
                              <h5 class="text-warning">开启强制HTTPS</h5>
                          </div>
                      </div>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>

    	<?php include("./footer.php"); ?>
	  
	  </div>
	  <!-- 首页主体结束 -->
    </div>
  </div>
  
  <?php
    include("./script.php");
  ?>

</body>

</html>

