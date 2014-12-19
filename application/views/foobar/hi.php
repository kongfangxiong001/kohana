<html>
<head>
    <title><?= $title ?></title>
</head>
 
<body>
    <?php echo Request::factory('foobar/hello')->execute() ?>
</body>
</html>