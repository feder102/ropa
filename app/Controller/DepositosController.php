<?php
App::uses('AppController', 'Controller');
/**
 * Depositos Controller
 *
 * @property Deposito $Deposito
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DepositosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	public $uses = array('Cliente', 'ClienteCuenta', 'Deposito' );
/**
 * index method
 *
 * @return void
 */
	public function index() {
        $this->set('depositos', $this->Deposito->find('all', array('recursive' => -1,
				$this->Paginator->paginate('Deposito'))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Deposito->exists($id)) {
			throw new NotFoundException(__('deposito no válido/a.'));
		}
		$options = array('conditions' => array('Deposito.' . $this->Deposito->primaryKey => $id));
		$this->set('deposito', $this->Deposito->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		if ($this->request->is('post')) {
			$this->Deposito->create();
			$this->request->data['Deposito']['id_cuenta_clie'] = $id;
			$this->request->data['Deposito']['created'] = date("d-m-Y G:i:s");
			// $cli_cue = $this->ClienteCuenta->find('first', array('conditions' => array('ClienteCuenta.dni_cliente' => $id)));
			$clie_cue = $this->ClienteCuenta->find('first', array('conditions' => array('ClienteCuenta.' . $this->ClienteCuenta->primaryKey => $id)));
// pr($clie_cue);
			$importe1 = $clie_cue['ClienteCuenta']['importe'];
			$importe2 = $this->request->data['Deposito']['importe'];
			$resul = $importe1 + $importe2;
			$clie_cue['ClienteCuenta']['importe'] =  $resul;

			// pr($cli_cue);
			// pr($clie_cue);
			if ($this->Deposito->saveAll($this->request->data)) {
				$this->ClienteCuenta->save($clie_cue['ClienteCuenta']);
            				$this->Session->setFlash(__('El/La deposito ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index','controller'=>'clientes'));
			} else {
				$this->Session->setFlash(__('El/la deposito no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		}else{
			$options = array('conditions' => array('ClienteCuenta.' . $this->ClienteCuenta->primaryKey => $id));
			$this->request->data = $this->ClienteCuenta->find('first', $options);
			// pr($this->request->data );
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Deposito->exists($id)) {
			throw new NotFoundException(__('deposito no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Deposito->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La deposito ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La deposito no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('Deposito.' . $this->Deposito->primaryKey => $id));
			$this->request->data = $this->Deposito->find('first', $options);
		}
        	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Deposito->id = $id;
		if (!$this->Deposito->exists()) {
			throw new NotFoundException(__('deposito no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Deposito->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La deposito ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La deposito no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
