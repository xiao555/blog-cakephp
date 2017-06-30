<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if (!empty($title_of_layout)) {
            echo $title_of_layout . ' | ' . SITE_TITLE;
        } else {
            echo SITE_TITLE . ' | ' . SITE_DESCRIPTION;
        }
        ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- Bootstrap -->
    <?= $this->Html->css('/resources/bootstrap/css/bootstrap.min.css'); ?>

    <!-- Custom-->
    <?= $this->Html->css('admin.css') ?>

    <!-- Jquery -->
    <?= $this->Html->script('/resources/jquery/jquery.js'); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Flash->render() ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin">Admin</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Visit Site</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container-fluid">
        <div class="row clearfix">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <?php foreach($pages as $page) { ?>
                        <li <?php nav_active_array($page[2]) ?>><a href="<?php echo $page[1]; ?>"><?php echo $page[3];?><?php echo $page[0]; ?></a></li>
                    <?php } ?>
                </ul>
                <footer>
                    <p class="text-center">
                        &copy; Copyright 2016 - <?php echo date("Y"); ?>.
                        <br />
                        <?php echo SITE_TITLE; ?> is powered by <a href="https://cakephp.org/" target="_blank">CakePHP</a>
                    </p>
                </footer>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </main>
    <!-- Bootstrap -->
    <?= $this->Html->script('/resources/bootstrap/js/bootstrap.min.js'); ?>
</body>
</html>
