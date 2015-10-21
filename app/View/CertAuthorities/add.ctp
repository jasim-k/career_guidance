<div class="certAuthorities form conatiner">
<?php echo $this->Form->create('CertAuthority'); ?>
	<fieldset>
		<legend><?php echo __('Add Certify Authority'); ?></legend>
	<?php
		echo $this->Form->input('ca_name',array('class'=>'form-control'));
		echo $this->Form->input('ca_type',array('options'=>$ca_types,'empty'=>'-- select one --','class'=>'form-control'));
		// echo $this->Form->input('ca_type',array('class'=>'form-control'));
		echo $this->Form->input('ca_code',array('class'=>'form-control'));

		// echo $this->Form->input('city');
		// echo $this->Form->input('date');
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
	
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>


<!-- array('class'=>'btn btn-primary') -->
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cert Authorities'), array('action' => 'index')); ?></li>
	</ul>
</div> -->


