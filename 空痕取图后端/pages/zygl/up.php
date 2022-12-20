<?php

	header("content-type:text/html;charset=utf-8");
	//设置时区
	date_default_timezone_set('PRC');
	//获取资源分类
	$zyfl = $_POST["zyfl"];
	//获取资源口令
	$zykl = $_POST["zykl"];
	//获取文件名
	$filename = $_FILES['file']['name'];
	//获取文件临时路径
	$temp_name = $_FILES['file']['tmp_name'];
	//获取大小
	$size = $_FILES['file']['size'];
	//获取文件上传码，0代表文件上传成功
	$error = $_FILES['file']['error'];
	//判断文件大小是否超过设置的最大上传限制
	if ($size > 2*1024*1024){
		$result = "上传失败,文件大小超过2M大小";
	}else{
    	//phpinfo函数会以数组的形式返回关于文件路径的信息 
    	//[dirname]:目录路径[basename]:文件名[extension]:文件后缀名[filename]:不包含后缀的文件名
    	$arr = pathinfo($filename);
    	//获取文件的后缀名
    	$ext_suffix = $arr['extension'];
    	//设置允许上传文件的后缀
    	$allow_suffix = array('jpg','gif','jpeg','png');
    	//判断上传的文件是否在允许的范围内（后缀）==>白名单判断
    	if(!in_array($ext_suffix, $allow_suffix)){
    		$result = "上传失败,上传的文件类型只能是jpg,gif,jpeg,png";
    	}else{
    	    //检测存放上传文件的路径是否存在，如果不存在则新建目录
        	if (!file_exists('../../uploads')){
        		mkdir('../../uploads');
        	}
        	//为上传的文件新起一个名字，保证更加安全
        	$new_filename = date('YmdHis',time()).rand(100,1000).'.'.$ext_suffix;
        	//将文件从临时路径移动到磁盘
        	if (move_uploaded_file($temp_name, '../../uploads/'.$new_filename)){
        	    $zyurl = "https://".$_SERVER['HTTP_HOST']."/uploads/".$new_filename;
        // 		echo($imgurl);
        		include("../../includes/function.php");
                include("../function.php");
                zytj();
                $result = "上传成功";
        	}else{
        	    $result = "上传失败,未知错误";
        	}
        	
        }
	    
	}
	$url = "https://".$_SERVER["HTTP_HOST"]."/pages/zygl/upload.php";
	echo '<script>alert("'.$result.'");window.location.href="'.$url.'";</script>';
?>