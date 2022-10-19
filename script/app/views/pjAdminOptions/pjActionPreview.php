<?php
if (isset($tpl['status']))
{
	$status = __('status', true);
	switch ($tpl['status'])
	{
		case 2:
			pjUtil::printNotice(NULL, $status[2]);
			break;
	}
} else {
	$titles = __('error_titles', true);
	$bodies = __('error_bodies', true);
	if (isset($_GET['err']))
	{
		pjUtil::printNotice(@$titles[$_GET['err']], @$bodies[$_GET['err']]);
	}
	
	pjUtil::printNotice(__('infoPreviewInstallTitle', true), __('infoPreviewInstallDesc', true), false, false)
	?>
	<div class="pj-loader-outer">
		<fieldset class="fieldset white">
			<legend><?php __('lblChooseTheme'); ?></legend>
			<div class="theme-holder">
				<?php include PJ_VIEWS_PATH . 'pjAdminOptions/elements/theme.php'; ?>
			</div>
		</fieldset>
		<fieldset class="fieldset white">
			<legend><?php __('lblInstallCode'); ?></legend>
			<br/>
			<form action="" method="get" class="pj-form form">
				<p>
					<textarea class="pj-form-field textarea_install" id="install_code" style="overflow: auto; height:100px; width: 695px;">&lt;link href="<?php echo PJ_INSTALL_URL.PJ_FRAMEWORK_LIBS_PATH . 'pj/css/'; ?>pj.bootstrap.min.css" type="text/css" rel="stylesheet" /&gt;
&lt;link href="<?php echo PJ_INSTALL_URL; ?>index.php?controller=pjFrontEnd&action=pjActionLoadCss" type="text/css" rel="stylesheet" /&gt;
&lt;script type="text/javascript" src="<?php echo PJ_INSTALL_URL; ?>index.php?controller=pjFrontEnd&action=pjActionLoad"&gt;&lt;/script&gt;</textarea>
				</p>
			</form>
		</fieldset>
	</div>
	<?php
}
?>