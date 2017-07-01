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

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('blog.css') ?>

    <!-- Jquery -->
    <?= $this->Html->script('/resources/jquery/jquery.js'); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Flash->render() ?>
    <div class="container main-container">
        <header class="header">
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><?php echo '<a href="/">Home</a>'; ?></li>
                    <li><?php echo '<a href="/admin">Admin</a>'; ?></li>
                </ul>
            </div>
        </header>

        <main>
            <section class="content <?php echo $this->request->params['controller']; echo '-'; echo  $this->request->params['action']?>">
                <?= $this->fetch('content') ?>
            </section>
        </main>

        <footer class="footer">
            <p class="text-center">&copy; Copyright 2014 - <?php echo date("Y") ?>.</p>
        </footer>
    </div>
    <!-- Bootstrap -->
    <?= $this->Html->script('/resources/bootstrap/js/bootstrap.min.js'); ?>
</body>
</html>
