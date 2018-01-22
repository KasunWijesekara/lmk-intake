<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Attendees Controller
 *
 * @property \App\Model\Table\AttendeesTable $Attendees
 *
 * @method \App\Model\Entity\Attendee[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AttendeesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function addQuotation()
    {
        $this->viewBuilder()->layout(false);

        $attendee = $this->Attendees->newEntity();
             if ($this->request->is('post')) {
                 $attendee = $this->Attendees->patchEntity($attendee, $this->request->data);
                 if ($this->Attendees->save($attendee)) {
                     $this->Flash->success(__('The attendee has been saved.'));
                    return $this->redirect( '/attendee' );
                 } else {
                    $this->Flash->error(__('The attendee could not be saved. Please, try again.'));
                    return $this->redirect( '/attendee' );
                 }
                 $this->Flash->error(__('Error.. Please, try again.'));
                return $this->redirect( '/attendee' );
             }

    }

    // public function addFromClient()
    //  {
    //      $this->viewBuilder()->layout(false);
    //      $contact = $this->Contacts->newEntity();
    //          if ($this->request->is('post')) {
    //              $contact = $this->Contacts->patchEntity($contact, $this->request->data);

    //              if ($this->Contacts->save($contact)) {
    //                  $this->Flash->success(__('The contact has been saved.'));
    //                 return $this->redirect( '/contact' );
    //              } else {
    //                 $this->Flash->error(__('The contact could not be saved. Please, try again.'));
    //                 return $this->redirect( '/contact' );
    //              }
    //              $this->Flash->error(__('Error.. Please, try again.'));
    //             return $this->redirect( '/contact' );
    //          }
    //  }


    public function index()
    {
        $this->paginate = [
            'contain' => ['Participants']
        ];
        $attendees = $this->paginate($this->Attendees);

        $this->set(compact('attendees'));
    }

    /**
     * View method
     *
     * @param string|null $id Attendee id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $attendee = $this->Attendees->get($id, [
            'contain' => ['Participants']
        ]);

        $this->set('attendee', $attendee);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $attendee = $this->Attendees->newEntity();
        if ($this->request->is('post')) {
            $attendee = $this->Attendees->patchEntity($attendee, $this->request->getData());
            if ($this->Attendees->save($attendee)) {
                $this->Flash->success(__('The attendee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attendee could not be saved. Please, try again.'));
        }
        $participants = $this->Attendees->Participants->find('list', ['limit' => 200]);
        $this->set(compact('attendee', 'participants'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Attendee id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $attendee = $this->Attendees->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $attendee = $this->Attendees->patchEntity($attendee, $this->request->getData());
            if ($this->Attendees->save($attendee)) {
                $this->Flash->success(__('The attendee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attendee could not be saved. Please, try again.'));
        }
        $participants = $this->Attendees->Participants->find('list', ['limit' => 200]);
        $this->set(compact('attendee', 'participants'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Attendee id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $attendee = $this->Attendees->get($id);
        if ($this->Attendees->delete($attendee)) {
            $this->Flash->success(__('The attendee has been deleted.'));
        } else {
            $this->Flash->error(__('The attendee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
