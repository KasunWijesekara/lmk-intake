<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Participant $participant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Participant'), ['action' => 'edit', $participant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Participant'), ['action' => 'delete', $participant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $participant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Participants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Attendees'), ['controller' => 'Attendees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attendee'), ['controller' => 'Attendees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="participants view large-9 medium-8 columns content">
    <h3><?= h($participant->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($participant->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($participant->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Applicantid') ?></th>
            <td><?= h($participant->applicantid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($participant->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($participant->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $participant->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Attendees') ?></h4>
        <?php if (!empty($participant->attendees)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Time') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($participant->attendees as $attendees): ?>
            <tr>
                <td><?= h($attendees->id) ?></td>
                <td><?= h($attendees->participant_id) ?></td>
                <td><?= h($attendees->date) ?></td>
                <td><?= h($attendees->time) ?></td>
                <td><?= h($attendees->status) ?></td>
                <td><?= h($attendees->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Attendees', 'action' => 'view', $attendees->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Attendees', 'action' => 'edit', $attendees->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Attendees', 'action' => 'delete', $attendees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendees->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
