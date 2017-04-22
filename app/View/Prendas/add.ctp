<?php
echo $this->Html->script('/js/chosen_v1.7.0/chosen.jquery');
 ?>
<div class="prendas form" data-ng-controller="addPrendaCtrl">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Prenda'); ?></h1>
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
							    								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Prendas'), array('action' => 'index'), array('escape' => false)); ?></li>
							    							</ul>
						</div>
					</div>
				</div>
		</div><!-- end col md 3 -->
		<div class="col-md-9">
            			<?php echo $this->Form->create('Prenda', array('role' => 'form')); ?>



				<div class="form-group">
					<?php echo $this->Form->input('descripcion', array('label' => 'descripcion', 'class' => 'form-control', 'placeholder' => 'Descripcion'));?>
				</div>
				<!-- <div class="form-group">
					<?php //echo $this->Form->input('id_color', array('label' => 'id_color', 'class' => 'form-control', 'placeholder' => 'Id Color'));?>
				</div> -->
				<!-- <div class="form-group">
					<?php //echo $this->Form->input('id_talle', array('label' => 'id_talle', 'class' => 'form-control', 'placeholder' => 'Id Talle'));?>
				</div> -->
				<div class="form-group">
					<?php echo $this->Form->input('stock', array('label' => 'stock', 'class' => 'form-control', 'placeholder' => 'Stock'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pcosto', array('label' => 'pcosto', 'class' => 'form-control', 'placeholder' => 'Pcosto'));?>
				</div>
				{{itemPrenda}}
				<div ng-repeat="item in itemPrenda">
					<?php //echo $this->Form->input('Color', array('label' => false, 'div' => false, 'class' => 'form-control fg-input', 'data-placeholder' => 'Ingresá las categorías aquí...', 'data-tag-select', 'data-ng-model' => 'Color', 'required')); ?>
					<select chosen data-ng-model="Color" style="width:500px" ng-repeat="c in Color">
		        <option value="{{c.id}}">{{c.nombre}}</option>
		      </select>
					<input type="text" placeholder="Ingrese color" ng-model="item.color">
	        <input ng-class="{'blockInput': !item.id_talle}" type="text" placeholder="Ingrese talle" ng-model="item.Talle">
	        <input type="text" placeholder="Ingrese cantidad" ng-model="item.stock">
	      </div>
	      <button type="button" ng-click="add()">New Item</button>
				{{Color}}
				<!-- <div class="form-group">
					< ?php echo $this->Form->input('deleted', array('label' => 'deleted', 'class' => 'form-control', 'placeholder' => 'Deleted'));?>
				</div> -->
            				<div class="form-group">
					<?php echo $this->Form->submit(__('Guardar'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>

<script type="text/javascript">

	miapp.controller('addPrendaCtrl', function($scope,$http,$timeout){
		// $scope.Place;
		$scope.colores = <?php echo json_encode($colores) ?>;
		$scope.Color = [];
		 console.log($scope.colores);
		$scope.colores.forEach(function(color){
						$scope.Color.push({
	            id: color.Colore.id,
	            nombre: color.Colore.nombre,
	      });
		})

		// if($scope.Color) {
		// 		$('#PrendaColor').chosen();
		// 		$.each($scope.Color, function(index, color) {
		// 				$('#PrendaColor').select_option(color);
		// 		});
		// }

		//Hacer timeout para ver el color en el imput
		console.log($scope.Color);
		$scope.talles = <?php echo json_encode($talles) ?>;
		$scope.fechaHoy = new Date(Date.now());
		$scope.itemPrenda = [{"ItemPrenda":{"id_prenda":"","id_color":"", "id_talle":"","stock":0,"created": $scope.fechaHoy}}];

		// console.log($scope.id_prenda);
		console.log($scope.Color);
		$scope.add = function (id_color,id_talle,stock) {
          $scope.itemPrenda.push({
						id_prenda: "",
            id_color: id_color,
            id_talle: id_talle,
            stock: stock,
						created:$scope.fechaHoy
      });

		};

	})

</script>
<script type="text/javascript">
    $("#fecha").datepicker({
        format: "dd/mm/yyyy",
        language: "es"
    });

    $(".clockpicker").clockpicker({
        autoclose: true
    });
</script>
