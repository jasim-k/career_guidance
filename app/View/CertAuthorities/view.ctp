<div class="certAuthorities view">
<h2><?php echo __('Cert Authority'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($certAuthority['CertAuthority']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ca Name'); ?></dt>
		<dd>
			<?php echo h($certAuthority['CertAuthority']['ca_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ca Type'); ?></dt>
		<dd>
			<?php echo h($certAuthority['CertAuthority']['ca_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ca Code'); ?></dt>
		<dd>
			<?php echo h($certAuthority['CertAuthority']['ca_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($certAuthority['CertAuthority']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($certAuthority['CertAuthority']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cert Authority'), array('action' => 'edit', $certAuthority['CertAuthority']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cert Authority'), array('action' => 'delete', $certAuthority['CertAuthority']['id']), array(), __('Are you sure you want to delete # %s?', $certAuthority['CertAuthority']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cert Authorities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cert Authority'), array('action' => 'add')); ?> </li>
	</ul>
</div>
