<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>web site</title>
        <link href="/ui/css/lib/bootstrap.min.css" rel="stylesheet"/>
        <link href="/ui/icons/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"/>
        <link href="/ui/css/base.css" rel="stylesheet">
    </head>
    <body class="bg-dark bg-opacity-50">
    <?php echo $this->render('/nav/navbar.html',NULL,get_defined_vars(),0); ?>
    <div class="container-fluid">
        <?php echo $this->render($content,NULL,get_defined_vars(),0); ?>
    </div>


    <script src="/ui/js/lib/bootstrap.min.js"></script>
    <script src="/ui/js/lib/jquery.min.js"></script>
    <script src="/ui/js/base.js"></script>
    </body>
</html>