<?php
namespace App\Controller;

class SkillsController extends AppController
{
  public function initialize()
   {
       parent::initialize();
       $this->loadComponent('Flash'); // Charge le FlashComponent
   }
   public function index()
     {
         $this->viewBuilder()->layout('default');
     }
}
