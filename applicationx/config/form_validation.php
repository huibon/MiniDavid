<?php
$config["user/login"] = array(                                         
	array(
	'field'=>'username',
	'label'=>'用户名',
	'rules'=>'trim|required|xss_clean|callback_username_check'
	),
	array(
	'field'=>'password',
	'label'=>'密码',
	'rules'=>'trim|required|xss_clean|callback_password_check'
	)
);


$config['user/register']= array(                                            //用户注册表单的规则
	array(
		'field'=>'username',
		'label'=>'用户名',
		//'rules'=>'trim|required|xss_clean|callback_username_exists'
	),
	array(
		'field'=>'password',
		'label'=>'密码',
		//'rules'=>'trim|required|min_length[4]|max_length[12]|matches[password_conf]|xss_clean'
		//'rules'=>'trim'
	),
	array(
		'field'=>'email',
		'label'=>'邮箱账号',
		//'rules'=>'trim|required|xss_clean|valid_email|callback_email_exists'
	)
)
?>
