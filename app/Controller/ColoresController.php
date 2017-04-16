<?php
App::uses('AppController', 'Controller');
/**
 * Colores Controller
 *
 * @property Colore $Colore
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ColoresController extends AppController {

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
        $this->set('colores', $this->Colore->find('all', array('recursive' => -1, 'conditions' => array('Colore.deleted' => 0),
				$this->Paginator->paginate('Colore'))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Colore->exists($id)) {
			throw new NotFoundException(__('colore no válido/a.'));
		}
		$options = array('conditions' => array('Colore.' . $this->Colore->primaryKey => $id));
		$this->set('colore', $this->Colore->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Colore->create();
			if ($this->Colore->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La colore ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la colore no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Colore->exists($id)) {
			throw new NotFoundException(__('colore no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Colore->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La colore ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La colore no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('Colore.' . $this->Colore->primaryKey => $id));
			$this->request->data = $this->Colore->find('first', $options);
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
		$this->Colore->id = $id;
		if (!$this->Colore->exists()) {
			throw new NotFoundException(__('colore no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Colore->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La colore ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La colore no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
