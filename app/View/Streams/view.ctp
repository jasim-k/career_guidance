<div class="streams view">
<h2><?php echo __('Stream'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stream['Stream']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stream'); ?></dt>
		<dd>
			<?php echo h($stream['Stream']['stream']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($stream['Stream']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Stream'), array('action' => 'edit', $stream['Stream']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Stream'), array('action' => 'delete', $stream['Stream']['id']), array(), __('Are you sure you want to delete # %s?', $stream['Stream']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Streams'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stream'), array('action' => 'add')); ?> </li>
	</ul>
</div>
