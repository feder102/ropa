<?php pr($colores); ?>
<div class="prendas form" ng-controller="addPrendaCtrl">

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
				<div class="form-group">
					<?php echo $this->Form->input('id_color', array('label' => 'id_color', 'class' => 'form-control', 'placeholder' => 'Id Color'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('id_talle', array('label' => 'id_talle', 'class' => 'form-control', 'placeholder' => 'Id Talle'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('stock', array('label' => 'stock', 'class' => 'form-control', 'placeholder' => 'Stock'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pcosto', array('label' => 'pcosto', 'class' => 'form-control', 'placeholder' => 'Pcosto'));?>
				</div>
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

	miapp.controller('addPrendaCtrl', function($scope,$http){
		// $scope.Place;
		$scope.resultados = [];
		$scope.bandImg = false;
        $scope.query = '';
        $scope.ImagesPlace = [];
        $scope.textSearch ="";
        $scope.bandera = [];
        $scope.filtro = [false,false,false,false,false,false,false,false,false];


		$scope.add = function(isValid) {
			//$scope.description = angular.element('#PlaceDescription').next().find('.note-editable.panel-body').html();
			if (isValid) {

				document.getElementById("Form").submit();

			 }

		}

		$scope.init = function(){
			for (var i = 0; i < 20; i++) {
				$scope.bandera[i] = false;
			}
		}

		// $scope.$watch('name',function(){
		// 	$scope.nameValid = "escribiendo";
		// })


  //       $scope.validatePlaceName = function(){
		// 	if ($scope.name){
		// 		$http.get("<?php //echo Router::url(array('controller' => 'places', 'action' => 'validateplacename')) ?>" + '/' + $scope.name)
		// 		.success(function(data, status, headers, config) {
		// 			if(data == 1){
		// 				$scope.nameValid = true;
		// 			}else $scope.nameValid = false;

		// 		}).error(function(data, status, headers, config) {
		// 			console.log("Ocurrió un error al validar el usuario");
		// 		});
		// 	}
		// }

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
