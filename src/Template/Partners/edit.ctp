<h1>Modifier un partenaire</h1>
<div class="contact-form-auth">
<?php
    echo $this->Form->create($partner);
    echo $this->Form->input('partner_title');
    echo $this->Form->input('partner_activity');
    echo $this->Form->input('partner_link');
    echo $this->Form->button(__('Sauvegarder le partenaire'));
    echo $this->Form->end();
?>
</div>
