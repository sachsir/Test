<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test $test
 * @var string[]|\Cake\Collection\CollectionInterface $questions
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $test->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $test->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Test'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="test form content">
            <?= $this->Form->create($test) ?>
            <fieldset>
                <legend><?= __('Edit Test') ?></legend>
                <?php
                    echo $this->Form->control('question_id', ['options' => $questions]);
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('selected_option');
                    echo $this->Form->control('date');
                    echo $this->Form->control('result_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
