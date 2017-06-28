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

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('blog.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<?= $this->Flash->render() ?>
<div class="container main-container">
    <header class="header">
        <?php
            echo '<a href="/">Blog</a>';
            echo '<a href="/logout">Logout</a>';
        ?>
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
</body>
</html>
