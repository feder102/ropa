<div class="talles view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Talle'); ?></h1>
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
                            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Talle'), array('action' => 'edit', $talle['Talle']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Talle'), array('action' => 'delete', $talle['Talle']['id']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $talle['Talle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Talles'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Talle'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($talle['Talle']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nombre'); ?></th>
		<td>
			<?php echo h($talle['Talle']['nombre']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Deleted'); ?></th>
		<td>
			<?php echo h($talle['Talle']['deleted']); ?>
			&nbsp;
		</td>
</tr>
                    </tbody>
                </table>
            </div>
        </div><!-- end col md 9 -->
    </div>
</div>

