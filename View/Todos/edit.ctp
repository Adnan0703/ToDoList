<?php
	$due = date('Y/m/d', strtotime($this->data['Todo']['due']));
?>
<div class="todos form">
<?php echo $this->Form->create('Todo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Todo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('list');
		echo $this->Form->input('note');
		echo $this->Form->input('completed');
		//echo $this->Form->input('due');
	?>
		<div class="input">
			<label for="data[Todo][due]">Due On</label>
			<input name="data[Todo][due]" type="text" class="datetime" value="<?php echo $due ?>" />
		</div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Todo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Todo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Todos'), array('action' => 'index')); ?></li>
	</ul>
</div>
