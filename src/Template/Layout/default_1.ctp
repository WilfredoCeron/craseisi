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
        <title>CRAseisi</title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('filtrify.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->Html->script('jquery-1.7.1.min.js') ?>
    <?= $this->Html->script('filtrify.min.js') ?>

        <style type="text/css">

            ul#container > li:before {
                content: attr(data-codigo);
                white-space:pre;
            }

            ul#container > li:after {
                content: "\A\A" attr(data-escuela);
                white-space: pre-wrap;
            }

        </style>

        <script type="text/javascript">

            $(function () {

                $.filtrify("container", "placeHolder", {
                    block: ["data-codigo"]
                });

            });

        </script>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    </head>
    <body>
        <div id="header" role="banner">
            <h1>CRAseisi</h1>
            <h2>Centro de Recursos Academicos</h2>
            <p>Proyecto desarrollado por <i>ASEISI</i></p>
        </div>
        <div id="main" role="main">

                <?= $this->fetch('content') ?>

        </div>
    </body>
</html>
