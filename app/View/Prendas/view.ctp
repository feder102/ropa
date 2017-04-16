<div class="prendas view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Prenda'); ?></h1>
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
                            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Prenda'), array('action' => 'edit', $prenda['Prenda']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Prenda'), array('action' => 'delete', $prenda['Prenda']['id']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $prenda['Prenda']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Prendas'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Prenda'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($prenda['Prenda']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Descripcion'); ?></th>
		<td>
			<?php echo h($prenda['Prenda']['descripcion']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Color'); ?></th>
		<td>
			<?php echo h($prenda['Prenda']['id_color']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Talle'); ?></th>
		<td>
			<?php echo h($prenda['Prenda']['id_talle']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Stock'); ?></th>
		<td>
			<?php echo h($prenda['Prenda']['stock']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pcosto'); ?></th>
		<td>
			<?php echo h($prenda['Prenda']['pcosto']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Deleted'); ?></th>
		<td>
			<?php echo h($prenda['Prenda']['deleted']); ?>
			&nbsp;
		</td>
</tr>
                    </tbody>
                </table>
            </div>
        </div><!-- end col md 9 -->
    </div>
</div>

