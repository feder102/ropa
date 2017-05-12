<?php
App::uses('AppController', 'Controller');
/**
 * PrendaLista Controller
 *
 * @property PrendaListum $PrendaListum
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PrendaListaController extends AppController {

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
        $this->set('prendaLista', $this->PrendaListum->find('all', array('recursive' => -1, $this->Paginator->paginate('PrendaListum'))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PrendaListum->exists($id)) {
			throw new NotFoundException(__('prenda listum no válido/a.'));
		}
		$options = array('conditions' => array('PrendaListum.' . $this->PrendaListum->primaryKey => $id));
		$this->set('prendaListum', $this->PrendaListum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PrendaListum->create();
			if ($this->PrendaListum->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La prenda listum ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la prenda listum no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->PrendaListum->exists($id)) {
			throw new NotFoundException(__('prenda listum no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PrendaListum->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La prenda listum ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La prenda listum no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('PrendaListum.' . $this->PrendaListum->primaryKey => $id));
			$this->request->data = $this->PrendaListum->find('first', $options);
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
		$this->PrendaListum->id = $id;
		if (!$this->PrendaListum->exists()) {
			throw new NotFoundException(__('prenda listum no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PrendaListum->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La prenda listum ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La prenda listum no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
