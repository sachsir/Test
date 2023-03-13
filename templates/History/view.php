<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\History $history
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit History'), ['action' => 'edit', $history->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete History'), ['action' => 'delete', $history->id], ['confirm' => __('Are you sure you want to delete # {0}?', $history->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List History'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New History'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="history view content">
            <h3><?= h($history->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $history->has('user') ? $this->Html->link($history->user->id, ['controller' => 'Users', 'action' => 'view', $history->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($history->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Course Id') ?></th>
                    <td><?= $this->Number->format($history->course_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Result Id') ?></th>
                    <td><?= $this->Number->format($history->result_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
