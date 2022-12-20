<!-- 顶栏开始 -->
<!-- partial:partials/_navbar.html -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">	

  <!-- 侧滑栏顶部logo开始 -->
  <div class="navbar-brand-wrapper d-flex justify-content-center">
    <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
      <a class="navbar-brand brand-logo" href="/admin/index.php"><img src="/static/images/logo.svg" alt="logo"/></a>
      <a class="navbar-brand brand-logo-mini" href="/admin/index.php"><img src="/static/images/logo-mini.svg" alt="logo"/></a>
      <!-- 侧滑栏打开关闭按钮开始 -->
	  <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-sort-variant"></span>
      </button>
	  <!-- 侧滑栏打开关闭按钮结束 -->
    </div>  
  </div>
  <!-- 侧滑栏顶部logo结束 -->

  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">


	<!-- 顶部按钮开始 -->
    <ul class="navbar-nav navbar-nav-right">
      <!-- 顶部个人头像开始 -->
	  <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="" data-bs-toggle="dropdown" id="profileDropdown">
          <img src="/static/images/faces/head.png" alt="profile"/>
          <span class="nav-profile-name">空痕网络科技</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="/includes/loginout.php">
            <i class="mdi mdi-logout text-primary"></i>
            退出登录
          </a>
        </div>
      </li>
	  <!-- 顶部个人头像开始 -->

    </ul>
	<!-- 顶部按钮结束 -->
	
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>