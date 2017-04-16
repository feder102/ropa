<div class="ventas form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Venta'); ?></h1>
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
							    							     <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $this->Form->value('Venta.id')), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $this->Form->value('Venta.id'))); ?></li>
							    								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Ventas'), array('action' => 'index'), array('escape' => false)); ?></li>
							    							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
            			<?php echo $this->Form->create('Venta', array('role' => 'form')); ?>

            				<div class="form-group">
					<?php echo $this->Form->input('id', array('label' => 'id', 'class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('importe_final', array('label' => 'importe_final', 'class' => 'form-control', 'placeholder' => 'Importe Final'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('deleted', array('label' => 'deleted', 'class' => 'form-control', 'placeholder' => 'Deleted'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('id_cliente', array('label' => 'id_cliente', 'class' => 'form-control', 'placeholder' => 'Id Cliente'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('id_vendedor', array('label' => 'id_vendedor', 'class' => 'form-control', 'placeholder' => 'Id Vendedor'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('id_tipo_venta', array('label' => 'id_tipo_venta', 'class' => 'form-control', 'placeholder' => 'Id Tipo Venta'));?>
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
