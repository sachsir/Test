<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Test> $test
 */
?>
<div class="test index content">
    <?= $this->Html->link(__('New Test'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Test') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Sr. No') ?></th>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('question_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('selected_option') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('result_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1;
                foreach ($test as $test): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $this->Number->format($test->id) ?></td>
                    <td><?= $test->has('question') ? $this->Html->link($test->question->id, ['controller' => 'Questions', 'action' => 'view', $test->question->id]) : '' ?></td>
                    <td><?= $test->has('user') ? $this->Html->link($test->user->id, ['controller' => 'Users', 'action' => 'view', $test->user->id]) : '' ?></td>
                    <td><?= h($test->selected_option) ?></td>
                    <td><?= h($test->date) ?></td>
                    <td><?= $this->Number->format($test->result_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $test->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $test->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $test->id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->id)]) ?>
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
