<?php
App::uses('AppController', 'Controller');
/**
 * Talles Controller
 *
 * @property Talle $Talle
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TallesController extends AppController {

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
        $this->set('talles', $this->Talle->find('all', array('recursive' => -1, 'conditions' => array('Talle.deleted' => 0),
				$this->Paginator->paginate('Talle'))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Talle->exists($id)) {
			throw new NotFoundException(__('talle no válido/a.'));
		}
		$options = array('conditions' => array('Talle.' . $this->Talle->primaryKey => $id));
		$this->set('talle', $this->Talle->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Talle->create();
			if ($this->Talle->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La talle ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la talle no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Talle->exists($id)) {
			throw new NotFoundException(__('talle no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Talle->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La talle ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La talle no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('Talle.' . $this->Talle->primaryKey => $id));
			$this->request->data = $this->Talle->find('first', $options);
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
		$this->Talle->id = $id;
		if (!$this->Talle->exists()) {
			throw new NotFoundException(__('talle no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Talle->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La talle ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La talle no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
