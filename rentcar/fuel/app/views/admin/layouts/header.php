<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? '管理画面' ?></title>
    <link href="/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?php echo render('admin/layouts/sidebar', ['role'=>$session_role]); ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
