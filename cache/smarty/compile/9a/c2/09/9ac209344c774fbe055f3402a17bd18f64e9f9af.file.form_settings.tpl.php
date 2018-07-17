<?php /* Smarty version Smarty-3.1.19, created on 2018-07-13 06:10:38
         compiled from "E:\xamp\htdocs\prestashop_1.6.1.13\prestashop\admin\themes\default\template\controllers\referrers\form_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186275b48263ee65f56-08652912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ac209344c774fbe055f3402a17bd18f64e9f9af' => 
    array (
      0 => 'E:\\xamp\\htdocs\\prestashop_1.6.1.13\\prestashop\\admin\\themes\\default\\template\\controllers\\referrers\\form_settings.tpl',
      1 => 1491806002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186275b48263ee65f56-08652912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current' => 0,
    'token' => 0,
    'tracking_dt' => 0,
    'statsdata_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b48263eecb864_04344449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b48263eecb864_04344449')) {function content_5b48263eecb864_04344449($_smarty_tpl) {?>
<div class="row">
	<div class="col-lg-6">
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="refresh_index_form" name="refresh_index_form" class="form-horizontal">
				<div class="panel">
					<h3>
						<i class="icon-fullscreen"></i> <?php echo smartyTranslate(array('s'=>'Indexing'),$_smarty_tpl);?>

					</h3>
					<div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'There is a huge quantity of data, so each connection corresponding to a referrer is indexed. You can also refresh this index by clicking the "Refresh index" button. This process may take a while, and it\'s only needed if you modified or added a referrer, or if you want changes to be retroactive.'),$_smarty_tpl);?>
</div>
					<button type="submit" class="btn btn-default" name="submitRefreshIndex" id="submitRefreshIndex">
						<i class="icon-refresh"></i> <?php echo smartyTranslate(array('s'=>'Refresh index'),$_smarty_tpl);?>

					</button>
				</div>
			</form>
		</div>
		<div class="col-lg-6">
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="refresh_cache_form" name="refresh_cache_form" class="form-horizontal">
				<div class="panel">
					<h3>
						<i class="icon-briefcase"></i> <?php echo smartyTranslate(array('s'=>'Cache'),$_smarty_tpl);?>

					</h3>
					<div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Your data is cached in order to sort it and filter it. You can refresh the cache by clicking on the "Refresh cache" button.'),$_smarty_tpl);?>
</div>
					<button type="submit" class="btn btn-default" name="submitRefreshCache" id="submitRefreshCache">
						<i class="icon-refresh"></i> <?php echo smartyTranslate(array('s'=>'Refresh cache'),$_smarty_tpl);?>

					</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div id="settings_referrers" class="row">
	<div class="col-lg-3">
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="settings_form" name="settings_form" class="form-horizontal">
			<div class="panel">
				<h3>
					<i class="icon-cog"></i> <?php echo smartyTranslate(array('s'=>'Settings'),$_smarty_tpl);?>

				</h3>
				<div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Direct traffic can be quite resource-intensive. You should consider enabling it only if you have a strong need for it.'),$_smarty_tpl);?>
</div>
				<div class="form-group">
					<label class="control-label col-lg-6"><?php echo smartyTranslate(array('s'=>'Save direct traffic?'),$_smarty_tpl);?>
</label>
					<div class="col-lg-6">
						<div class="row">
							<div class="input-group fixed-width-md">
								<span class="switch prestashop-switch">
									<input type="radio" name="tracking_dt" id="tracking_dt_on" value="1" <?php if ($_smarty_tpl->tpl_vars['tracking_dt']->value) {?>checked="checked"<?php }?> />
									<label class="t" for="tracking_dt_on">
										<?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>

									</label>
									<input type="radio" name="tracking_dt" id="tracking_dt_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['tracking_dt']->value) {?>checked="checked"<?php }?>  />
									<label class="t" for="tracking_dt_off">
										<?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>

									</label>
									<a class="slide-button btn"></a>
								</span>
							</div>
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-default" name="submitSettings" id="submitSettings">
					<i class="icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>

				</button>
			</div>
		</form>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['statsdata_name']->value) {?>
		<div class="col-lg-3">
			<div class="panel">
				<div class="alert alert-info">
					<?php echo smartyTranslate(array('s'=>"The module '%s' must be activated and configurated in order to have all the statistics",'sprintf'=>$_smarty_tpl->tpl_vars['statsdata_name']->value),$_smarty_tpl);?>

				</div>
			</div>
		</div>
	<?php }?>
	</div>


	
<?php }} ?>
