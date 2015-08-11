<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cursos Controller
 *
 * @property \App\Model\Table\CursosTable $Cursos
 */
class CursosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('cursos', $this->paginate($this->Cursos));
        $this->set('_serialize', ['cursos']);
        $this->layout='default_1';
    }

    /**
     * View method
     *
     * @param string|null $id Curso id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $curso = $this->Cursos->get($id, [
            'contain' => []
        ]);
        $this->set('curso', $curso);
        $this->set('_serialize', ['curso']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $curso = $this->Cursos->newEntity();
        if ($this->request->is('post')) {
            $curso = $this->Cursos->patchEntity($curso, $this->request->data);
            if ($this->Cursos->save($curso)) {
                $this->Flash->success(__('The curso has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The curso could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('curso'));
        $this->set('_serialize', ['curso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Curso id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $curso = $this->Cursos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $curso = $this->Cursos->patchEntity($curso, $this->request->data);
            if ($this->Cursos->save($curso)) {
                $this->Flash->success(__('The curso has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The curso could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('curso'));
        $this->set('_serialize', ['curso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Curso id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $curso = $this->Cursos->get($id);
        if ($this->Cursos->delete($curso)) {
            $this->Flash->success(__('The curso has been deleted.'));
        } else {
            $this->Flash->error(__('The curso could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
