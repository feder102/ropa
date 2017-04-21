<div class="itemPrendas view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Item Prenda'); ?></h1>
            </div>
        </div>
    </div>
<!-- bosteros putos-->
    <div class="row">
        <div class="col-md-3">
            <div class="actions">
                <div class="panel panel-default">
                    <div class="panel-heading">Acciones</div>
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Item Prenda'), array('action' => 'edit', $itemPrenda['ItemPrenda']['y']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Item Prenda'), array('action' => 'delete', $itemPrenda['ItemPrenda']['y']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $itemPrenda['ItemPrenda']['y'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Item Prendas'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Item Prenda'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
		<th><?php echo __('Id Prenda'); ?></th>
		<td>
			<?php echo h($itemPrenda['ItemPrenda']['id_prenda']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Color'); ?></th>
		<td>
			<?php echo h($itemPrenda['ItemPrenda']['id_color']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Talle'); ?></th>
		<td>
			<?php echo h($itemPrenda['ItemPrenda']['id_talle']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Stock'); ?></th>
		<td>
			<?php echo h($itemPrenda['ItemPrenda']['stock']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($itemPrenda['ItemPrenda']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Deleted'); ?></th>
		<td>
			<?php echo h($itemPrenda['ItemPrenda']['deleted']); ?>
			&nbsp;
		</td>
</tr>
                    </tbody>
                </table>
            </div>
        </div><!-- end col md 9 -->
    </div>
</div>
