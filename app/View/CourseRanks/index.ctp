<div class="container">
	<h3>Course Ranks</h3><?php echo $this->Html->link(__('Add Course Ranks'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Rank</th>
			<th>Ranking Authority Code</th>
			<th>Rank Value</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($courseRanks as $courseRank) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $courseRank['CourseRank']['rank']; ?></td>
			<td><?php echo $courseRank['Ranking_authority']['ra_code']; ?></td>
			<td><?php echo $courseRank['CourseRank']['rank_value']; ?></td>
			<td><?php echo $courseRank['CourseRank']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'CourseRanks','action'=>'edit',$courseRank['CourseRank']['id']),array('class'=>'btn btn-success fa fa-trash-o'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'CourseRanks','action'=>'delete',$courseRank['CourseRank']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 







	






