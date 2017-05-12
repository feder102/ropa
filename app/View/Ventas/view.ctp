<div class="ventas view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Venta'); ?></h1>
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
                            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Venta'), array('action' => 'edit', $venta['Venta']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Venta'), array('action' => 'delete', $venta['Venta']['id']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $venta['Venta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Ventas'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Venta'), array('action' => 'add'), array('escape' => false)); ?> </li>
                        </ul>
                    </div><!-- end body -->
                </div><!-- end panel -->
            </div><!-- end actions -->
        </div><!-- end col md 3 -->

        <div class="col-md-9">
            <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" class="table table-striped">
                    <tbody>
                        <tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($venta['Venta']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Importe Final'); ?></th>
		<td>
			<?php echo h($venta['Venta']['importe_final']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Deleted'); ?></th>
		<td>
			<?php echo h($venta['Venta']['deleted']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Cliente'); ?></th>
		<td>
			<?php echo h($venta['Venta']['id_cliente']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Vendedor'); ?></th>
		<td>
			<?php echo h($venta['Venta']['id_vendedor']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Tipo Venta'); ?></th>
		<td>
			<?php echo h($venta['Venta']['id_tipo_venta']); ?>
			&nbsp;
		</td>
</tr>
                    </tbody>
                </table>
            </div>
        </div><!-- end col md 9 -->
    </div>
</div>

