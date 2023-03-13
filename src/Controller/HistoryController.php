<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * History Controller
 *
 * @property \App\Model\Table\HistoryTable $History
 * @method \App\Model\Entity\History[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HistoryController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $history = $this->paginate($this->History);

        $this->set(compact('history'));
    }

    /**
     * View method
     *
     * @param string|null $id History id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $history = $this->History->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('history'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $history = $this->History->newEmptyEntity();
        if ($this->request->is('post')) {
            $history = $this->History->patchEntity($history, $this->request->getData());
            if ($this->History->save($history)) {
                $this->Flash->success(__('The history has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The history could not be saved. Please, try again.'));
        }
        $users = $this->History->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('history', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id History id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $history = $this->History->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $history = $this->History->patchEntity($history, $this->request->getData());
            if ($this->History->save($history)) {
                $this->Flash->success(__('The history has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The history could not be saved. Please, try again.'));
        }
        $users = $this->History->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('history', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id History id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $history = $this->History->get($id);
        if ($this->History->delete($history)) {
            $this->Flash->success(__('The history has been deleted.'));
        } else {
            $this->Flash->error(__('The history could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
