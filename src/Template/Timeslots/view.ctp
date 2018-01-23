<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Timeslot $timeslot
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Timeslot'), ['action' => 'edit', $timeslot->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Timeslot'), ['action' => 'delete', $timeslot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $timeslot->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Timeslots'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Timeslot'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="timeslots view large-9 medium-8 columns content">
    <h3><?= h($timeslot->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Time') ?></th>
            <td><?= h($timeslot->time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($timeslot->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($timeslot->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $timeslot->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
