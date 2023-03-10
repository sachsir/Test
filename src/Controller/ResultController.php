<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Result Controller
 *
 * @property \App\Model\Table\ResultTable $Result
 * @method \App\Model\Entity\Result[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ResultController extends AppController
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
        $result = $this->paginate($this->Result);

        $this->set(compact('result'));
    }

    /**
     * View method
     *
     * @param string|null $id Result id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $result = $this->Result->get($id, [
            'contain' => ['Users', 'History', 'Test'],
        ]);

        $this->set(compact('result'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $result = $this->Result->newEmptyEntity();
        if ($this->request->is('post')) {
            $result = $this->Result->patchEntity($result, $this->request->getData());
            if ($this->Result->save($result)) {
                $this->Flash->success(__('The result has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The result could not be saved. Please, try again.'));
        }
        $users = $this->Result->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('result', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Result id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $result = $this->Result->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $result = $this->Result->patchEntity($result, $this->request->getData());
            if ($this->Result->save($result)) {
                $this->Flash->success(__('The result has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The result could not be saved. Please, try again.'));
        }
        $users = $this->Result->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('result', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Result id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $result = $this->Result->get($id);
        if ($this->Result->delete($result)) {
            $this->Flash->success(__('The result has been deleted.'));
        } else {
            $this->Flash->error(__('The result could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
