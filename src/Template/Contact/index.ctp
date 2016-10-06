<div class="title-page">
  <h1>Contact me</h1>
  <strong>I need you</strong>
</div>
<div class="contact-form">

  <?php
  echo $this->Form->create($contact);
  echo $this->Form->input('Nom');
  echo $this->Form->input('email');
  echo $this->Form->input('Message');
  echo $this->Form->button('Submit');
  echo $this->Form->end();
  ?>
</div>
