<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CourseCategory Controller
 *
 * @property \App\Model\Table\CourseCategoryTable $CourseCategory
 * @method \App\Model\Entity\CourseCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CourseCategoryController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $courseCategory = $this->paginate($this->CourseCategory);

        $this->set(compact('courseCategory'));
    }

    /**
     * View method
     *
     * @param string|null $id Course Category id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $courseCategory = $this->CourseCategory->get($id, [
            'contain' => ['Course'],
        ]);

        $this->set(compact('courseCategory'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $courseCategory = $this->CourseCategory->newEmptyEntity();
        if ($this->request->is('post')) {
            $courseCategory = $this->CourseCategory->patchEntity($courseCategory, $this->request->getData());
            if ($this->CourseCategory->save($courseCategory)) {
                $this->Flash->success(__('The course category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The course category could not be saved. Please, try again.'));
        }
        $this->set(compact('courseCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Course Category id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $courseCategory = $this->CourseCategory->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $courseCategory = $this->CourseCategory->patchEntity($courseCategory, $this->request->getData());
            if ($this->CourseCategory->save($courseCategory)) {
                $this->Flash->success(__('The course category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The course category could not be saved. Please, try again.'));
        }
        $this->set(compact('courseCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Course Category id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $courseCategory = $this->CourseCategory->get($id);
        if ($this->CourseCategory->delete($courseCategory)) {
            $this->Flash->success(__('The course category has been deleted.'));
        } else {
            $this->Flash->error(__('The course category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
