<?php

include("../../includes/function.php");
include("../function.php");

?>

<html lang="en">

<head>
  <?php 
    include("../head.php");
  ?>
  <title>资源审核</title>
</head>

<body>
  <div class="container-scroller">

    <?php 
    
    include("../header.php"); 
    
    ?>
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:/static/partials/_sidebar.html -->
      
      <?php include("../sidebar.php"); ?>
      
      
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                                <div class="card-body">
                  <h4 style="font-size: 20px !important;" class="card-title">资源审核</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            缩略图
                          </th>
                          <th>
                            创作者
                          </th>
                          <th>
                            分类
                          </th>
                          <th>
                            操作
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <img  style="width: 120px !important;height: auto !important;border-radius: 0 !important;" src="https://vkceyugu.cdn.bspapp.com/VKCEYUGU-e9cc51d7-8d77-4037-8581-1c5289274e0a/c0e77fa2-0a50-463d-b8c5-68dd7a0d24e0.png" alt="image"/>
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>
                            壁纸
                          </td>
                          <td>
                            <button class="btn-inverse-success">通过</button>
                            <button class="btn-inverse-danger">驳回</button>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img  style="width: 120px !important;height: auto !important;border-radius: 0 !important;" src="https://vkceyugu.cdn.bspapp.com/VKCEYUGU-e9cc51d7-8d77-4037-8581-1c5289274e0a/4d672efc-8852-4fc4-b675-a0da5935d382.gif" alt="image"/>
                          </td>
                          <td>
                            Messsy Adam
                          </td>
                          <td>
                            表情包
                          </td>
                          <td>
                            <button class="btn-inverse-warning">通过</button>
                            <button class="btn-inverse-warning">驳回</button>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img  style="width: 120px !important;height: auto !important;border-radius: 0 !important;" src="https://vkceyugu.cdn.bspapp.com/VKCEYUGU-e9cc51d7-8d77-4037-8581-1c5289274e0a/7142762a-0bf3-42e9-83ed-2619ba90c44a.jpg" alt="image"/>
                          </td>
                          <td>
                            John Richards
                          </td>
                          <td>
                            头像
                          </td>
                          <td>
                            <button class="btn-inverse-warning">通过</button>
                            <button class="btn-inverse-warning">驳回</button>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="/static/images/faces/face4.jpg" alt="image"/>
                          </td>
                          <td>
                            Peter Meggik
                          </td>
                          <td>
                            1111
                          </td>
                          <td>
                            <button class="btn-inverse-warning">通过</button>
                            <button class="btn-inverse-warning">驳回</button>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="/static/images/faces/face5.jpg" alt="image"/>
                          </td>
                          <td>
                            Edward
                          </td>
                          <td>
                            1111
                          </td>
                          <td>
                            <button class="btn-inverse-warning">通过</button>
                            <button class="btn-inverse-warning">驳回</button>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="/static/images/faces/face6.jpg" alt="image"/>
                          </td>
                          <td>
                            John Doe
                          </td>
                          <td>
                            1111
                          </td>
                          <td>
                            <button class="btn-inverse-warning">通过</button>
                            <button class="btn-inverse-warning">驳回</button>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="/static/images/faces/face7.jpg" alt="image"/>
                          </td>
                          <td>
                            Henry Tom
                          </td>
                          <td>
                            1111
                          </td>
                          <td>
                            <button class="btn-inverse-warning">通过</button>
                            <button class="btn-inverse-warning">驳回</button>
                          </td>
                        </tr>
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