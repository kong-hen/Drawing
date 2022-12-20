<?php

$pzname = "wxpz";
include("../../includes/function.php");
include("../function.php");
pzdb();
mysqli_close($connect);
?>

<html lang="en">

<head>
  <?php 
    include("../head.php");
  ?>
  <title>微信小程序</title>
</head>

<body>
  <div class="container-scroller">
    <?php 
    include("../header.php"); 
    ?>
    <div class="container-fluid page-body-wrapper">
      <?php include("../sidebar.php"); ?>
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 style="font-size: 20px !important;" class="card-title">微信小程序</h2>
                  <form class="form-sample" action="./change.php?pzname=<?php echo $pzname; ?>" method="POST">
                    <p class="card-description">
                      基础配置
                    </p>
                    <div class="row">
                      <div class="form-group row">
                         <label for="appid" class="col-sm-3 col-form-label">小程序ID</label>
                         <div class="col-sm-9">
                           <input type="text" class="form-control" name="appid" value="<?php echo($pzrow['appid']); ?>">
                         </div>
                      </div>
                      <div class="form-group row">
                         <label for="appsecret" class="col-sm-3 col-form-label">小程序密钥</label>
                         <div class="col-sm-9">
                           <input type="text" class="form-control" name="appsecret" value="<?php echo($pzrow['appsecret']); ?>">
                         </div>
                      </div>
                      
                    <p class="card-description">
                      流量主配置
                    </p>
                    <div class="form-group row">
                         <label for="adjili" class="col-sm-3 col-form-label">激励广告ID</label>
                         <div class="col-sm-9">
                           <input type="text" class="form-control" name="adjili" value="<?php echo($pzrow['adjili']); ?>">
                         </div>
                    </div>
                    <div class="form-group row">
                         <label for="advideo" class="col-sm-3 col-form-label">视频广告ID</label>
                         <div class="col-sm-9">
                           <input type="text" class="form-control" name="advideo" value="<?php echo($pzrow['advideo']); ?>">
                         </div>
                    </div>
                    <div class="form-group row">
                         <label for="adcp" class="col-sm-3 col-form-label">插屏广告ID</label>
                         <div class="col-sm-9">
                           <input type="text" class="form-control" name="adcp" value="<?php echo($pzrow['adcp']); ?>">
                         </div>
                    </div>
                    <div class="form-group row">
                         <label for="adbanner" class="col-sm-3 col-form-label">banner广告ID</label>
                         <div class="col-sm-9">
                           <input type="text" class="form-control" name="adbanner" value="<?php echo($pzrow['adbanner']); ?>">
                         </div>
                    </div>
                    <div class="form-group row">
                         <label for="adtp" class="col-sm-3 col-form-label">视频贴片广告ID</label>
                         <div class="col-sm-9">
                           <input type="text" class="form-control" name="adtp" value="<?php echo($pzrow['adtp']); ?>">
                         </div>
                    </div>
                    <div class="form-group row">
                         <label for="adys" class="col-sm-3 col-form-label">原生广告ID</label>
                         <div class="col-sm-9">
                           <input type="text" class="form-control" id="adys" value="<?php echo($pzrow['adys']); ?>">
                         </div>
                    </div>
                    <button style="margin-top: 20px !important;margin-left: 2%;width: 96%;" type="submit" class="btn btn-primary btn-rounded btn-fw">保存配置</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php include("../footer.php"); ?>
      </div>
    </div>
  </div>
  <?php
    include("../script.php");
  ?>
</body>

</html>
