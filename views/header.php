<?php session_start();

?>
<!doctype html>
<html>
<head>
    <title><?=(isset($this->title)) ? $this->title : 'Admin'; ?></title>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo URL; ?>public/css/normalize.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo URL; ?>public/scss/style.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/customes/popup.css">
    <link href="<?php echo URL; ?>public/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
</head>
<body>

<?php //Session::init(); ?>
    
    
    