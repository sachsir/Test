<?php
declare(strict_types=1);

namespace App\Controller;

class QuestionsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('Course');
        $this->loadModel('QuestionContent');
         $this->loadComponent('flash');
       
    }
    
    public function index()
    {

        $questions = $this->paginate($this->Questions,[
            'contain' => ['Course','QuestionContent']
        ]);
        $this->set(compact('questions'));

    }

    public function view($id = null)
    {
        $question = $this->Questions->get($id, [
            'contain' => ['Test','Course'],
        ]);
        $this->set(compact('question'));
    }

  
    public function add()
    {
        $this->loadModel('Course');
        $this->loadModel('QuestionContent');
        $course = $this->paginate($this->Course);
        $content = $this->paginate($this->QuestionContent);
        $question = $this->Questions->newEmptyEntity();
        if ($this->request->is('post')) {
            $question = $this->Questions->patchEntity($question, $this->request->getData());
            if ($this->Questions->save($question)) {
                $this->Flash->success(__('The question has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question could not be saved. Please, try again.'));
        }
        $this->set(compact('question','course','content'));
    }

      
    public function getmodel(){

         $models = [];
        $id = $this->request->getData('id');
            if($id){
            $models =
                $this->QuestionContent->find()
                ->select(['course_id','id','text'])
                ->where(['course_id' => $id])->enableHydration(false)->toArray();
            $html = '';
            $html .= '<option value="">Please select</option>';
            // $html .= '<option value=$id>Please select</option>';
            foreach ($models as $key => $val) {
                $html .= '<option value="'.$val['id'].'">'.$val['text'].'</option>';               
            }
        
    }
        echo $html;
        exit();
}
        
   
    public function edit($id = null)
    {

        $this->loadModel('Course');
        $course = $this->paginate($this->Course);
        // $this->loadModel('QuestionContent');
        // $course = $this->paginate($this->QuestionContent);

        $question = $this->Questions->get($id, [
            'contain' => ['Course','QuestionContent'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $question = $this->Questions->patchEntity($question, $this->request->getData());
            if ($this->Questions->save($question)) {
                $this->Flash->success(__('The question has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question could not be saved. Please, try again.'));
        }
        $this->set(compact('question','course'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $question = $this->Questions->get($id);
        if ($this->Questions->delete($question)) {
            $this->Flash->success(__('The question has been deleted.'));
        } else {
            $this->Flash->error(__('The question could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public $paginate = ['limit'=> 50];
}
