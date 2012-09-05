<div class="todos view">
<h2><?php  echo __('Todo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($todo['Todo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('List'); ?></dt>
		<dd>
			<?php echo h($todo['Todo']['list']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($todo['Todo']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Completed'); ?></dt>
		<dd>
			<?php echo h($todo['Todo']['completed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Due'); ?></dt>
		<dd>
			<?php echo h($todo['Todo']['due']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($todo['Todo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($todo['Todo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Todo'), array('action' => 'edit', $todo['Todo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Todo'), array('action' => 'delete', $todo['Todo']['id']), null, __('Are you sure you want to delete # %s?', $todo['Todo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Todos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Todo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
