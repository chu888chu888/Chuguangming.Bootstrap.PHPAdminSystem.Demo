<?php
require 'config/config.inc.php';
session_start();
function OSAdminAutoLoad($classname){
    $filename = str_replace('_', '/', $classname) . '.class.php';
    // class类
    $filepath = ADMIN_BASE_CLASS . $filename;
    if (file_exists($filepath)) {
        return include $filepath;
    }else{
		//仅对Class仅支持一级子目录
		//如果子目录中class文件与CLASS根下文件同名，则子目录里的class文件将被忽略

		$handle=opendir(ADMIN_BASE_CLASS);
		
		while (false !== ($file = readdir($handle))) {
			if (is_dir(ADMIN_BASE_CLASS. "/" . $file)) {
				$filepath=ADMIN_BASE_CLASS."/".$file."/".$filename;
				if (file_exists($filepath)) {
					return include $filepath;
				}
			}
		}
	}
    //lib库文件
    $filepath = ADMIN_BASE_LIB . $filename;
    if (file_exists($filepath)) {
        return include $filepath;
    }

    throw new Exception( $filepath . ' NOT FOUND!');
}
spl_autoload_register('OSAdminAutoLoad');

if(!isset($_SESSION['timezone'])){
		$timezone = System::get('timezone');
		$_SESSION['timezone']=$timezone;
}

date_default_timezone_set($_SESSION['timezone']);

/*
不需要登录就可以访问的链接，也可以是某个目录，不含子目录
如"/nologin/","/nologin/aaa/"
*/

$no_need_login_page=array("/login.php",	"/logout.php");

//如果不需要登录就可以访问的话
$action_url = Common::getActionUrl();
if( OSAdmin::checkNoNeedLogin($action_url,$no_need_login_page) ){	
	//for login.php logout.php etc....
	;
}else{
	//else之后 需要验证登录信息
	if(empty($_SESSION['user_info'])){
		$user_id=User::getCookieRemember();
		if($user_id>0){
			User::loginDoSomething($user_id);
		}
	}
	
	User::checkLogin();
	
	User::checkActionAccess();
	$current_user_info=UserSession::getSessionInfo();
	//如果非ajax请求
	if(stripos($_SERVER['SCRIPT_NAME'],"/ajax")===false){
		//显示菜单、导航条、模板
		$sidebar = SideBar::getTree ();
		
		//是否显示quick note
		if($current_user_info['show_quicknote']){
			OSAdmin::showQuickNote();
		}
		
		$menu = MenuUrl::getMenuByUrl(Common::getActionUrl());
		Template::assign ( 'page_title', $menu['menu_name']);
		Template::assign ( 'content_header', $menu );
		Template::assign ( 'sidebar', $sidebar );
		Template::assign ( 'current_module_id', $menu['module_id'] );
		Template::assign ( 'user_info', UserSession::getSessionInfo());
	}
}
?>