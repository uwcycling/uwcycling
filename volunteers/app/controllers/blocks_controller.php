<?php
class BlocksController extends AppController {

	var $name = 'Blocks';
	var $helpers = array('Session', 'Html', 'Form', 'Time');

	function index() {
		$this->Block->recursive = 0;
		$this->set('blocks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'block'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('block', $this->Block->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Block->create();
			if ($this->Block->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'block'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'block'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'block'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Block->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'block'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'block'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Block->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'block'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Block->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Block'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Block'));
		$this->redirect(array('action' => 'index'));
	}
}
?>