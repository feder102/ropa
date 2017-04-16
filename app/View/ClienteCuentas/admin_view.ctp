<div class="clienteCuentas view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Cliente Cuenta'); ?></h1>
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
                            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Cliente Cuenta'), array('action' => 'edit', $clienteCuenta['ClienteCuenta']['dni_cliente']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Cliente Cuenta'), array('action' => 'delete', $clienteCuenta['ClienteCuenta']['dni_cliente']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $clienteCuenta['ClienteCuenta']['dni_cliente'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Cliente Cuentas'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Cliente Cuenta'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
		<th><?php echo __('Dni Cliente'); ?></th>
		<td>
			<?php echo h($clienteCuenta['ClienteCuenta']['dni_cliente']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Importe'); ?></th>
		<td>
			<?php echo h($clienteCuenta['ClienteCuenta']['importe']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Deleted'); ?></th>
		<td>
			<?php echo h($clienteCuenta['ClienteCuenta']['deleted']); ?>
			&nbsp;
		</td>
</tr>
                    </tbody>
                </table>
            </div>
        </div><!-- end col md 9 -->
    </div>
</div>

