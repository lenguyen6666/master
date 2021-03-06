<?php echo $this->Html->css("admin");?>

<div class="filemanager form">
	<h2><?php echo $title_for_layout; ?></h2>

	<div class="breadcrumb">
	<?php
		__('You are here:');

		$breadcrumb = $this->Filemanager->breadcrumb($path);
		foreach($breadcrumb AS $pathname => $p) {
			echo $this->Filemanager->linkDirectory($pathname, $p);
			echo DS;
		}
	?>
	</div>

	<?php
		echo $this->Form->create('Filemanager', array(
			'type' => 'file',
			'url' => $this->Html->url(array(
				'controller' => 'filemanager',
				'action' => 'upload',
			), true) . '?path=' . urlencode($path),
		));
	?>
	<fieldset>
	<?php echo $this->Form->input('Filemanager.file', array('type' => 'file')); ?>
	</fieldset>

	<div class="buttons">
	<?php
		echo $this->Form->end(__('Upload', true));
		echo $this->Html->link(__('Cancel', true), array(
			'action' => 'index',
		), array(
			'class' => 'cancel',
		));
	?>
	</div>
</div>