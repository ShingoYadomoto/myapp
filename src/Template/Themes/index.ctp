<h1 class="title">Welcome</h1>
　
<!--addのリンクを表示-->
<?= $this->Html->link('テーマ投稿しちゃう？', ['action' => 'add']) ?>
<!---->
　
<table>
    <?php foreach ($themes as $theme): ?>
    <tr>
        <td>
            <?= $this->Html->link($theme->body, ['controller' => 'votes' , 'action' => 'vote', $theme->id]) ?>
        </td>
        <td>
            <?= $theme->created->format(DATE_RFC850) ?>
        </td>　
    </tr>
    <?php endforeach; ?>
</table>
