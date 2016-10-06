<div class="title-page">
  <h1>ZELAB projects</h1>
  <strong>My best projects</strong>
</div>

<div class="category-filters">
  <ul class="nav nav-pills nav-justified">
    <li><a class="category" href="#">Web design</a></li>
    <li><a class="category" href="#">Graphic design</a></li>
    <li><a class="category all" href="#">All</a></li>
  </ul>
</div>

<div class="container-fluid work-grid">

<!-- Ici se trouve l'itération sur l'objet query des projets -->

  <?php foreach ($projects as $project): ?>
    <div class="work" data-filter="<?= $project->category ?>">
      <?= $this->Html->image($project->project_thumb, ['alt' => $project->project_title]) ?>
      <div class="portfolio-title">
        <h3><?= $this->Html->link($project->project_title, ['action' => 'view', $project->id]) ?></h3>
        <p><?= $project->project_sbtitle ?></p>
        <div class="partner-link-border"><?=$this->Html->link('',['action' => 'view', $project->id],['class'=> "ion-eye partner-link"]);?></div>
      </div>
    </div>
  <?php endforeach; ?>

</div>
