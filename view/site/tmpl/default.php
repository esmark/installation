<?php
defined('_JEXEC') or die;

//Пошаговая панель установки
echo JHtml::_('installation.stepbar'); ?>
	<h3><?php echo JText::_('INSTL_SITE'); ?></h3>
	<hr class="hr-condensed" />

   <div class="container bs-docs-container">
<!--
		<form action="index.php" method="post" id="languageForm" class="form-horizontal">
			<div class="control-group">
				<label for="jform_language" class="control-label"><?php echo JText::_('INSTL_SELECT_LANGUAGE_TITLE'); ?></label>
				<div class="controls">
					<?php echo $this->form->getInput('language'); ?>
				</div>
			</div>
			<input type="hidden" name="task" value="setlanguage" />
			<?php echo JHtml::_('form.token'); ?>
		</form>
//-->		
<form action="index.php" method="post" id="adminForm" class="form-validate form-horizontal">
	<div class="row-fluid">
		<div class="span6">
			<div class="control-group">
				<label for="jform_language" class="control-label"><?php echo JText::_('INSTL_SELECT_LANGUAGE_TITLE'); ?></label>
				<div class="control-label">
					<?php echo $this->form->getLabel('language'); ?>
				</div>
				<div class="controls">
					<?php echo $this->form->getInput('language'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('site_name'); ?>
				</div>
				<div class="controls">
					<?php echo $this->form->getInput('site_name'); ?>
					<p class="help-block"><?php echo JText::_('INSTL_SITE_NAME_DESC'); ?></p>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('site_template'); ?>
				</div>
				<div class="controls">
					<?php echo $this->form->getInput('site_template'); ?>
					<p class="help-block">
						<?php echo JText::_('INSTL_SITE_TEMPLATE_SELECT_LABEL'); ?>
					</p>
				</div>
			</div>
		</div>
		<div class="span6">
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('site_shop'); ?>
				</div>
				<div class="controls">
					<?php echo $this->form->getInput('site_shop'); ?>
					<p class="help-block">
						<?php echo JText::_('INSTL_SITE_SHOP_SELECT_LABEL'); ?>
					</p>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('vm_shipping'); ?>
				</div>
				<div class="controls">
					<?php echo $this->form->getInput('vm_shipping'); ?>
					<p class="help-block">
						<?php echo JText::_('INSTL_VM_SHIPPING_LABEL'); ?>
					</p>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('vm_payment'); ?>
				</div>
				<div class="controls">
					<?php echo $this->form->getInput('vm_payment'); ?>
					<p class="help-block">
						<?php echo JText::_('INSTL_VM_PAYMENT_LABEL'); ?>
					</p>
				</div>
			</div>
		</div>
	</div>

<?php
echo "<pre>";
print_r($this->form);
echo "</pre>";
?>

		</div>
	</div>

	<input type="hidden" name="task" value="site" />
	<?php echo JHtml::_('form.token'); ?>
</form>
	
		<div class="btn-toolbar">
			<div class="btn-group pull-right">
				<a href="#" class="btn btn-primary" onclick="Install.submitform();" rel="next" title="<?php echo JText::_('JNext'); ?>"><span class="icon-arrow-right icon-white"></span> <?php echo JText::_('JNext'); ?></a>
			</div>
		</div>
		
