<h1 class="title">テーマ投稿</h1>
　
<?= $this->Form->create($theme); ?>
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
    echo $this->Form->select('job',
         ['無回答','学生','製造業','建築業','設備業','運輸業','流通業','農林水産業','印刷・出版業','金融業・保険業','不動産業',
          'IT・情報通信業','サービス業','教育・研究機関','病院・医療機関','官公庁・自治体','法人団体','その他の業種'],
         ['empty' => '職業']
         );
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->button(__('投稿する'));
    echo $this->Form->end();
    echo $this->Html->link('Topに戻る', ['action' => 'index'])
?>
