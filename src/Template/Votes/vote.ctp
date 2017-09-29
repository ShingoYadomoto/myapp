<h1 class="title">Judge</h1>
<h1 class = "judgeTheme"><?= $theme->body ?></h1>

<?= $this->Form->create($vote); ?>
<div class = "radioOpinion">
    <?= $this->Form->radio('opinion',
         ['1,「賛成」' , '2,「賛成」だが、今まで反対だった' , '3,「反対」だが今まで賛成だった' , '4,「反対」']
         );
     ?>
</div>

<div class = "radioSex">
    <?= $this->Form->radio('sex',
         ['無回答' , '男性' , '女性' , 'その他']
         );
     ?>
</div>

<?php
    echo $this->Form->select('age',
         ['無回答','20歳未満','20代','30代','40代','50代','60代','70代','80代'],
         ['empty' => '年齢']
         );
    echo $this->Form->button(__('投票する！'));
    echo $this->Form->end();
    echo $this->Html->link('Topに戻る', ['action' => 'index'])
?>
