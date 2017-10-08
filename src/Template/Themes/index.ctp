<h1 class="title">あなたは"信じる"ことと"思い込む"ことをきちんと分けられていますか？</h1>
<!--addのリンクを表示-->
<?= $this->Html->link('テーマ投稿しちゃう？', ['action' => 'add']) ?>
<!---->

<div class="themes_table">
<h2>最新のテーマ</h2>　
<table>
    <?php foreach ($themes as $theme): ?>
    <tr>
        <td>
            <?= $this->Html->link($theme->body, ['controller' => 'votes' , 'action' => 'vote', $theme->id]) ?>
        </td>
        <td>
            <?= $theme->created->format('Y-m-d H:m') ?>
        </td>　
    </tr>
    <?php endforeach; ?>
</table>
</div>

