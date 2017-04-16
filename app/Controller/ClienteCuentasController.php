<?php
App::uses('AppController', 'Controller');
/**
 * ClienteCuentas Controller
 *
 * @property ClienteCuenta $ClienteCuenta
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ClienteCuentasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
        $this->set('clienteCuentas', $this->ClienteCuenta->find('all', array('recursive' => -1, 'conditions' => array('ClienteCuenta.deleted' => 0),
				$this->Paginator->paginate('ClienteCuenta'))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ClienteCuenta->exists($id)) {
			throw new NotFoundException(__('cliente cuenta no válido/a.'));
		}
		$options = array('conditions' => array('ClienteCuenta.' . $this->ClienteCuenta->primaryKey => $id));
		$this->set('clienteCuenta', $this->ClienteCuenta->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClienteCuenta->create();
			if ($this->ClienteCuenta->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La cliente cuenta ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la cliente cuenta no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
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
		if (!$this->ClienteCuenta->exists($id)) {
			throw new NotFoundException(__('cliente cuenta no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ClienteCuenta->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La cliente cuenta ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La cliente cuenta no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('ClienteCuenta.' . $this->ClienteCuenta->primaryKey => $id));
			$this->request->data = $this->ClienteCuenta->find('first', $options);
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
		$this->ClienteCuenta->id = $id;
		if (!$this->ClienteCuenta->exists()) {
			throw new NotFoundException(__('cliente cuenta no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ClienteCuenta->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La cliente cuenta ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La cliente cuenta no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
