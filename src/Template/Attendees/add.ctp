<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendee $attendee
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Attendees'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="attendees form large-9 medium-8 columns content">
    <?= $this->Form->create($attendee) ?>
    <fieldset>
        <legend><?= __('Add Attendee') ?></legend>
        <?php
            echo $this->Form->control('participant_id', ['options' => $participants, 'empty' => true]);
            echo $this->Form->control('date');
            echo $this->Form->control('time');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
