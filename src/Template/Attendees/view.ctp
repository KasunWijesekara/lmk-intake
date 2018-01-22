<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendee $attendee
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Attendee'), ['action' => 'edit', $attendee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Attendee'), ['action' => 'delete', $attendee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Attendees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attendee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="attendees view large-9 medium-8 columns content">
    <h3><?= h($attendee->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Participant') ?></th>
            <td><?= $attendee->has('participant') ? $this->Html->link($attendee->participant->name, ['controller' => 'Participants', 'action' => 'view', $attendee->participant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($attendee->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time') ?></th>
            <td><?= h($attendee->time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($attendee->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($attendee->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $attendee->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
