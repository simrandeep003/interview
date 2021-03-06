<div class="row">
  <div class="col-md-12">
    <h1><?php echo __('Feedbacks'); ?></h1>
  </div><!-- end col md 12 -->
</div><!-- end row -->

<table cellpadding="0" cellspacing="0" class="table table-striped">
  <thead>
    <tr>
      <th><?php echo $this->Paginator->sort('id'); ?></th>
      <th><?php echo $this->Paginator->sort('Interview.candidate_id'); ?></th>
      <th><?php echo $this->Paginator->sort('user_id'); ?></th>
      <th><?php echo $this->Paginator->sort('score'); ?></th>
      <th><?php echo $this->Paginator->sort('technical_score'); ?></th>
      <th><?php echo $this->Paginator->sort('personality_score'); ?></th>
      <th><?php echo $this->Paginator->sort('status'); ?></th>
      <th><?php echo $this->Paginator->sort('created', 'Added'); ?></th>
      <th><?php echo $this->Paginator->sort('modified', 'Edited'); ?></th>
      <th class="actions"></th>
    </tr>
  </thead>
  <tbody>
    <?php if ( ! empty($feedback)): ?>
      <?php foreach ($feedback as $feedback): ?>
        <tr>
          <td><?php echo h($feedback['Feedback']['id']); ?>&nbsp;</td>
          <td>
            <?php echo $this->Html->link($feedback['Interview']['Candidate']['email'], array('controller' => 'candidates', 'action' => 'view', $feedback['Interview']['Candidate']['id'])); ?>
          </td>
          <td>
            <?php echo $this->Html->link($feedback['User']['email'], array('controller' => 'users', 'action' => 'view', $feedback['User']['id'])); ?>
          </td>
          <td><?php echo h($feedback['Feedback']['score']); ?>&nbsp;</td>
          <td><?php echo h($feedback['Feedback']['technical_score']); ?>&nbsp;</td>
          <td><?php echo h($feedback['Feedback']['personality_score']); ?>&nbsp;</td>
          <td><?php echo h(InterviewStatus::stringValue($feedback['Feedback']['status'])); ?>&nbsp;</td>
          <td><?php echo h($feedback['Feedback']['created']); ?>&nbsp;</td>
          <td><?php echo h($feedback['Feedback']['modified']); ?>&nbsp;</td>
          <td class="actions">
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $feedback['Feedback']['id']), array('escape' => false)); ?>
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $feedback['Feedback']['id']), array('escape' => false)); ?>
            <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $feedback['Feedback']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $feedback['Feedback']['id'])); ?>
          </td>
        </tr>
      <?php endforeach; ?>
    <?php endif; ?>
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
