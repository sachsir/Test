<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Result $result
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Result'), ['action' => 'edit', $result->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Result'), ['action' => 'delete', $result->id], ['confirm' => __('Are you sure you want to delete # {0}?', $result->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Result'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Result'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="result view content">
            <h3><?= h($result->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $result->has('user') ? $this->Html->link($result->user->id, ['controller' => 'Users', 'action' => 'view', $result->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($result->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total Questions') ?></th>
                    <td><?= $this->Number->format($result->total_questions) ?></td>
                </tr>
                <tr>
                    <th><?= __('Right Answers') ?></th>
                    <td><?= $this->Number->format($result->right_answers) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related History') ?></h4>
                <?php if (!empty($result->history)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Course Id') ?></th>
                            <th><?= __('Result Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($result->history as $history) : ?>
                        <tr>
                            <td><?= h($history->id) ?></td>
                            <td><?= h($history->user_id) ?></td>
                            <td><?= h($history->course_id) ?></td>
                            <td><?= h($history->result_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'History', 'action' => 'view', $history->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'History', 'action' => 'edit', $history->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'History', 'action' => 'delete', $history->id], ['confirm' => __('Are you sure you want to delete # {0}?', $history->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Test') ?></h4>
                <?php if (!empty($result->test)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Question Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Selected Option') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Result Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($result->test as $test) : ?>
                        <tr>
                            <td><?= h($test->id) ?></td>
                            <td><?= h($test->question_id) ?></td>
                            <td><?= h($test->user_id) ?></td>
                            <td><?= h($test->selected_option) ?></td>
                            <td><?= h($test->date) ?></td>
                            <td><?= h($test->result_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Test', 'action' => 'view', $test->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Test', 'action' => 'edit', $test->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Test', 'action' => 'delete', $test->id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
