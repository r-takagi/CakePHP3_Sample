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
<tr>
    <th>ID</th>
    <th>NAME</th>
    <th>TITLE</th>
    <th>CONTENT</th>
</tr>
<?php
$arr = $data->toArray();
for ($cnt = 0;$cnt < count($arr);$cnt++) {
    echo $this->Html->tableCells(
        $arr[$cnt]->toArray(),
        ['style'=>'background-color:#f0f0f0'],
        ['style'=>'font-weight:bold'],
        true);
}
?>
</table>