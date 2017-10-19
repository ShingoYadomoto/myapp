<h1 class="title">あなたは"信じる"ことと"思い込む"ことを分けられていますか？</h1>

<?= $this->Html->link('テーマを投稿する', ['action' => 'add']) ?>

<div class="themes_table" id=New>
    <h2>最新のテーマ</h2>　
    <table>
        <?php foreach ($new_themes as $new_theme): ?>
            <tr>
                <td>
                    <?= $this->Html->link($new_theme->body, ['controller' => 'votes' , 'action' => 'vote', $new_theme->id]) ?>
                </td>
                <td>
                    <?= $new_theme->created->format('Y-m-d H:m') ?>
                </td>　
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<div class="themes_table" id=Hot>
    <h2>話題のテーマ</h2>　
    <table>
        <?php foreach ($hot_themes as $hot_theme): ?>
            <tr>
                <td>
                    <?= $this->Html->link($hot_theme->body, ['controller' => 'votes' , 'action' => 'vote', $hot_theme->id]) ?>
                </td>
                <td>
                    <?= "投票数 : ".$hot_theme->total_votes; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

