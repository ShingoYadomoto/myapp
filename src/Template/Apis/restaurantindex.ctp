<h1 class="title">藤沢でwifiが使えるとこはここ！</h1>

<h3>該当件数 : <?= $restaurants['total_hit_count'] ?>件</h3>
<table>
    <tr>
        <th>店名</th>
        <th>ジャンル</th>
        <th>特徴</th>
        <th>予算</th>
    </tr>
<?php foreach ($restaurants['rest'] as $restaurant): ?>
    <tr>
        <td><a href=<?= $restaurant['url'] ?>><?= $restaurant['name'] ?></td>
        <td>
            <?php if($restaurant['code']['category_name_l'][0] == $restaurant['code']['category_name_s'][0]) {
                      echo $restaurant['code']['category_name_l'][0];
                  }else{
                      echo $restaurant['code']['category_name_l'][0].' , '.$restaurant['code']['category_name_s'][0];
                  } 
            ?>
        </td>
        <td><?= $restaurant['category'] ?></td>
        <td><?php if(count($restaurant['budget'])){
                      echo $restaurant['budget'].'円'; 
                  }else{
                      echo 'いっぱい';
                  }
             ?>
        </td>
    </tr>
<?php endforeach; ?>
</table>

