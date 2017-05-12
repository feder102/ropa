<div class="depositos index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Depositos'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Listar clientes'), array('action' => 'index','controller'=>'clientes'), array('escape' => false)); ?></li>
						        							</ul>
						</div>
				</div>
			</div>
		</div><!-- end col md 3 -->

		<div class="col-md-9">
            <div class="table-responsive">
			    <table id="listado" class="dynamicTable table table-striped">
				    <thead>
					    <tr>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('Dni cliente'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('importe'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('created'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('id'); ?></th>
			                			                <th style="text-align: center" nowrap class="no_sorting sorting actions">Acciones</th>
					    </tr>
				    </thead>
				    <tbody>
			            	<?php foreach ($depositos as $deposito): ?>
					<tr>
						<td style="text-align: center" nowrap><?php echo h($deposito['Deposito']['id_cuenta_clie']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($deposito['Deposito']['importe']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($deposito['Deposito']['created']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($deposito['Deposito']['id']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $deposito['Deposito']['id']), array('title' => 'Ver', 'escape' => false)); ?>
							<?php //echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $deposito['Deposito']['id_cuenta_clie']), array('title' => 'Editar', 'escape' => false)); ?>
							<?php //echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $deposito['Deposito']['id_cuenta_clie']), array('title' => 'Eliminar', 'escape' => false), __('Está seguro que quiere eliminar # %s?', $deposito['Deposito']['id'])); ?>
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
