<?php
App::uses('AppController', 'Controller');
/**
 * Listas Controller
 *
 * @property Lista $Lista
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ListasController extends AppController {

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
        $this->set('listas', $this->Lista->find('all', array('recursive' => -1, 'conditions' => array('Lista.deleted' => 0),
				$this->Paginator->paginate('Lista'))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lista->exists($id)) {
			throw new NotFoundException(__('lista no válido/a.'));
		}
		$options = array('conditions' => array('Lista.' . $this->Lista->primaryKey => $id));
		$this->set('lista', $this->Lista->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lista->create();
			if ($this->Lista->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La lista ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la lista no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Lista->exists($id)) {
			throw new NotFoundException(__('lista no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lista->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La lista ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La lista no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('Lista.' . $this->Lista->primaryKey => $id));
			$this->request->data = $this->Lista->find('first', $options);
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
		$this->Lista->id = $id;
		if (!$this->Lista->exists()) {
			throw new NotFoundException(__('lista no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Lista->saveField('deleted', 1)) {
            			$this->Session->setFlash(__('El/La lista ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La lista no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
