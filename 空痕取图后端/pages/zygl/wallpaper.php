<?php

$zyfl = "wallpaper";
include("../../includes/function.php");
include("../function.php");
zycx();
mysqli_close($connect);
?>

<html lang="en">

<head>
  <?php 
    include("../head.php");
  ?>
  <title>壁纸管理</title>
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
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="me-md-3 me-xl-5">
                    <h2>欢迎回来,</h2>
                    <p class="mb-md-0">空痕取图小程序管理后台.</p>
                  </div>
                  <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;资源管理&nbsp;/&nbsp;</p>
                    <p class="text-primary mb-0 hover-cursor">壁纸</p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                  <button class="btn btn-primary mt-2 mt-xl-0"><a href="./upload.php" style="text-decoration: none;"><font color=white>上传壁纸</font></a></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 style="font-size: 20px !important;" class="card-title">壁纸管理</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            壁纸
                          </th>
                          <th>
                            口令
                          </th>
                          <th>
                            状态
                          </th>
                          <th>
                            操作
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                            while($zyrow=mysqli_fetch_array($zyres)){
                                echo '<tr>
                                  <td>
                                    <img  style="width: 120px !important;height: auto !important;border-radius: 0 !important;" src="'.$zyrow["zyurl"].'" alt="image"/>
                                  </td>
                                  <td>
                                    '.$zyrow["zykl"].'
                                  </td>
                                  <td>
                                    正常
                                  </td>
                                  <td>
                                    <button class="btn-inverse-danger"><a href="./delect.php?zyid='.$zyrow["id"].'" style="text-decoration: none;color: red;">删除</a></button>
                                  </td>
                                </tr>';
                            }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              
              </div>
            
          </div>
        </div>

        <?php include("../footer.php"); ?>
        
        
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <?php
    include("../script.php");
  ?>
</body>

</html>