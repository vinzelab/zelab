<div class="title-page">
  <h1>I work with us</h1>
  <strong>And I still learning from<strong>
</div>

  <div class="container-fluid partner-grid">
    <?php foreach ($partners as $partner): ?>
      <div class="partner">
        <?= $this->Html->image($partner->partner_thumb, ['alt' => $partner->partner_title]) ?>
        <div class="partner-title">
          <h3><?= $partner->partner_title ?></h3>
          <div class="partner-link-border"><?=$this->Html->link('',$partner->partner_link,['class'=> "ion-link partner-link",'target' => '_blank']);?></div>
          <p><?= $partner->partner_activity ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
