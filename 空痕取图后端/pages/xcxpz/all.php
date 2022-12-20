<?php
$pzname = "allpz";
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
  <title>全局配置</title>
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
                  <h2 style="font-size: 20px !important;" class="card-title">小程序全局配置</h2>
                  <form class="form-sample" action="./change.php?pzname=<?php echo $pzname; ?>" method="POST">
                    <p class="card-description">
                      基础配置
                    </p>
                    <div class="row">
                      <div class="form-group row">
                         <label for="appid" class="col-sm-3 col-form-label">小程序名称</label>
                         <div class="col-sm-9">
                           <input type="text" class="form-control" name="appid" value="<?php echo($pzrow['appid']); ?>">
                         </div>
                      </div>
                      <div class="form-group row">
                         <label for="adjili" class="col-sm-3 col-form-label">首页顶部图片</label>
                         <div class="col-sm-9">
                           <input type="text" class="form-control" name="adjili" value="<?php echo($pzrow['adjili']); ?>">
                         </div>
                      </div>
                      <div class="form-group row">
                         <label for="advideo" class="col-sm-3 col-form-label">搜索框提示</label>
                         <div class="col-sm-9">
                           <input type="text" class="form-control" name="advideo" value="<?php echo($pzrow['advideo']); ?>">
                         </div>
                      </div>
                      <div class="form-group row">
                         <label for="adcp" class="col-sm-3 col-form-label">首页创作者推荐</label>
                         <div class="col-sm-9">
                           <input type="text" class="form-control" name="adcp" placeholder="创作者id，请使用英文逗号“,”隔开" value="<?php echo($pzrow['adcp']); ?>">
                         </div>
                      </div>
                      <div class="form-group row">
                         <label for="adbanner" class="col-sm-3 col-form-label">创作者入驻二维码</label>
                         <div class="col-sm-9">
                           <input type="text" class="form-control" name="adbanner" value="<?php echo($pzrow['adbanner']); ?>">
                         </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">模糊图下载</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="appsecret" id="appsecret" value="yes" <?php if($pzrow['appsecret']=='yes'){echo 'checked';} ?>>
                                开启
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="mohutu2" id="mohutu2" value="no" <?php if($pzrow['appsecret']=='no'){echo 'checked';} ?>>
                                关闭
                              </label>
                            </div>
                          </div>
                        </div>

                    <p class="card-description">
                      其他配置
                    </p>
                    <div class="form-group row">
                         <label for="adtp" class="col-sm-3 col-form-label">预留位置1</label>
                         <div class="col-sm-9">
                           <input type="text" class="form-control" name="adtp" placeholder="预留位置1" value="<?php echo($pzrow['adtp']); ?>">
                         </div>
                    </div>
                    <div class="form-group row">
                         <label for="adys" class="col-sm-3 col-form-label">预留位置2</label>
                         <div class="col-sm-9">
                           <input type="text" class="form-control" name="adys" placeholder="预留位置2" value="<?php echo($pzrow['adys']); ?>">
                         </div>
                    </div>
                    <button type="submit" style="margin-top: 20px !important;margin-left: 2%;width: 96%;" class="btn btn-primary btn-rounded btn-fw">保存配置</button>
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