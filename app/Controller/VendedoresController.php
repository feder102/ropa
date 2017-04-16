<?php
App::uses('AppController', 'Controller');
/**
 * Vendedores Controller
 *
 * @property Vendedore $Vendedore
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class VendedoresController extends AppController {

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
        $this->set('vendedores', $this->Vendedore->find('all', array('recursive' => -1, 'conditions' => array('Vendedore.deleted' => 0),
				$this->Paginator->paginate('Vendedore'))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Vendedore->exists($id)) {
			throw new NotFoundException(__('vendedore no válido/a.'));
		}
		$options = array('conditions' => array('Vendedore.' . $this->Vendedore->primaryKey => $id));
		$this->set('vendedore', $this->Vendedore->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vendedore->create();
			if ($this->Vendedore->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La vendedore ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la vendedore no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Vendedore->exists($id)) {
			throw new NotFoundException(__('vendedore no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Vendedore->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La vendedore ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La vendedore no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('Vendedore.' . $this->Vendedore->primaryKey => $id));
			$this->request->data = $this->Vendedore->find('first', $options);
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
		$this->Vendedore->id = $id;
		if (!$this->Vendedore->exists()) {
			throw new NotFoundException(__('vendedore no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Vendedore->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La vendedore ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La vendedore no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
