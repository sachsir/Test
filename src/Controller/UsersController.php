<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;
use Cake\Mailer\Mailer;
use Cake\Mailer\TransportFactory;
use Cake\View\View;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('Questions');
        $this->loadModel('QuestionContent');
        $this->loadModel('Course');
        $this->loadModel('CourseCategory');
        $this->loadModel('Test');
        $this->loadModel('Result');
        $this->Model = $this->loadModel('Countries');
        $this->Model = $this->loadModel('States');
        $this->Model = $this->loadModel('Cities');
        $this->viewBuilder()->setLayout('main');

    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
       
        $users = $this->paginate($this->Users);
        $countries = $this->Countries->find('list', ['limit' => 200])->toArray();
        $states = $this->States->find('list', ['limit' => 200])->toArray();
        $cities = $this->Cities->find('list', ['limit' => 200])->toArray();
 
        $this->set(compact('users', 'countries','states','cities'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        $countries = $this->Countries->find('list', ['limit' => 200])->toArray();
        $states = $this->States->find('list', ['limit' => 200])->toArray();
        $cities = $this->Cities->find('list', ['limit' => 200])->toArray();
 
        $this->set(compact('user', 'countries','states','cities'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        $countries = $this->Countries->find('list')->all();
        // dd($countries);
        if ($this->request->is('post')) {
            // $email = $this->request->getData('email');
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $token = rand(10000, 100000);
            $user->token = $token;
            if ($this->Users->save($user)) {

                $mailer = new Mailer('default');
                $mailer->setTransport('gmail');
                $mailer->setFrom(['sachinsingh10101997@gmail.com' => 'Sachin']);
                $mailer->setTo('sachinsingh10101997@gmail.com');
                $mailer->setEmailFormat('html');
                $mailer->setSubject('Reset password link');
                $mailer->deliver('<a href="http://localhost:8765/users/approve?token=' . $token . '">Click here</a> for reset your password');
                
                $this->Flash->success(__('The user has been saved.'));
                
                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user', 'countries'));
    
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
            $this->Flash->success(__('The user has been Status Changed.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $users = $this->Authentication->getIdentity();

        if($users){
            $result = true;
        }else {
            $result = false;
        }
        $this->set(compact('users'));

        
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Profile has been edited.'));

                return $this->redirect(['action' => 'adminprofile']);
            }
            $this->Flash->error(__('Unable to edit Profile. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function useredit($id = null)
    {
        $users = $this->Authentication->getIdentity();

        if($users){
            $result = true;
        }else {
            $result = false;
        }
        $this->set(compact('users'));

        
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Profile has been edited.'));

                return $this->redirect(['action' => 'profile']);
            }
            $this->Flash->error(__('Unable to edit Profile. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

   
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        // $this->Authentication->addUnauthenticatedActions(['login']);
        $this->Authentication->addUnauthenticatedActions(['login', 'forgot', 'reset', 'add', 'approve', 'getStates','getCity']);
    }




public function login()
{
    $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result && $result->isValid()) {
            // redirect to /articles after login success
            $result = $this->Authentication->getIdentity();
            if ($result->status == 1) {
                $redirect = $this->request->getQuery('redirect', [
                    'controller' => 'Users',
                    'action' => 'dashboard',
                ]);
            } else {
                $this->Flash->error(__('Your account is pending to approve!'));
                $redirect = $this->request->getQuery('redirect', [
                    'controller' => 'Users',
                    'action' => 'logout',
                ]);
            }
            return $this->redirect($redirect);
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid username or password'));
        }
    
}
public function logout()
{
    $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result && $result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }
}
    public function home(){

    }

    public function studentlogin(){
        
    }
    public function register(){

    }

    public function listing(){

    }
    public function courseview($id = null){
        
        $this->loadModel('CourseCategory');
        // $course = $this->paginate($this->Course, ['contain'=>['CourseCategory']]);
        $course = $this->Course->get($id, [
            'contain' => ['CourseCategory'],
        ]);

        // $this->set(compact('course'));

        $this->set(compact('course'));
    }
   
    public function coursehistory(){
        $user = $this->Authentication->getIdentity();

        $course = $this->Test->find('all')->distinct('result_id')->contain('Questions.Course')->where(['user_id' => $user->id])->all();
    
        $arraycourse =array();
        foreach($course as $courses){
            $arraycourse[] =+ $courses->question->course->id;
        
        }
        $uniquearray = array_unique($arraycourse);
        

        $course = $this->Course->find('all')->contain('CourseCategory')->where(['Course.id IN' => $uniquearray])->all();
    
        
        $this->set(compact('course'));

    }
    public function courselist(){

        $course = $this->paginate($this->Course, ['contain'=>['CourseCategory']]);
        // dd($course);
        $this->set(compact('course'));
    }

    public function testdetails($id = null){
        
        $user = $this->Authentication->getIdentity();

        $result = $this->Test->find('all')->distinct('result_id')->contain(['Result','Questions.Course'=>function($q)use ($id){ return $q->where(['Course.id'=>$id]);}])->where(['Test.user_id'=>$user->id])->all();
        $this->set(compact('result'));
    }
   

    public function quiztest($id = null){
     
        // $questions = $this->paginate($this->Questions);
        $user = $this->Authentication->getIdentity();
        

        $questions = $this->Questions->find('all')->contain('QuestionContent')->where(['Questions.course_id' => $id])->all();


        if ($this->request->is('post')) {

            $result = $this->Result->newEmptyEntity();
            $result->user_id = $user->id;
            if ($this->Result->save($result)) {

                $data = $this->request->getData();
            // dd($data);
            foreach($data as $x => $y){
                $test = $this->Test->newEmptyEntity();
                $test->question_id = $x;
                $test->user_id = $user->id;
                $test->selected_option = $y;
                $test->result_id = $result->id;
                $this->Test->save($test);
            }
            $question = $this->Test->find('all')->contain('Questions')->where(['Test.result_id' => $result->id])->all();
            $j = count($question);
            $i = 0;
            foreach($question as $tests){
                if($tests->selected_option == $tests->question->answer){
                    $i++;
                }
            }
            $results = $this->Result->get($result->id, [
                'contain' => [],
            ]);
            $results->total_questions = $j;
            $results->right_answers = $i;
            if ($this->Result->save($results)) {
                return $this->redirect(['controller' => 'Users', 'action' => 'resultview',$result->id]);

            }

            }
       
            
        }

    //    dd($questions);

        $this->set(compact('questions'));

    }
    
    public function about(){
        
    }
    public function resultview($id = null){

        $result = $this->Result->get($id, [
            'contain' => ['Users', 'History', 'Test'],
        ]);

        $this->set(compact('result'));
    }
    public function admindashboard(){
        $user = $this->Authentication->getIdentity();

        if($user){
            $result = true;
        }else {
            $result = false;
        }
    
    
        $users = $this->paginate($this->Users);
        $this->set(compact('users','result','user'));

        
    }
    public function course(){
        
    }

    public function getStates()
    {
        $country_id = $this->request->getData('country_id');

        $states = $this->States->find('list')->
        where(['country_id' => $country_id])->all();

        $this->autoRender = false;
        $this->response->withType('application/json');
        echo json_encode($states);
    }
    public function getCity()
    {
        $state_id = $this->request->getData('state_id');

        $cities = $this->Cities->find('list')->
        where(['state_id' => $state_id])->all();

        $this->autoRender = false;
        $this->response->withType('application/json');
        echo json_encode($cities);
    }

    public function contact(){


    }
    public function userforgot(){
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $email = $this->request->getData('email');
            $users = TableRegistry::get("Users");
            $user = $users->find('all')->where(['email' => $email])->first();
            if ($user) {
                $token = rand(10000, 100000);
                $user->token = $token;
                if ($users->save($user)) {
                    $mailer = new Mailer('default');
                    $mailer->setTransport('gmail');
                    $mailer->setFrom(['sachinsingh10101997@gmail.com' => 'Sachin']);
                    $mailer->setTo($email);
                    $mailer->setEmailFormat('html');
                    $mailer->setSubject('Reset password link');
                    $mailer->deliver('<a href="http://localhost:8765/users/userreset?token=' . $token . '">Click here</a> for reset your password');

                    $this->Flash->success(__('Password reset link has been sent on your registered Email'));
                }
            } else {
                $this->Flash->error(__('Please enter valid credential..'));
            }
        }
        $this->set(compact('user'));

    }
    public function userreset(){


    }
    public function adminlogin(){


    }
    public function adminprofile(){
        $users = $this->Authentication->getIdentity();

        if($users){
            $result = true;
        }else {
            $result = false;
        }
        $this->set(compact('users'));

    }
    public function dashboard(){
        $user = $this->Authentication->getIdentity();

        if($user){
            $result = true;
        }else {
            $result = false;
        }
    
    
        $users = $this->paginate($this->Users);
        $this->set(compact('users','result','user'));

        $course = $this->paginate($this->Course, ['contain'=>['CourseCategory']]);
        $course = count($course);
        $this->set(compact('course'));

    }
    public function profile(){
    
        $user = $this->Authentication->getIdentity();

    if($user){
        $result = true;
    }else {
        $result = false;
    }


    $users = $this->paginate($this->Users);
    $this->set(compact('users','result','user'));
    
    }
   


    public function forgot()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $email = $this->request->getData('email');
            $users = TableRegistry::get("Users");
            $user = $users->find('all')->where(['email' => $email])->first();
            if ($user) {
                $token = rand(10000, 100000);
                $user->token = $token;
                if ($users->save($user)) {
                    $mailer = new Mailer('default');
                    $mailer->setTransport('gmail');
                    $mailer->setFrom(['sachinsingh10101997@gmail.com' => 'Sachin']);
                    $mailer->setTo($email);
                    $mailer->setEmailFormat('html');
                    $mailer->setSubject('Reset password link');
                    $mailer->deliver('<a href="http://localhost:8765/users/reset?token=' . $token . '">Click here</a> for reset your password');

                    $this->Flash->success(__('Password reset link has been sent on your registered Email'));
                }
            } else {
                $this->Flash->error(__('Please enter valid credential..'));
            }
        }
        $this->set(compact('user'));
    }

    public function reset()
    {
        $user = $this->Users->newEmptyEntity();
        $token = $_REQUEST['token'];
        $users = TableRegistry::get("Users");
        $result = $users->find('all')->where(['token' => $token])->first();
        if ($result) {
            if ($this->request->is('post')) {
                $user = $this->Users->patchEntity($user, $this->request->getData());
                $password = $this->request->getData('password');
                $res1 = preg_match('(^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]*).{8,}$)', $password);
                $confirm_password = $this->request->getData('confirm_password');
                if ($res1 == 1 && $confirm_password == $password) {
                    $result->password = $password;
                    $result->token = NULL;
                    if ($users->save($result)) {
                        $this->Flash->success(__('Password updated successfully.'));
                        return $this->redirect(['action' => 'login']);
                    }
                }
                $this->Flash->error(__('Please enter valid password'));
            }
        } else {
            return $this->redirect(['action' => 'login']);
        }

        $this->set(compact('user'));
    }

    public function approve()
    {
        $user = $this->Users->newEmptyEntity();
        $token = $_REQUEST['token'];
        $users = TableRegistry::get("Users");
        $result = $users->find('all')->where(['token' => $token])->first();
        if ($result) {
            if ($this->request->is('post')) {
                $user = $this->Users->patchEntity($user, $this->request->getData());
                $status = $this->request->getData('status');
                $result->status = $status;
                $result->token = NULL;
                if ($users->save($result)) {
                    $this->Flash->success(__('User Approved successfully.'));
                    // return $this->redirect(['action' => 'login']);
                }
                // $this->Flash->error(__('Please enter valid password'));
            }
        } else {
            return $this->redirect(['action' => 'login']);
        }

        $this->set(compact('user'));
    }
}
