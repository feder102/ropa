<?php
App::uses('AppController', 'Controller');
/**
 * ItemDevoluciones Controller
 *
 * @property ItemDevolucione $ItemDevolucione
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ItemDevolucionesController extends AppController {

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
        $this->set('itemDevoluciones', $this->ItemDevolucione->find('all', array('recursive' => -1, 'conditions' => array('ItemDevolucione.deleted' => 0),
				$this->Paginator->paginate('ItemDevolucione'))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemDevolucione->exists($id)) {
			throw new NotFoundException(__('item devolucione no válido/a.'));
		}
		$options = array('conditions' => array('ItemDevolucione.' . $this->ItemDevolucione->primaryKey => $id));
		$this->set('itemDevolucione', $this->ItemDevolucione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemDevolucione->create();
			if ($this->ItemDevolucione->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La item devolucione ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la item devolucione no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->ItemDevolucione->exists($id)) {
			throw new NotFoundException(__('item devolucione no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemDevolucione->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La item devolucione ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La item devolucione no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('ItemDevolucione.' . $this->ItemDevolucione->primaryKey => $id));
			$this->request->data = $this->ItemDevolucione->find('first', $options);
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
		$this->ItemDevolucione->id = $id;
		if (!$this->ItemDevolucione->exists()) {
			throw new NotFoundException(__('item devolucione no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemDevolucione->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La item devolucione ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La item devolucione no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
