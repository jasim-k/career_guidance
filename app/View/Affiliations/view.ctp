<div class="affiliations view">
<h2><?php echo __('Affiliation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($affiliation['Affiliation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ca Code'); ?></dt>
		<dd>
			<?php echo h($affiliation['Affiliation']['ca_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inst Code'); ?></dt>
		<dd>
			<?php echo h($affiliation['Affiliation']['inst_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($affiliation['Affiliation']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Affiliation'), array('action' => 'edit', $affiliation['Affiliation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Affiliation'), array('action' => 'delete', $affiliation['Affiliation']['id']), array(), __('Are you sure you want to delete # %s?', $affiliation['Affiliation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Affiliations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Affiliation'), array('action' => 'add')); ?> </li>
	</ul>
</div>
