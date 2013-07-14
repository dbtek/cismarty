<?php /* Smarty version Smarty-3.1.12, created on 2013-07-14 22:53:03
         compiled from "application/views/templates/welcome/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142264591051e300fd750cb4-47675947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29f7b0257e8d14ed7350fdb72900962886389be4' => 
    array (
      0 => 'application/views/templates/welcome/index.tpl',
      1 => 1373831559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142264591051e300fd750cb4-47675947',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51e300fd779544_53121769',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e300fd779544_53121769')) {function content_51e300fd779544_53121769($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter and Smarty template engine.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>. For further information about Smarty go <a href="http://www.smarty.net/docs/en/">Smarty Manual</a>.</p>
	</div>

</div>

</body>
</html>
<?php }} ?>