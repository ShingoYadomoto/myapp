<h1 class="title">api叩くよー</h1>


<h2><?= $weather['title'] ?></h2>
<p><?= $weather['description']['text'] ?></p>
<p><?= $weather['description']['publicTime'] ?></p>

<table>
    <tr>
        <th>日にち</th>
        <th>天気</th>
        <th>最低気温</th>
        <th>最高気温</th>
    </tr>

<?php foreach ($weather['forecasts'] as $forecast): ?>
    <tr>
        <td><?= $forecast['date'] ?></td>
        <td>
            <div><?= $this->Html->image($forecast['image']['url']) ?></div>
            <div><?= $forecast['telop'] ?></div>
        </td>
        <td><?= $forecast['temperature']['min']['celsius'] ?></td>
        <td><?= $forecast['temperature']['max']['celsius'] ?></td>
    </tr>
<?php endforeach; ?>
</table>

<a href = <?= $weather['pinpointLocations'][7]['link'] ?>><?= '藤沢市の今日からの天気' ?></a>

