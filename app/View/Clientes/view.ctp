<div class="clientes view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Cliente'); ?></h1>
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
                            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Cliente'), array('action' => 'edit', $cliente['Cliente']['dni']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Cliente'), array('action' => 'delete', $cliente['Cliente']['dni']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $cliente['Cliente']['dni'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Clientes'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Cliente'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
		<th><?php echo __('Dni'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['dni']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nombre'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['nombre']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Apellido'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['apellido']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Direccion'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['direccion']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Telefono'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['telefono']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Deleted'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['deleted']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['email']); ?>
			&nbsp;
		</td>
</tr>
                    </tbody>
                </table>
            </div>
        </div><!-- end col md 9 -->
    </div>
</div>

