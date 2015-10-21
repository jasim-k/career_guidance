<?php //pr($location); exit; ?><div class="Institutions form">
<?php echo $this->Form->create('Institution'); ?>
	<fieldset>
		<legend><?php echo __('Edit Institution'); ?></legend>

	<?php
	// pr($location);
	 echo $location['Country']['Country'];
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('class'=>'form-control'));
		echo $this->Form->input('Inst_type.inst_type',array('options'=>$inst_types,'class'=>'form-control'));
		echo $this->Form->input('Country.Country', array(
                                      'type' => 'select',
                                      'class'=>"countries form-control",
                                      'id'=>"countryId",
                                      'options' => $countries,
                                     'value'=>$location['Country']['Country']
                                      //'selected' => 2 // suppose default select Kannada
                                  )
                  );
                   echo $this->Form->input('State.State', array(
                                      'type' => 'select',
                                      'class'=>"states form-control",
                                      'id'=>"stateId",
                                      'options' => $states,
                                     'value'=>$location['State']['State']
                                      //'selected' => 2 // suppose default select Kannada
                                  )
                  );
                  echo $this->Form->input('City.City',array('options'=>$cities,'id'=>"cityId",'type' => 'select','class'=>'cities form-control','value'=>$location['City']['City']));
                 
		echo $this->Form->input('code',array('class'=>'form-control'));

		echo $this->Form->input('address',array('class'=>'form-control'));
		echo $this->Form->input('phone',array('class'=>'form-control'));
		echo $this->Form->input('fax',array('class'=>'form-control'));
		echo $this->Form->input('email',array('class'=>'form-control'));
		echo $this->Form->input('website',array('class'=>'form-control'));
		
?>
                  

		<?php //pr($location); exit; ?>
			 <!-- <b>Country</b><br>
		<select name="country" class="countries form-control" id="countryId">
		<option value="<?php echo $location['Country']['Country'];?>" selected="<?php echo $location['Country']['Country'];?>">Select Country</option>
		</select>
		 <b>State</b><br>
		<select name="state" class="states form-control" id="stateId" >
		<option value="<?php echo $location['State']['State']; ?>">Select State</option>
		</select> 
		 <b>City</b><br>
		<select name="city" class="cities form-control" id="cityId" >
		<option value="<?php echo $location['City']['City']; ?>">Select City</option>
		</select>  -->
		<!-- echo $this->Form->input('city');
		echo $this->Form->input('date'); -->
	
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>







<!-- <div class="institutions form">
<?php echo $this->Form->create('Institution'); ?>
	<fieldset>
		<legend><?php echo __('Edit Institution'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Institution.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Institution.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Institutions'), array('action' => 'index')); ?></li>
	</ul>
</div> -->
