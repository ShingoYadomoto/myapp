<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title><?= "それって思い込みじゃない？" ?></title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('myapp1.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<header>
    <?= '思い込み.com'; ?>
<!--    <div class="headers"> -->
        <?php
            echo $this->Html->link('Top',
                    ['controller' => 'Themes' , 'action' => 'index'],
                    ['class' => 'header']            
        );
            echo $this->Html->link('最新',
                    ['controller' => 'Votes' , 'action' => 'vote' , 1],
                    ['class' => 'header']
        );
            echo $this->Html->link('話題',
                    ['controller' => 'Themes' , 'action' => 'index'],
                    ['class' => 'header']
        );
            echo $this->Html->link('意見別',
                    ['controller' => 'Themes' , 'action' => 'index'],
                    ['class' => 'header']
        );
            echo $this->Html->link('書く',
                    ['controller' => 'Themes' , 'action' => 'add'],
                    ['class' => 'header']
        );
        ?>
<!--    </div>    -->
</header>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
