<div class="title-page">
  <h1><?= ($project->project_title) ?></h1>
  <strong><?= ($project->project_sbtitle) ?></strong>
</div>
<div class="text-project">
  <p><?= ($project->project_desc) ?></p>
</div>
<?= $this->Html->link('visit website',($project->project_link),['class' => 'zelab-button','target' => '_blank']);?>
<div class="img-project">
    <?= $this->Html->image($project->project_img1, ['alt' => '']) ?>
    <?= $this->Html->image($project->project_img2, ['alt' => '']) ?>
    <?= $this->Html->image($project->project_img3, ['alt' => '']) ?>
</div>
