	<div class="row">
		<div class="col-md-12">
			<h1><?php echo __('Admin Add City'); ?></h1>
		</div>
	</div>

			<?php echo $this->Form->create('City', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

