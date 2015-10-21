<div class="container">
	<h3>Course Levels</h3><?php echo $this->Html->link(__('Add Course Levels'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Course Level</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($course_levels as $course_level) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $course_level['CourseLevel']['course_level']; ?></td>
			<td><?php echo $course_level['CourseLevel']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'CourseLevels','action'=>'edit',$course_level['CourseLevel']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'CourseLevels','action'=>'delete',$course_level['CourseLevel']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 


<!-- <div class="courseLevels index">
	<h2><?php echo __('Course Levels'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('course_level'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($courseLevels as $courseLevel): ?>
	<tr>
		<td><?php echo h($courseLevel['CourseLevel']['id']); ?>&nbsp;</td>
		<td><?php echo h($courseLevel['CourseLevel']['course_level']); ?>&nbsp;</td>
		<td><?php echo h($courseLevel['CourseLevel']['date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $courseLevel['CourseLevel']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $courseLevel['CourseLevel']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $courseLevel['CourseLevel']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $courseLevel['CourseLevel']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Course Level'), array('action' => 'add')); ?></li>
	</ul>
</div>
 -->