<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * QuestionContent Controller
 *
 * @property \App\Model\Table\QuestionContentTable $QuestionContent
 * @method \App\Model\Entity\QuestionContent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuestionContentController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $questionContent = $this->paginate($this->QuestionContent);

        $this->set(compact('questionContent'));
    }

    /**
     * View method
     *
     * @param string|null $id Question Content id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questionContent = $this->QuestionContent->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('questionContent'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $this->loadModel('Course');
        $course = $this->paginate($this->Course);
       
        $questionContent = $this->QuestionContent->newEmptyEntity();
        if ($this->request->is('post')) {
            $questionContent = $this->QuestionContent->patchEntity($questionContent, $this->request->getData());
            if ($this->QuestionContent->save($questionContent)) {
                $this->Flash->success(__('The question content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question content could not be saved. Please, try again.'));
        }
        $this->set(compact('questionContent','course'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Question Content id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questionContent = $this->QuestionContent->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questionContent = $this->QuestionContent->patchEntity($questionContent, $this->request->getData());
            if ($this->QuestionContent->save($questionContent)) {
                $this->Flash->success(__('The question content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question content could not be saved. Please, try again.'));
        }
        $this->set(compact('questionContent'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Question Content id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questionContent = $this->QuestionContent->get($id);
        if ($this->QuestionContent->delete($questionContent)) {
            $this->Flash->success(__('The question content has been deleted.'));
        } else {
            $this->Flash->error(__('The question content could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
