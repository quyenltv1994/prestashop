<?php /* Smarty version Smarty-3.1.19, created on 2018-07-13 04:50:01
         compiled from "E:\xamp\htdocs\prestashop_1.6.1.13\prestashop\adm\themes\default\template\helpers\tree\tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:290925b4867b9f01641-65046673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '777f8426e002ad417ac9e337764252d57528133d' => 
    array (
      0 => 'E:\\xamp\\htdocs\\prestashop_1.6.1.13\\prestashop\\adm\\themes\\default\\template\\helpers\\tree\\tree_node_item_radio.tpl',
      1 => 1491806002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290925b4867b9f01641-65046673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4867b9f11049_15275951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4867b9f11049_15275951')) {function content_5b4867b9f11049_15275951($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
