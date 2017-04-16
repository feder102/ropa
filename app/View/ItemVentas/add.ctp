<div class="itemVentas form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Item Venta'); ?></h1>
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
							    								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Item Ventas'), array('action' => 'index'), array('escape' => false)); ?></li>
							    							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
            			<?php echo $this->Form->create('ItemVenta', array('role' => 'form')); ?>

            				<div class="form-group">
					<?php echo $this->Form->input('id_venta', array('label' => 'id_venta', 'class' => 'form-control', 'placeholder' => 'Id Venta'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cantidad', array('label' => 'cantidad', 'class' => 'form-control', 'placeholder' => 'Cantidad'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('id_prenda', array('label' => 'id_prenda', 'class' => 'form-control', 'placeholder' => 'Id Prenda'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('deleted', array('label' => 'deleted', 'class' => 'form-control', 'placeholder' => 'Deleted'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('importe', array('label' => 'importe', 'class' => 'form-control', 'placeholder' => 'Importe'));?>
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
