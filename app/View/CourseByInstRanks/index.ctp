<div class="container">
	<h3>Course By Inst Ranks</h3><?php echo $this->Html->link(__('Add Course By Inst Ranks'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>CO Code</th>
			<th>Inst Code</th>
			<th>Rank Value</th>
			<th>RA Code</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($courseByInstRanks as $courseByInstRank) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $courseByInstRank['Course_by_ca']['co_code']; ?></td>
			<td><?php echo $courseByInstRank['Institution']['inst_code']; ?></td>
			<td><?php echo $courseByInstRank['CourseByInstRank']['rank_value']; ?></td>
			<td><?php echo $courseByInstRank['Ranking_authority']['ra_code']; ?></td>
			<td><?php echo $courseByInstRank['CourseByInstRank']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'CourseByInstRanks','action'=>'edit',$courseByInstRank['CourseByInstRank']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'CourseByInstRanks','action'=>'delete',$courseByInstRank['CourseByInstRank']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 







	






