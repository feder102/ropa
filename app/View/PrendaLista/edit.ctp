<div class="prendaLista form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Prenda Listum'); ?></h1>
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
							    							     <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $this->Form->value('PrendaListum.id_lista')), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $this->Form->value('PrendaListum.id_lista'))); ?></li>
							    								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Prenda Lista'), array('action' => 'index'), array('escape' => false)); ?></li>
							    							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
            			<?php echo $this->Form->create('PrendaListum', array('role' => 'form')); ?>

            				<div class="form-group">
					<?php echo $this->Form->input('id_prenda', array('label' => 'id_prenda', 'class' => 'form-control', 'placeholder' => 'Id Prenda'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('id_lista', array('label' => 'id_lista', 'class' => 'form-control', 'placeholder' => 'Id Lista'));?>
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
