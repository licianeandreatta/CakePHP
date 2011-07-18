<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>Testes!</title>
		<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('main'));
		echo $scripts_for_layout;
		?>
	</head>
	<body>
		<div id="header">
			Header
		</div>
		<div id="content">
			<?php echo $content_for_layout; ?>
		</div>
		<div id="footer">
			Footer
		</div>
		<?php echo $this->element('sql_dump'); ?>
	</body>
</html>