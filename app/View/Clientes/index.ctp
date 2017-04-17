<?php //pr($clientes); ?>
<div class="clientes index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Clientes'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Cliente'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Ver depositos realizados'), array('action' => 'index','controller'=>'depositos'), array('escape' => false)); ?></li>
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
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('dni'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('nombre'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('apellido'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('direccion'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('telefono'); ?></th>
			                			                    <!-- <th style="text-align: center" nowrap><?php //echo $this->Paginator->sort('deleted'); ?></th> -->
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('email'); ?></th>
			                			                <th style="text-align: center" nowrap class="no_sorting sorting actions">Acciones</th>
					    </tr>
				    </thead>
				    <tbody>
			            	<?php foreach ($clientes as $cliente): ?>
					<tr>
						<td style="text-align: center" nowrap><?php echo h($cliente['Cliente']['dni']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($cliente['Cliente']['nombre']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($cliente['Cliente']['apellido']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($cliente['Cliente']['direccion']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($cliente['Cliente']['telefono']); ?>&nbsp;</td>
						<!-- <td style="text-align: center" nowrap><?php //echo h($cliente['Cliente']['deleted']); ?>&nbsp;</td> -->
						<td style="text-align: center" nowrap><?php echo h($cliente['Cliente']['email']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-usd"></span>', array('controller'=>'Depositos','action' => 'add', $cliente['Cliente']['dni']), array('title' => 'Depositar', 'escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $cliente['Cliente']['dni']), array('title' => 'Editar', 'escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $cliente['Cliente']['dni']), array('title' => 'Eliminar', 'escape' => false), __('Está seguro que quiere eliminar # %s?', $cliente['Cliente']['dni'])); ?>
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
