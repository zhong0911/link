<!DOCTYPE html>
<html lang="zh_CN">
<head>
    <meta charset="UTF-8">
    <title>Antx - 安全中心</title>
    <meta name="keywords" content="">
    <meta name="application-name" content="Adisaint">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="icon" href="https://image.antx.cc/logo/adisaint/favicon.ico" type="image/gif">
    <script src="https://cdn.antx.cc/script/js/utils/Utils.js"></script>
    <script src="https://cdn.antx.cc/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.antx.cc/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.antx.cc/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.antx.cc/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script></script>
</head>
<body>
<div class="container mt-5">
    <div class="card mt-5">
        <div class='card-body'>
            <p class="h5" style='color: #d70d0d'>
                <i class='fa fa-exclamation-triangle'></i> 即将离开Adisaint
            </p>
            <p class="">您即将离开Adisaint, 请注意您的账号和财产安全
                <?php
                $link = isset($_GET['link']) ? htmlspecialchars($_GET['link']) : '';
                echo "<br/><a href=\"$link\">$link<a></p>";
                echo "<a href=\"$link\"><button class='pull-right btn-danger btn btn-sm'>前往</button><a>";
                ?>
        </div>
    </div>
</div>
</body>
</html>