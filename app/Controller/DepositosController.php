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

/**
 * index method
 *
 * @return void
 */
	public function index() {
        $this->set('depositos', $this->Deposito->find('all', array('recursive' => -1, 'conditions' => array('Deposito.deleted' => 0),
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
	public function add() {
		if ($this->request->is('post')) {
			$this->Deposito->create();
			if ($this->Deposito->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La deposito ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la deposito no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
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
