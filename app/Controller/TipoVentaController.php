<?php
App::uses('AppController', 'Controller');
/**
 * TipoVenta Controller
 *
 * @property TipoVentum $TipoVentum
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TipoVentaController extends AppController {

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
        $this->set('tipoVenta', $this->TipoVentum->find('all', array('recursive' => -1, 'conditions' => array('TipoVentum.deleted' => 0),
				$this->Paginator->paginate('TipoVentum'))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipoVentum->exists($id)) {
			throw new NotFoundException(__('tipo ventum no válido/a.'));
		}
		$options = array('conditions' => array('TipoVentum.' . $this->TipoVentum->primaryKey => $id));
		$this->set('tipoVentum', $this->TipoVentum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoVentum->create();
			if ($this->TipoVentum->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La tipo ventum ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la tipo ventum no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->TipoVentum->exists($id)) {
			throw new NotFoundException(__('tipo ventum no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoVentum->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La tipo ventum ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La tipo ventum no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('TipoVentum.' . $this->TipoVentum->primaryKey => $id));
			$this->request->data = $this->TipoVentum->find('first', $options);
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
		$this->TipoVentum->id = $id;
		if (!$this->TipoVentum->exists()) {
			throw new NotFoundException(__('tipo ventum no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TipoVentum->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La tipo ventum ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La tipo ventum no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
