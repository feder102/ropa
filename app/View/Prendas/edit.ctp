<div class="prendas form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Prenda'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Acciones</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
							    							     <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $this->Form->value('Prenda.id')), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $this->Form->value('Prenda.id'))); ?></li>
							    								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Prendas'), array('action' => 'index'), array('escape' => false)); ?></li>
							    							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
            			<?php echo $this->Form->create('Prenda', array('role' => 'form')); ?>

            				<div class="form-group">
					<?php echo $this->Form->input('id', array('label' => 'id', 'class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('descripcion', array('label' => 'descripcion', 'class' => 'form-control', 'placeholder' => 'Descripcion'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('id_color', array('label' => 'id_color', 'class' => 'form-control', 'placeholder' => 'Id Color'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('id_talle', array('label' => 'id_talle', 'class' => 'form-control', 'placeholder' => 'Id Talle'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('stock', array('label' => 'stock', 'class' => 'form-control', 'placeholder' => 'Stock'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pcosto', array('label' => 'pcosto', 'class' => 'form-control', 'placeholder' => 'Pcosto'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('deleted', array('label' => 'deleted', 'class' => 'form-control', 'placeholder' => 'Deleted'));?>
				</div>
            				<div class="form-group">
					<?php echo $this->Form->submit(__('Guardar'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>

<script type="text/javascript">
    $("#fecha").datepicker({
        format: "dd/mm/yyyy",
        language: "es"
    });
    
    $(".clockpicker").clockpicker({
        autoclose: true
    });
</script>
