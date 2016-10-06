<?php
namespace App\Controller;

class ProjectsController extends AppController
{
  public function initialize()
   {
       parent::initialize();
       $this->loadComponent('Flash'); // Charge le FlashComponent
       $this->loadComponent('RequestHandler');//AJAX

   }

  public function index()
    {
        $projects = $this->Projects->find('all');
        $this->set(compact('projects'));
        $this->viewBuilder()->layout('defaultHome');
    }
  public function categories()
    {
        $projects = $this->Projects->find('all');
        $this->set(compact('projects'));

    }

  public function view($id = null)
     {
         $project = $this->Projects->get($id);
         $this->set(compact('project'));
     }

 public function add()
     {
         $project = $this->Projects->newEntity();
         if ($this->request->is('post')) {

           //upload file
           $fileName = $this->request->data['project_thumb']['name'];
           $fileNameimg1 = $this->request->data['project_img1']['name'];
           $fileNameimg2 = $this->request->data['project_img2']['name'];
           $fileNameimg3 = $this->request->data['project_img3']['name'];

           $uploadPath = 'img/portfolio/';

           $PathName = 'portfolio/';

           $uploadFile = $uploadPath.$fileName;
           $uploadFileimg1 = $uploadPath.$fileNameimg1;
           $uploadFileimg2 = $uploadPath.$fileNameimg2;
           $uploadFileimg3 = $uploadPath.$fileNameimg3;

           $extension=pathinfo($fileName, PATHINFO_EXTENSION);
           $extensionimg1=pathinfo($fileNameimg1, PATHINFO_EXTENSION);
           $extensionimg2=pathinfo($fileNameimg2, PATHINFO_EXTENSION);
           $extensionimg3=pathinfo($fileNameimg3, PATHINFO_EXTENSION);

           $project = $this->Projects->patchEntity($project, $this->request->data);

           // save path in db
           $project->project_thumb=$PathName.$fileName;
           $project->project_img1=$PathName.$fileNameimg1;
           $project->project_img2=$PathName.$fileNameimg2;
           $project->project_img3=$PathName.$fileNameimg3;

             if ($this->Projects->save($project)) {
               //upload file
                  move_uploaded_file($this->request->data['project_thumb']['tmp_name'],$uploadFile);
                  move_uploaded_file($this->request->data['project_img1']['tmp_name'],$uploadFileimg1);
                  move_uploaded_file($this->request->data['project_img2']['tmp_name'],$uploadFileimg2);
                  move_uploaded_file($this->request->data['project_img3']['tmp_name'],$uploadFileimg3);

                  chmod($uploadFile, 0777);
                  chmod($uploadFileimg1, 0777);
                  chmod($uploadFileimg2, 0777);
                  chmod($uploadFileimg3, 0777);

                  $this->Flash->success(__('Votre article a été sauvegardé.'));
                 return $this->redirect(['action' => 'add']);
             }
             $this->Flash->error(__('Impossible d\'ajouter votre article.'));

         }
         $this->set('project', $project);

         $this->viewBuilder()->layout('admin');
     }

 public function edit($id = null)
 {
     $project = $this->Projects->get($id);
     if ($this->request->is(['post', 'put'])) {
         $this->Projects->patchEntity($project, $this->request->data);
         if ($this->Projects->save($project)) {
             $this->Flash->success(__('Votre article a été mis à jour.'));
             return $this->redirect(['action' => 'admin']);
         }
         $this->Flash->error(__('Impossible de mettre à jour votre article.'));
     }

     $this->set('project', $project);
     $this->viewBuilder()->layout('admin');
 }
 public function admin()
   {
       $projects = $this->Projects->find('all');
       $this->set(compact('projects'));
       $this->viewBuilder()->layout('admin');
   }

 public function delete($id)
 {
     $this->request->allowMethod(['post', 'delete']);

     $project = $this->Projects->get($id);
     if ($this->Projects->delete($project)) {
         $this->Flash->success(__("L'article avec l'id: {0} a été supprimé.", h($id)));
         return $this->redirect(['action' => 'admin']);
     }
 }

 public function deleteall()
 {

 }

}
