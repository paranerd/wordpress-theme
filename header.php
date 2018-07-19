<html>
<head>
    <title>Tutorial theme</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/design.css'; ?>">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/js/main.js'; ?>"></script>
</head>

<body>
    <div id="ttr_header" class="jumbotron text-center">
        <h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <h3><?php bloginfo('description'); ?></h3>
    </div>
    <div class="container">
