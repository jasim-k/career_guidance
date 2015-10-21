   <?php //pr($cities); exit; ?>
   <div class="container">
	<h3>Add Cities</h3><?php  echo $this->Html->link(__('Add City'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>

	 <br>
<?php 
echo $this->Form->create(null, array(
    'url' => array('controller' => 'Cities', 'action' => 'search'),
    'type' => 'post',
    'inputDefaults' => array(
        'label' => false,
        'div' => false
    )


));

echo $this->Form->input(
    'Enter_Code',
    array('label' => 'Code', 'placeholder'=> 'Search...')
);

$options = array(
    'label' => 'Submit',
    'div' => array(
        'class' => 'glass-pill',
    )
);
 ?>




<div class="cities index">
	<h2><?php echo __('Cities'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-bordered border-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('#'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php if ($s_id!=10) {
	 $count=1; foreach ($cities as $city): ?>
	<tr>
		<td><?php echo $count; ?>&nbsp;</td>
		<td><?php echo h($city['City']['name']); ?>&nbsp;</td>
		<td>
			<?php echo h($city['State']['name']); ?>&nbsp;
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__(''), array('action' => 'edit', $city['City']['id']),array('class'=>'btn btn-success fa fa-pencil')); ?>
			<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $city['City']['id']),
			 array('class'=>'btn btn-danger fa fa-trash-o','confirm' => __('Are you sure you want to delete # %s?', $city['City']['id']))); ?>
		</td>
	</tr>
<?php $count++; endforeach; } ?>	<?php if ($s_id==10) {
	 $count=1; foreach ($cities as $city): ?>
	<tr>
		<td><?php echo $count; ?>&nbsp;</td>
		<td><?php echo h($city['Cities']['name']); ?>&nbsp;</td>
		<td>
			<?php echo h($city['States']['name']); ?>&nbsp;
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__(''), array('action' => 'edit', $city['Cities']['id']),array('class'=>'btn btn-success fa fa-pencil')); ?>
			<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $city['Cities']['id']),
			 array('class'=>'btn btn-danger fa fa-trash-o','confirm' => __('Are you sure you want to delete # %s?', $city['Cities']['id']))); ?>
		</td>
	</tr>
<?php $count++; endforeach; } ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New City'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
