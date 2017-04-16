<div class="itemDevoluciones view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Item Devolucione'); ?></h1>
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
                            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Item Devolucione'), array('action' => 'edit', $itemDevolucione['ItemDevolucione']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Item Devolucione'), array('action' => 'delete', $itemDevolucione['ItemDevolucione']['id']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $itemDevolucione['ItemDevolucione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Item Devoluciones'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Item Devolucione'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($itemDevolucione['ItemDevolucione']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Item Venta'); ?></th>
		<td>
			<?php echo h($itemDevolucione['ItemDevolucione']['id_item_venta']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fecha'); ?></th>
		<td>
			<?php echo h($itemDevolucione['ItemDevolucione']['fecha']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cantidad'); ?></th>
		<td>
			<?php echo h($itemDevolucione['ItemDevolucione']['cantidad']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Deleted'); ?></th>
		<td>
			<?php echo h($itemDevolucione['ItemDevolucione']['deleted']); ?>
			&nbsp;
		</td>
</tr>
                    </tbody>
                </table>
            </div>
        </div><!-- end col md 9 -->
    </div>
</div>

