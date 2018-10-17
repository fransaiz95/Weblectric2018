<!DOCTYPE html>
<html class="no-js" lang="es" >
<head>
    <?php echo $this->Html->charset(); ?>
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <title>
        <?php echo __('Weblectric') ?>
    </title>

    <meta name="Author" content="Francisco Saiz - fransaiz78@gmail.com"/>
    
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <?php
    echo $this->Html->css('lib/foundation-6.4.2/css/foundation.css');
    echo $this->Html->css('../js/lib/jquery-ui-1.10.4/themes/base/minified/jquery-ui.min.css');
    echo $this->Html->css('estilos.css');
    echo $this->fetch('css');
    ?>

    <?php
    echo $this->Html->script('lib/jquery-1.11.1.min.js');
    echo $this->Html->script('lib/jquery-ui-1.10.4/ui/minified/jquery-ui.min.js');
    echo $this->fetch('script');
    ?>
</head>

<div id="container">
    <?php echo $this->fetch('header'); ?>
    <div id="contenido" class="contain-to-grid">
        <?php echo $this->fetch('content'); ?>
    </div>
</div>

<?php echo $this->Html->script('../css/lib/foundation-6.4.2/js/vendor/foundation.min.js'); ?>
</body>
</html>