<div class="clienteCuentas index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Cliente Cuentas'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Acciones</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Cliente Cuenta'), array('action' => 'add'), array('escape' => false)); ?></li>
						        							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
            <div class="table-responsive">
			    <table id="listado" class="dynamicTable table table-striped">
				    <thead>
					    <tr>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('dni_cliente'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('importe'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('deleted'); ?></th>
			                			                <th style="text-align: center" nowrap class="no_sorting sorting actions">Acciones</th>
					    </tr>
				    </thead>
				    <tbody>
			            	<?php foreach ($clienteCuentas as $clienteCuenta): ?>
					<tr>
						<td style="text-align: center" nowrap><?php echo h($clienteCuenta['ClienteCuenta']['dni_cliente']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($clienteCuenta['ClienteCuenta']['importe']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($clienteCuenta['ClienteCuenta']['deleted']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $clienteCuenta['ClienteCuenta']['dni_cliente']), array('title' => 'Ver', 'escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $clienteCuenta['ClienteCuenta']['dni_cliente']), array('title' => 'Editar', 'escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $clienteCuenta['ClienteCuenta']['dni_cliente']), array('title' => 'Eliminar', 'escape' => false), __('Está seguro que quiere eliminar # %s?', $clienteCuenta['ClienteCuenta']['dni_cliente'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				    </tbody>
			    </table>
            </div>
		</div> <!-- end col md 9 -->
	</div><!-- end row -->
</div><!-- end containing of content -->

<script>
    $(document).ready(function() {
        $('#listado').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bSort": true,
            "bInfo": false,
            "bAutoWidth": false
        });
    });
</script>
