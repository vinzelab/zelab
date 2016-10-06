<h3>Liste des partenaires</h3>
<div class="container">
  <?= $this->Html->link(__("<i class='ion-plus-circled'>Ajouter un partenaire</i>"),'/partners/add',['class' => 'btn btn-default', 'escape' => false]); ?>
<table class="table table-hover">
  <tr>
    <th>id</th>
    <th>titre</th>
    <th>Activité</th>
    <th>lien</th>
    <th>modifier</th>
  </tr>
  <?php foreach ($partners as $partner): ?>
  <tr>
    <td><?= $partner->partner_id ?></td>
    <td><?= $partner->partner_title ?></td>
    <td><?= $partner->partner_activity ?></td>
    <td><?= $partner->partner_link ?></td>
    <td>
      <?= $this->Html->link(__("<i class='ion-edit'></i>"), ['action' => 'edit',$partner->partner_id], ['class' => 'edit', 'escape' => false]); ?>
      <?= $this->Form->postLink(__("<i class='ion-ios-trash'></i>"), ['action' => 'delete',$partner->partner_id], ['class' => 'delete', 'escape' => false,'confirm' => 'Etes-vous sûr?']); ?>
    </td>

  </tr>
  <?php endforeach; ?>

</table>

</div>
