<?php
namespace App\Controller;
use Cake\Filesystem\Folder;

class PartnersController extends AppController
{
  public function initialize()
   {
       parent::initialize();
       $this->loadComponent('Flash'); // Charge le FlashComponent
       // Load Files model
       $this->loadModel('Files');
   }
   public function index()
     {
         $partners = $this->Partners->find('all');
         $this->set(compact('partners'));
         $this->viewBuilder()->layout('default');
     }
     public function add()
       {
       $partner = $this->Partners->newEntity();

       if ($this->request->is('post')) {

          //declare for upload files
           $fileName = $this->request->data['partner_thumb']['name'];
           $uploadPath = 'img/partner/';
           $PathName = 'partner/';
           $uploadFile = $uploadPath.$fileName;
           $extension=pathinfo($fileName, PATHINFO_EXTENSION);
           $partner = $this->Partners->patchEntity($partner, $this->request->data);

           // save path in db
           $partner->partner_thumb=$PathName.$fileName;

           if (($this->Partners->save($partner))&&($extension==".jpg"||".png")) {
             //save file in directory
             move_uploaded_file($this->request->data['partner_thumb']['tmp_name'],$uploadFile);
             chmod($uploadFile, 0777);

             $this->Flash->success(__('Votre partenaire a été sauvegardé.'));
             return $this->redirect(['action' => 'add']);
           }
           $this->Flash->error(__('Impossible d\'ajouter votre partenaire.'));
         }
       $this->set('partner', $partner);
       $this->viewBuilder()->layout('admin');
       }

       public function admin()
         {
             $partners = $this->Partners->find('all');
             $this->set(compact('partners'));
             $this->viewBuilder()->layout('admin');
         }

         public function edit($id = null)
         {
             $partner = $this->Partners->get($id);
             if ($this->request->is(['post', 'put'])) {
                 $this->Partners->patchEntity($partner, $this->request->data);
                 if ($this->Partners->save($partner)) {
                     $this->Flash->success(__('Votre partnenaire a été mis à jour.'));
                     return $this->redirect(['action' => 'admin']);
                 }
                 $this->Flash->error(__('Impossible de mettre à jour votre article.'));
             }
             $this->set('partner', $partner);
             $this->viewBuilder()->layout('admin');
          }
          public function delete($id)
          {
              $this->request->allowMethod(['post', 'delete']);

              $partner = $this->Partners->get($id);
              if ($this->Partners->delete($partner)) {
                  $this->Flash->success(__("Le partneaire avec l'id: {0} a été supprimé.", h($id)));
                  return $this->redirect(['action' => 'admin']);
              }
          }

}
