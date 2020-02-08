
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