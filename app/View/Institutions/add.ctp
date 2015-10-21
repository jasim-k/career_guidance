<div class="institutions form conatiner">
<?php echo $this->Form->create('Institution'); ?>
	<fieldset>
		<legend><?php echo __('Add Institution'); ?></legend>
	<?php
		echo $this->Form->input('name',array('class'=>'form-control'));
		echo $this->Form->input('inst_type',array('options'=>$inst_types,'empty'=>'-- select one --','class'=>'form-control'));
		?>
		<b>Country</b><br>
		<select name="country" class="countries form-control" id="countryId">
		<option value="">Select Country</option>
		</select>
		<b>State</b><br>
		<select name="state" class="states form-control" id="stateId">
		<option value="">Select State</option>
		</select>
		<b>City</b><br>
		<select name="city" class="cities form-control" id="cityId">
		<option value="">Select City</option>
		</select>
		 <?php
		echo $this->Form->input('code',array('class'=>'form-control'));
		echo $this->Form->input('address',array('class'=>'form-control','type' => 'textarea'));
		echo $this->Form->input('phone',array('class'=>'form-control'));
		echo $this->Form->input('fax',array('class'=>'form-control'));
		echo $this->Form->input('email',array('class'=>'form-control'));
		echo $this->Form->input('website',array('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>




<!-- <div class="institutions form">
<?php echo $this->Form->create('Institution'); ?>
	<fieldset>
		<legend><?php echo __('Add Institution'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('inst_type');
		echo $this->Form->input('city');
		echo $this->Form->input('code');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
		echo $this->Form->input('fax');
		echo $this->Form->input('email');
		echo $this->Form->input('website');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Institutions'), array('action' => 'index')); ?></li>
	</ul>
</div>
 -->