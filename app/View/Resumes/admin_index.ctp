	<div class="row">
		<div class="col-md-12">
			<h1><?php echo __('Resumes'); ?></h1>
		</div><!-- end col md 12 -->
	</div><!-- end row -->


	<table cellpadding="0" cellspacing="0" class="table table-striped">
		<thead>
			<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('candidate_id'); ?></th>
		<th><?php echo $this->Paginator->sort('filename'); ?></th>
		<th><?php echo $this->Paginator->sort('mime_type'); ?></th>
		<th><?php echo $this->Paginator->sort('created'); ?></th>
		<th><?php echo $this->Paginator->sort('modified'); ?></th>
		<th class="actions"></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($resumes as $resume): ?>
					<tr>
						<td><?php echo h($resume['Resume']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($resume['Candidate']['email'], array('controller' => 'candidates', 'action' => 'view', $resume['Candidate']['id'])); ?>
		</td>
						<td><?php echo h($resume['Resume']['filename']); ?>&nbsp;</td>
						<td><?php echo h($resume['Resume']['mime_type']); ?>&nbsp;</td>
						<td><?php echo h($resume['Resume']['created']); ?>&nbsp;</td>
						<td><?php echo h($resume['Resume']['modified']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $resume['Resume']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $resume['Resume']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $resume['Resume']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $resume['Resume']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
		</tbody>
	</table>

	<p>
		<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
	</p>

	<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
	<ul class="pagination pagination-sm">
		<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
	</ul>
	<?php } ?>
