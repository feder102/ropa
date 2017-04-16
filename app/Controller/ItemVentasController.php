<?php
App::uses('AppController', 'Controller');
/**
 * ItemVentas Controller
 *
 * @property ItemVenta $ItemVenta
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ItemVentasController extends AppController {

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
        $this->set('itemVentas', $this->ItemVenta->find('all', array('recursive' => -1, 'conditions' => array('ItemVenta.deleted' => 0),
				$this->Paginator->paginate('ItemVenta'))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemVenta->exists($id)) {
			throw new NotFoundException(__('item venta no válido/a.'));
		}
		$options = array('conditions' => array('ItemVenta.' . $this->ItemVenta->primaryKey => $id));
		$this->set('itemVenta', $this->ItemVenta->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemVenta->create();
			if ($this->ItemVenta->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La item venta ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la item venta no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->ItemVenta->exists($id)) {
			throw new NotFoundException(__('item venta no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemVenta->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La item venta ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La item venta no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('ItemVenta.' . $this->ItemVenta->primaryKey => $id));
			$this->request->data = $this->ItemVenta->find('first', $options);
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
		$this->ItemVenta->id = $id;
		if (!$this->ItemVenta->exists()) {
			throw new NotFoundException(__('item venta no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemVenta->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La item venta ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La item venta no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
