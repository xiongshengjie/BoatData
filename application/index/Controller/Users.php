<?php
namespace app\index\controller;
use app\index\model\Users as UsersModel ;
class Users 
{
	public function add()
	{
/*		$users= new UsersModel();
		$users->username='刘德华';
		$users->password='123456789';
		$users->email='7362745762@qq.com';
		$users->Tel='132456785678'; 
		if($users -> save())
		{
			return '用户新增成功';
		} else
		{
			return "用户新增失败";
		}*/

	$users['username']='周杰';
	$users['password']='12345643';
	$users['email']='837547128@qq.com';
	$users['Tel']='1872365427';
	if($result=UsersModel::create($users)){
		return "新增成功";
	}else {
		return '用户新增失败';
	}
	}

    //有问题，没有成功
	/*public function add()
	{
		$us=new UsersModel;
		$list[
			['username'=>'王力宏' , 'email'=>'78347234@qq.com' , 'password'=>'shfiakc' , 'Tel'=>'465273417'],
			['username'=>'王da力','email'=>'783234434@qq.com','password'=>'shfsvakc','Tel'=>'414244417']

		];
		if($us->saveAll($list))
		{
			return '批量成功';
		}
		 else {
			return '批量失败';
		}
	}*/
	//更新数据
	public function update()
	{
		$user = UsersModel::get(1);
		$user->username='周华健';
		if($user->save()){
			return 'data update seccess';
		}
	}
}


