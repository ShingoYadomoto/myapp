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
    <?= 'Supreme'; ?>
<!--    <div class="headers"> -->
        <?php
            echo $this->Html->link('Top',
                    ['controller' => 'Themes' , 'action' => 'index'],
                    ['class' => 'header']            
        );
            echo $this->Html->link('New!',
                    ['controller' => 'Themes' , 'action' => 'index' , '#' => 'New'],
                    ['class' => 'header']
        );
            echo $this->Html->link('Hot!',
                    ['controller' => 'Themes' , 'action' => 'index' , '#' => 'Hot'],
                    ['class' => 'header']
        );
            echo $this->Html->link('Div',
                    ['controller' => 'Themes' , 'action' => 'index'],
                    ['class' => 'header']
        );
            echo $this->Html->link('Post',
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
