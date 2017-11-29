<div class="pageTop">
   <h1>投票結果</h1>
</div>

<div class="themes_table" id=New>
<h1><?= $this_theme->body ?></h1>　
    <table>
        <?php foreach ($votes as $vote): ?>
            <tr>
                <td>
                    <?= h($vote->opinion) ?>
                </td>
                <td>
                    <div class="graph">
                        <span class="bar" style='<?= $this->Html->style(['width'=> $vote->count/$votes_count*100.0.'%']); ?>'>
                            <?= floor($vote->count/$votes_count*100)."%" ; ?>
                        </span>
                    </div>
                </td>
                <td>
                    <?= "投票数:".h($vote->count)."票" ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?= $this->Html->link('Topに戻る', ['controller' => 'Themes', 'action' => 'index']) ?>
