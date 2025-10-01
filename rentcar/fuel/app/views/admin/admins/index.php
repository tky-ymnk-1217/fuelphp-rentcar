<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <p><a href="/admin/admins/create" class="btn btn-primary btn-sm">新規作成</a></p>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>ユーザ名</th>
            <th>ロール</th>
            <th>店舗ID</th>
            <th>操作</th>
        </tr>
        <?php foreach($admins as $a): ?>
        <tr>
            <td><?= $a->id ?></td>
            <td><?= $a->username ?></td>
            <td><?= $a->role ?></td>
            <td><?= $a->store_id ?></td>
            <td>
                <a href="/admin/admins/delete/<?= $a->id ?>" class="btn btn-danger btn-sm" onclick="return confirm('削除しますか?')">削除</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
