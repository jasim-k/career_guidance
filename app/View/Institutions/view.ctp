<div class="institutions view">
<h2><?php echo __('Institution'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inst Type'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['inst_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Institution'), array('action' => 'edit', $institution['Institution']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Institution'), array('action' => 'delete', $institution['Institution']['id']), array(), __('Are you sure you want to delete # %s?', $institution['Institution']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Institutions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institution'), array('action' => 'add')); ?> </li>
	</ul>
</div>
