<div class="listas index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Listas'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Lista'), array('action' => 'add'), array('escape' => false)); ?></li>
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
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('nombre'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('porcentaje'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('deleted'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('id'); ?></th>
			                			                <th style="text-align: center" nowrap class="no_sorting sorting actions">Acciones</th>
					    </tr>
				    </thead>
				    <tbody>
			            	<?php foreach ($listas as $lista): ?>
					<tr>
						<td style="text-align: center" nowrap><?php echo h($lista['Lista']['nombre']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($lista['Lista']['porcentaje']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($lista['Lista']['deleted']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($lista['Lista']['id']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $lista['Lista']['id']), array('title' => 'Ver', 'escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $lista['Lista']['id']), array('title' => 'Editar', 'escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $lista['Lista']['id']), array('title' => 'Eliminar', 'escape' => false), __('Está seguro que quiere eliminar # %s?', $lista['Lista']['id'])); ?>
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
