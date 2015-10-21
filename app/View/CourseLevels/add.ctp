<div class="container">
	<h3>Add Course Level</h3>
	<form class="form" action="add" method="post">
		<div class="form-group">
			<label>Course Level:<span class="mandatory">*</span></label>
			<?php echo $this->Form->input('course_level',array('class'=>'form-control','label'=>false,'required'=>'required')); ?>
		</div>
		<?php echo $this->Form->submit('Add Course level',array('class'=>'btn btn-primary btn-lg')); ?>
	</form>
</div>




<!-- <div class="courseLevels form">
<?php echo $this->Form->create('CourseLevel'); ?>
	<fieldset>
		<legend><?php echo __('Add Course Level'); ?></legend>
	<?php
		echo $this->Form->input('course_level');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Course Levels'), array('action' => 'index')); ?></li>
	</ul>
</div>
 -->