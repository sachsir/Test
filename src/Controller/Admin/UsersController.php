<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;
use Cake\Mailer\Mailer;
use Cake\Mailer\TransportFactory;
class UsersController extends AppController
{
/**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

     public function beforeFilter(\Cake\Event\EventInterface $event)
     {
         parent::beforeFilter($event);
         // Configure the login action to not require authentication, preventing
         // the infinite redirect loop issue
          $this->Authentication->addUnauthenticatedActions(['login']);
          
        
     }
    public function initialize(): void
    {
    parent::initialize();
    $this->loadModel('Users');
    $this->loadModel('Course');
    $this->loadModel('CourseCategory');
    $this->loadModel('Questions');
    $this->loadModel('QuestionContent');
   
       
    }

    public function login()
    {
        

        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            // redirect to /articles after login success
            $user = $this->Authentication->getIdentity();
            // dd($user);
            if($user->status == 0){
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'users',
                'action' => 'admindashboard',
                'prefix' => 'Admin'
            ]);

            return $this->redirect($redirect);
        }else{
            $this->Flash->error(__('Invalid email or password'));
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Users', 'action' => 'login', 'prefix' => 'Admin']); 
        }
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid email or password'));
        }
    }
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }
    // public function logout()
    // {
    //     $result = $this->Authentication->getResult();
    //     if ($result->isValid()) {
    //         // $this->request->getSession()->delete('isAdmin');
            
    //         $this->Authentication->logout();
    //         return $this->redirect(['controller' => 'Users', 'action' => 'login', 'prefix' => 'Admin']);
    //     }
    // }

    public function logout()
{
    $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result && $result->isValid()) {
            $this->Authentication->logout();
             return $this->redirect(['controller' => 'Users', 'action' => 'login', 'prefix' => 'Admin']);
        }
}
    public function admindashboard(){
        $user = $this->Authentication->getIdentity();

        if($user){
            $result = true;
        }else {
            $result = false;
        }
    
        $users = $this->paginate($this->Users);
        $course = $this->paginate($this->Course);
        $coursecategory = $this->paginate($this->CourseCategory);
        $questions = $this->paginate($this->Questions);
        $questioncontent = $this->paginate($this->QuestionContent);

        $users = count($users);
        $course = count($course);
        $coursecategory = count($coursecategory);
        $questions = count($questions);
        $questioncontent = count($questioncontent);
        
        $this->set(compact('user','result','users','course','coursecategory','questions','questioncontent'));

        
    }
    public function usertestdetails(){

    }
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }
    public function userStatus($id = null, $status)
    {
        $this->request->allowMethod(['post']);
        $users = $this->Users->get($id);
        if ($status == 1)
            $users->status = 0;
        else
            $users->status = 1;
        
        if ($this->Users->save($users)) {
            // $mailer = new Mailer('default');
            //     $mailer->setTransport('gmail');
            //     $mailer->setFrom(['sachinsingh10101997@gmail.com' => 'Sachin']);
            //     $mailer->setTo('sachinsingh10101997@gmail.com');
            //     $mailer->setEmailFormat('html');
            //     $mailer->setSubject('Reset password link');
            $this->Flash->success(__('The user has been Status Changed.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    // public function edit($id = null)
    // {
    //     $user = $this->Users->get($id, [
    //         'contain' => ['UserProfile'],
    //     ]);
    //     if ($this->request->is(['patch', 'post', 'put'])) {
    //         $user = $this->Users->patchEntity($user, $this->request->getData());
    //         if ($this->Users->save($user)) {
    //             $this->Flash->success(__('The user has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The user could not be saved. Please, try again.'));
    //     }
    //     $this->set(compact('user'));
    // }

    // public function delete($id = null)
    // {
    //     $this->request->allowMethod(['post', 'delete']);
    //     $user = $this->Users->get($id);
    //     if ($this->Users->delete($user)) {
    //         $this->Flash->success(__('The user has been deleted.'));
    //     } else {
    //         $this->Flash->error(__('The user could not be deleted. Please, try again.'));
    //     }

    //     return $this->redirect(['action' => 'index']);
    // }

    
}
