<?php /* Smarty version Smarty-3.1.19, created on 2018-07-13 06:10:18
         compiled from "E:\xamp\htdocs\prestashop_1.6.1.13\prestashop\admin\themes\default\template\controllers\customer_threads\helpers\view\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77625b48262a35d030-16919178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63048f363383137899b5494f23597c293b1f4ace' => 
    array (
      0 => 'E:\\xamp\\htdocs\\prestashop_1.6.1.13\\prestashop\\admin\\themes\\default\\template\\controllers\\customer_threads\\helpers\\view\\message.tpl',
      1 => 1491806002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77625b48262a35d030-16919178',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'initial' => 0,
    'type' => 0,
    'current_employee' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b48262a3a3557_21712631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b48262a3a3557_21712631')) {function content_5b48262a3a3557_21712631($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['message']->value['id_employee']) {?>
	<?php $_smarty_tpl->tpl_vars["type"] = new Smarty_variable("customer", null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars["type"] = new Smarty_variable("employee", null, 0);?>
<?php }?>

<div class="message-item<?php if ($_smarty_tpl->tpl_vars['initial']->value) {?>-initial-body<?php }?>">
<?php if (!$_smarty_tpl->tpl_vars['initial']->value) {?>
	<div class="message-avatar">
		<div class="avatar-md">
			<?php if ($_smarty_tpl->tpl_vars['type']->value=='customer') {?>
				<i class="icon-user icon-3x"></i>
			<?php } else { ?>
				<?php if (isset($_smarty_tpl->tpl_vars['current_employee']->value->firstname)) {?><img src="<?php echo $_smarty_tpl->tpl_vars['message']->value['employee_image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_employee']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
			<?php }?>
		</div>
	</div>
<?php }?>
	<div class="message-body">
		<?php if (!$_smarty_tpl->tpl_vars['initial']->value) {?>
			<h4 class="message-item-heading">
				<i class="icon-mail-reply text-muted"></i>
					<?php if ($_smarty_tpl->tpl_vars['type']->value=='customer') {?>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['customer_name'], ENT_QUOTES, 'UTF-8', true);?>

					<?php } else { ?>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['employee_name'], ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
			</h4>
		<?php }?>
		<span class="message-date">&nbsp;<i class="icon-calendar"></i> - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['message']->value['date_add'],'full'=>0),$_smarty_tpl);?>
 - <i class="icon-time"></i> <?php echo substr($_smarty_tpl->tpl_vars['message']->value['date_add'],11,5);?>
</span>
		<?php if (isset($_smarty_tpl->tpl_vars['message']->value['file_name'])) {?> <span class="message-product">&nbsp;<i class="icon-link"></i> <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['file_name'], ENT_QUOTES, 'UTF-8', true);?>
" class="_blank"><?php echo smartyTranslate(array('s'=>"Attachment"),$_smarty_tpl);?>
</a></span><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['message']->value['product_name'])) {?> <span class="message-attachment">&nbsp;<i class="icon-book"></i> <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['product_link'], ENT_QUOTES, 'UTF-8', true);?>
" class="_blank"><?php echo smartyTranslate(array('s'=>"Product:"),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['product_name'], ENT_QUOTES, 'UTF-8', true);?>
 </a></span><?php }?>
		<p class="message-item-text"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['message'], ENT_QUOTES, 'UTF-8', true));?>
</p>
	</div>
</div>
<?php }} ?>
