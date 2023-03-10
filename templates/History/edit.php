<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\History $history
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $history->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $history->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List History'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="history form content">
            <?= $this->Form->create($history) ?>
            <fieldset>
                <legend><?= __('Edit History') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('course_id');
                    echo $this->Form->control('result_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
