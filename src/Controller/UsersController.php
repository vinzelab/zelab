<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {
      parent::beforeFilter($event);
      // Allow users to register and logout.
      // You should not add the "login" action to allow list. Doing so would
      // cause problems with normal functioning of AuthComponent.
      $this->Auth->allow(['add', 'logout']);
    }
    //
    //  public function index()
    //  {
    //     $this->set('users', $this->Users->find('all'));
    // }

    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
        $this->viewBuilder()->layout('login');
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__("L'utilisateur a été sauvegardé."));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__("Impossible d'ajouter l'utilisateur."));
        }
        $this->set('user', $user);
        $this->viewBuilder()->layout('admin');
    }
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl('/projects/admin'));
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
        $this->viewBuilder()->layout('login');

    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}
