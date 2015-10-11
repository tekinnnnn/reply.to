<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="../javascriptElementFramework/assets/framework.css">
    <script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">Reply.to</div>
            </div>
            <div class="panel-body">
                <?php
                try {
                    $pdo = new PDO("sqlite:db_sources/default.db");
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }

                $sqlite = new SQLite3("db_sources/default.db");
                $query = $sqlite->query("SELECT * FROM users");
                $result = $query->fetchArray();
                print_r($result);
                ?>
            </div>
            <div class="panel-footer"></div>
        </div>
    </div>
</div>
<!-- /container -->
</body>
<!-- <script type="text/javascript" src="../javascriptElementFramework/assets/framework.js"></script> !-->
</html>