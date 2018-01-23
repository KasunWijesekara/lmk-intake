<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Timeslots Controller
 *
 * @property \App\Model\Table\TimeslotsTable $Timeslots
 *
 * @method \App\Model\Entity\Timeslot[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TimeslotsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $timeslots = $this->paginate($this->Timeslots);

        $this->set(compact('timeslots'));
    }

    /**
     * View method
     *
     * @param string|null $id Timeslot id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $timeslot = $this->Timeslots->get($id, [
            'contain' => []
        ]);

        $this->set('timeslot', $timeslot);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $timeslot = $this->Timeslots->newEntity();
        if ($this->request->is('post')) {
            $timeslot = $this->Timeslots->patchEntity($timeslot, $this->request->getData());
            if ($this->Timeslots->save($timeslot)) {
                $this->Flash->success(__('The timeslot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The timeslot could not be saved. Please, try again.'));
        }
        $this->set(compact('timeslot'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Timeslot id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $timeslot = $this->Timeslots->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $timeslot = $this->Timeslots->patchEntity($timeslot, $this->request->getData());
            if ($this->Timeslots->save($timeslot)) {
                $this->Flash->success(__('The timeslot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The timeslot could not be saved. Please, try again.'));
        }
        $this->set(compact('timeslot'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Timeslot id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $timeslot = $this->Timeslots->get($id);
        if ($this->Timeslots->delete($timeslot)) {
            $this->Flash->success(__('The timeslot has been deleted.'));
        } else {
            $this->Flash->error(__('The timeslot could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
