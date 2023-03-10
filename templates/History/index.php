<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\History> $history
 */
?>
<div class="history index content">
    <?= $this->Html->link(__('New History'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('History') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('course_id') ?></th>
                    <th><?= $this->Paginator->sort('result_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($history as $history): ?>
                <tr>
                    <td><?= $this->Number->format($history->id) ?></td>
                    <td><?= $history->has('user') ? $this->Html->link($history->user->id, ['controller' => 'Users', 'action' => 'view', $history->user->id]) : '' ?></td>
                    <td><?= $this->Number->format($history->course_id) ?></td>
                    <td><?= $this->Number->format($history->result_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $history->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $history->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $history->id], ['confirm' => __('Are you sure you want to delete # {0}?', $history->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
