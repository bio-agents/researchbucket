<div class="organizations form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Organization'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Organization.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Organization.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Organizations'), array('action' => 'index'), array('escape' => false)); ?></li>
														</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Organization', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('acronym', array('class' => 'form-control', 'placeholder' => 'Acronym'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('web', array('class' => 'form-control', 'placeholder' => 'Web'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
