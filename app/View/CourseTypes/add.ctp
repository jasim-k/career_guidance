<!-- <div class="courseTypes form">
<?php echo $this->Form->create('CourseType'); ?>
	<fieldset>
		<legend><?php echo __('Add Course Type'); ?></legend>
	<?php
		echo $this->Form->input('course_type');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Course Types'), array('action' => 'index')); ?></li>
	</ul>
</div>
 -->


 <div class="container">
	<h3>Add Course Type</h3>
	<form class="form" action="add" method="post">
		<div class="form-group">
			<label>Course Type:<span class="mandatory">*</span></label>
			<?php echo $this->Form->input('course_type',array('class'=>'form-control','label'=>false,'required'=>'required')); ?>
		</div>
		<?php echo $this->Form->submit('Add Course Type',array('class'=>'btn btn-primary btn-lg')); ?>
	</form>
</div>