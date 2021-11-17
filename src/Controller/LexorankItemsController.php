<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LexorankItems Controller
 *
 * @property \App\Model\Table\LexorankItemsTable $LexorankItems
 * @method \App\Model\Entity\LexorankItem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LexorankItemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $lexorankItems = $this->paginate($this->LexorankItems);

        $this->set(compact('lexorankItems'));
    }

    /**
     * View method
     *
     * @param string|null $id Lexorank Item id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lexorankItem = $this->LexorankItems->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('lexorankItem'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lexorankItem = $this->LexorankItems->newEmptyEntity();
        if ($this->request->is('post')) {
            $lexorankItem = $this->LexorankItems->patchEntity($lexorankItem, $this->request->getData());
            if ($this->LexorankItems->save($lexorankItem)) {
                $this->Flash->success(__('The lexorank item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lexorank item could not be saved. Please, try again.'));
        }
        $this->set(compact('lexorankItem'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lexorank Item id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lexorankItem = $this->LexorankItems->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lexorankItem = $this->LexorankItems->patchEntity($lexorankItem, $this->request->getData());
            if ($this->LexorankItems->save($lexorankItem)) {
                $this->Flash->success(__('The lexorank item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lexorank item could not be saved. Please, try again.'));
        }
        $this->set(compact('lexorankItem'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lexorank Item id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lexorankItem = $this->LexorankItems->get($id);
        if ($this->LexorankItems->delete($lexorankItem)) {
            $this->Flash->success(__('The lexorank item has been deleted.'));
        } else {
            $this->Flash->error(__('The lexorank item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
