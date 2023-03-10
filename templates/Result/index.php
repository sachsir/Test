<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Result> $result
 */
?>
<div class="result index content">
    <?= $this->Html->link(__('New Result'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Result') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('total_questions') ?></th>
                    <th><?= $this->Paginator->sort('right_answers') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $result): ?>
                <tr>
                    <td><?= $this->Number->format($result->id) ?></td>
                    <td><?= $result->has('user') ? $this->Html->link($result->user->id, ['controller' => 'Users', 'action' => 'view', $result->user->id]) : '' ?></td>
                    <td><?= $this->Number->format($result->total_questions) ?></td>
                    <td><?= $this->Number->format($result->right_answers) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $result->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $result->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $result->id], ['confirm' => __('Are you sure you want to delete # {0}?', $result->id)]) ?>
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
