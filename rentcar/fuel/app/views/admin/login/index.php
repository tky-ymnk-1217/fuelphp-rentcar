<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>管理者ログイン</title>
    <link href="/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">管理者ログイン</h1>
                        <?php if (!empty($error)): ?>
                        <div class="alert alert-danger"><?= $error ?></div>
                        <?php endif; ?>
                    </div>
                    <form method="post" class="user">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control form-control-user" placeholder="ユーザ名" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control form-control-user" placeholder="パスワード" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">ログイン</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/admin/vendor/jquery/jquery.min.js"></script>
<script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="/admin/js/sb-admin-2.min.js"></script>
</body>
</html>
