<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User as UserModel;



class Index extends Controller
{
   public function index()
  {
    return $this->fetch('register');
  }
  public function add()
  {
  	if ($_POST['password']!=$_POST['repassword']) {
  		return "请输入相同密码！";
  	}
  	$user=new UserModel();
  	$user['username']=$_POST['username'];
  	$user['password']=$_POST['password'];
  	$user['email']=$_POST['email'];
  	$user['creat_time']=date('Y-m-d H:i:s');
  	if($user ->save()){
  		return "数据插入成功！";
  	}else{
  		return "数据插入失败！";
  	}

  	
  }
    
 
   
}
