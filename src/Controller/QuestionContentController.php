<?php
declare(strict_types=1);

namespace App\Controller;

class QuestionContentController extends AppController
{
   
    public function index()
    {
        $questionContent = $this->paginate($this->QuestionContent);

        $this->set(compact('questionContent'));
    }

    public function view($id = null)
    {
        $this->loadModel('Course');
        $course = $this->paginate($this->Course);
        // dd($course);

        $questionContent = $this->QuestionContent->get($id, [
            'contain' => ['Course']
        ]);

        $this->set(compact('questionContent','course'));
        
    }

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

    public function edit($id = null)
    {
        $this->loadModel('Course');
        $course = $this->paginate($this->Course);

        $questionContent = $this->QuestionContent->get($id, [
            'contain' => ['Course']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questionContent = $this->QuestionContent->patchEntity($questionContent, $this->request->getData());
            if ($this->QuestionContent->save($questionContent)) {
                $this->Flash->success(__('The question content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question content could not be saved. Please, try again.'));
        }
        $this->set(compact('questionContent','course'));
    }
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
