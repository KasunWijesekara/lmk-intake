<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendee[]|\Cake\Collection\CollectionInterface $attendees
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Attendee'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="attendees index large-9 medium-8 columns content">
    <h3><?= __('Attendees') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($attendees as $attendee): ?>
            <tr>
                <td><?= $this->Number->format($attendee->id) ?></td>
                <td><?= $attendee->has('participant') ? $this->Html->link($attendee->participant->name, ['controller' => 'Participants', 'action' => 'view', $attendee->participant->id]) : '' ?></td>
                <td><?= h($attendee->date) ?></td>
                <td><?= h($attendee->time) ?></td>
                <td><?= h($attendee->status) ?></td>
                <td><?= h($attendee->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $attendee->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attendee->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $attendee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendee->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
