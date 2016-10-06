<h1>Ajouter un article</h1>
<div class="contact-form-auth">
<?php
    echo $this->Form->create($project,['enctype' => 'multipart/form-data']);
    echo $this->Form->input('project_title');
    echo $this->Form->input('project_sbtitle');
    echo $this->Form->input('project_thumb', ['type' => 'file']);
    echo $this->Form->input('project_desc', ['rows' => '3']);
    echo $this->Form->input('project_link');
    echo $this->Form->input('project_img1', ['type' => 'file']);
    echo $this->Form->input('project_img2', ['type' => 'file']);
    echo $this->Form->input('project_img3', ['type' => 'file']);
    echo $this->Form->input('category', array(
      'options' => array("webdesign","graphicdesign","print","integration"),
      'empty' => '(choisissez)'
  ));
    echo $this->Form->button(__("Sauvegarder l'article"));
    echo $this->Form->end();
?>
</div>
