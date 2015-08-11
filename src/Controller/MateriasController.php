<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Materias Controller
 *
 * @property \App\Model\Table\MateriasTable $Materias
 */
class MateriasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('materias', $this->paginate($this->Materias));
        $this->set('_serialize', ['materias']);
    }

    /**
     * View method
     *
     * @param string|null $id Materia id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $materia = $this->Materias->get($id, [
            'contain' => []
        ]);
        $this->set('materia', $materia);
        $this->set('_serialize', ['materia']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $materia = $this->Materias->newEntity();
        if ($this->request->is('post')) {
            $materia = $this->Materias->patchEntity($materia, $this->request->data);
            if ($this->Materias->save($materia)) {
                $this->Flash->success(__('The materia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The materia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('materia'));
        $this->set('_serialize', ['materia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Materia id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $materia = $this->Materias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materia = $this->Materias->patchEntity($materia, $this->request->data);
            if ($this->Materias->save($materia)) {
                $this->Flash->success(__('The materia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The materia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('materia'));
        $this->set('_serialize', ['materia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Materia id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materia = $this->Materias->get($id);
        if ($this->Materias->delete($materia)) {
            $this->Flash->success(__('The materia has been deleted.'));
        } else {
            $this->Flash->error(__('The materia could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
