<h1>DBレコード追加サンプル</h1>
<?=$this->Form->create($entity,['url'=>['action'=>'addRecord']]) ?>
<fieldset>
<?=$this->Form->text("name") ?>
<?=$this->Form->text("title") ?>
<?=$this->Form->textarea("content") ?>
</fieldset>
<?=$this->Form->button("送信") ?>
<?=$this->Form->end() ?>

<hr>

<table>
<?php foreach ($data as $obj): ?>
    <tr>
        <td><?= $obj->id ?></td>
        <td><?= h($obj->name) ?></td>
        <td><?= h($obj->title) ?></td>
        <td><?= h($obj->content) ?></td>
    </tr>
<?php endforeach; ?>
</table>