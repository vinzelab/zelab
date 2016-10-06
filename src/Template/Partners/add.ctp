<h1>Ajouter un partenaire</h1>
<div class="contact-form-auth">
<?php
    echo $this->Form->create($partner,['enctype' => 'multipart/form-data']);
    echo $this->Form->input('partner_title');
    echo $this->Form->input('partner_activity');
    echo $this->Form->input('partner_link');
    echo $this->Form->input('partner_thumb', ['type' => 'file']);
    echo $this->Form->button(__("Ajouter le partenaire"));
    echo $this->Form->end();
?>
</div>
