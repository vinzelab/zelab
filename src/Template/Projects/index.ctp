<section id="activity">
  <h2>I love working</h2>
  <div class="activities-icons container">
    <div class="activity col-xs-12 col-sm-3">
      <i class="ion-code"></i>
      <h3>Web development</h3>
    </div>
    <div class="activity col-xs-12 col-sm-3">
      <i class="ion-paintbrush"></i>
      <h3>Graphic design</h3>
    </div>
    <div class="activity col-xs-12 col-sm-3">
      <i class="ion-ios-people"></i>
      <h3>Project management</h3>
    </div>
    <div class="activity col-xs-12 col-sm-3">
      <i class="ion-ios-eye"></i>
      <h3>Visual identity</h3>
    </div>
  </div>
  <?= $this->Html->link('check my skills','/skills',['class' => 'zelab-button']);?>
</section>
<section id="work">
  <h2>latest works</h2>
  <div class="container-fluid work-grid">

    <!-- Ici se trouve l'itération sur les portfolios -->

    <?php foreach ($projects as $project): ?>
      <div class="work">
        <?= $this->Html->image($project->project_thumb, ['alt' => '$project->project_title']) ?>
        <div class="portfolio-title">
          <h3><?= $this->Html->link($project->project_title, ['action' => 'view', $project->id]) ?></h3>
          <p><?= $project->project_sbtitle ?></p>
          <div class="partner-link-border"><?=$this->Html->link('',['action' => 'view', $project->id],['class'=> "ion-eye partner-link"]);?></div>
        </div>
      </div>
    <?php endforeach; ?>
    
  </div>
  <?= $this->Html->link('See all','/projects/categories',['class' => 'zelab-button']);?>
</section>
