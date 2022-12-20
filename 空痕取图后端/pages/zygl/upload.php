<?php
$up = $_GET["up"];
?>
<html lang="en">
<head>
  <?php 
    include("../head.php");
  ?>
  <title>资源上传</title>
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
                      <h2 style="font-size: 20px !important;" class="card-title">资源上传</h2>
                      <form class="forms-sample" action="./up.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                              <label style="font-size: 15px;padding: 6px;" for="zyfl" class="col-sm-3 col-form-label">分类选择</label>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm">
                                  <div class="form-check form-check-info">
                                    <label class="form-check-label">
                                        <input type="radio" name="zyfl" class="form-check-input" checked value="wallpaper">
                                          壁纸
                                    </label>
                                  </div>
                              </div>
                              <div class="col-sm">
                                  <div class="form-check form-check-danger">
                                    <label class="form-check-label">
                                      <input type="radio" name="zyfl" class="form-check-input" value="head">
                                      头像
                                    </label>
                                  </div>
                              </div>
                              <div class="col-sm">
                                <div class="form-check form-check-warning">
                                    <label class="form-check-label">
                                      <input type="radio" name="zyfl" class="form-check-input" value="emoji">
                                      表情包
                                    </label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px;padding: 6px;" for="zykl" class="col-sm-3 col-form-label">资源口令</label>
                            </div>
                            <div class="form-group">
                                <input type="text" name="zykl" class="form-control" placeholder="资源口令" value="khkj" required>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px;padding: 6px;" for="tpxz" class="col-sm-3 col-form-label">图片选择</label>
                            </div>
                            <div class="form-group row">
                                <input type="hidden" name="max_file_size" value="1048576">
                                <input id="img-upload" type="file" name="file" style="visibility: hidden;position: absolute;">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload" disabled placeholder="只支持jpg,jpeg,png,Gif且小于2M图片" value="">
                                    <span class="input-group-append">
                                      <button class="file-upload btn btn-primary" type="button">选择图片</button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" style="visibility: hidden;position: absolute;">
                                <button id="submit" style="margin-top: 20px !important;margin-left: 2%;width: 96%;" class="btn btn-primary btn-rounded btn-fw">上传图片</button>
                            </div>
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
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script>
        $(function () {
            $(".file-upload").click(function(){
                $("#img-upload").click();
            });
            $("#img-upload").change(function () {
                //获取文件的value值
                file = $("#img-upload").val()
                //获取文件名+扩展名
                fileName = file.split("\\").pop();
                $(".file-upload").val(fileName);
                console.log(fileName);
            })
        });
    </script>
</body>

</html>