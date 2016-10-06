<h3>Liste des projets</h3>
<div class="container">
  <?= $this->Html->link(__("<i class='ion-plus-circled'>Ajouter un projet</i>"),'/projects/add',['class' => 'btn btn-default', 'escape' => false]); ?>
<table class="table table-hover">
  <tr>
    <th>id</th>
    <th>titre</th>
    <th>sous titre</th>
    <th>lien</th>
    <th>Catégories</th>
    <th>modifier</th>
    <th>delete</th>
  </tr>
  <?php foreach ($projects as $project): ?>
  <tr>
    <td><?= $project->id ?></td>
    <td><?= $this->Html->link($project->project_title, ['action' => 'edit', $project->id]) ?></td>
    <td><?= $project->project_sbtitle ?></td>
    <td><?= $project->project_link ?></td>
    <td>
      <?php if ($project->category==0){
      echo "Webdesign";}
      elseif ($project->category==1){
        echo "Graphic design";}
      elseif ($project->category==2){
        echo "Print";}
      elseif ($project->category==3){
        echo "integration";}
      ?>
    </td>
    <td>
      <?= $this->Html->link(__("<i class='ion-edit'></i>"), ['action' => 'edit',$project->id], ['class' => 'edit', 'escape' => false]); ?>
      <?= $this->Form->postLink(__("<i class='ion-ios-trash'></i>"), ['action' => 'delete',$project->id], ['class' => 'delete', 'escape' => false,'confirm' => 'Etes-vous sûr?']); ?>
    </td>
    <td><input type="checkbox" name="order_id[]" value ="<?php echo $project->id;?>" hiddenField = "false"></td>
  </tr>
  <?php endforeach; ?>

</table>
<?= $this->Html->link(__("<i class='ion-ios-trash'>Supprimer la sélection</i>"),['action' => 'deleteall'],['class' => 'btn btn-default', 'escape' => false]); ?>

</div>
