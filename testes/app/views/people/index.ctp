<p>
	<?php echo $this->Html->link('Incluir', array('action' => 'add')); ?>
</p>
<ul>
	<?php foreach($people as $person): ?>
		<li>
			<?php echo $this->Html->link($person['Person']['name'], array(
				'action' => 'edit',
				$person['Person']['id']
			)); ?>: 
			<?php echo implode(', ', Set::extract('/name', $person['Cars'])); ?>
		</li>
	<?php endforeach; ?>
</ul>