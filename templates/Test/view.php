<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test $test
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Test'), ['action' => 'edit', $test->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Test'), ['action' => 'delete', $test->id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Test'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Test'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="test view content">
            <h3><?= h($test->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Question') ?></th>
                    <td><?= $test->has('question') ? $this->Html->link($test->question->id, ['controller' => 'Questions', 'action' => 'view', $test->question->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $test->has('user') ? $this->Html->link($test->user->id, ['controller' => 'Users', 'action' => 'view', $test->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Selected Option') ?></th>
                    <td><?= h($test->selected_option) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($test->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Result Id') ?></th>
                    <td><?= $this->Number->format($test->result_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($test->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
