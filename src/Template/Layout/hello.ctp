<!DOCTYPE html>
<html lang="ja">
<head>
    <?= $this->Html->charset(); ?>
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?php
    echo $this->Html->css('cake.hello');
    echo $this->Html->script('cake.hello');
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>

<body>
■XML読み込み
<dl>
<?php
    $xmlTree = simplexml_load_file('https://h2o-space.com/feed/');
    foreach ($xmlTree->channel->item as $item):
?>
<dd>
<a href="<?php echo($item->link); ?>"><?php echo($item->title); ?></a>
</dd>
<?php endforeach ?>
</dl>
■JSON読み込み
<dl>
<?php
    $file = file_get_contents('https://h2o-space.com/feed/json/');
    $json = json_decode($file);
    foreach ($json->items as $item_json):
?>
<dd>
<a href="<?php echo($item_json->url); ?>"><?php echo($item_json->title); ?></a>
</dd>
<?php endforeach ?>
</dl>

    <div id="container">
        <div id="header">
            <?=$this->element('Hello/header',['msg'=>$msg]) ?>
        </div>
        <div id="content">
            <?= $this->fetch('content') ?>
        </div>
        <div id="fooder">
            <?=$this->element($footer) ?>
        </div>
    </div>
</body>
</html>