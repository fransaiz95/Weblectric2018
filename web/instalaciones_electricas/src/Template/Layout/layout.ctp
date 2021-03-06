<!DOCTYPE html>
<html class="no-js" lang="es" >
<link rel="shortcut icon" href="favicon.png">
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

    <!-- Select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <!-- IonIcons -->
    <link href="https://unpkg.com/ionicons@4.4.6/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.4.6/dist/ionicons.js"></script>

    <?php
    //Sweet alert 2
    echo $this->Html->script('lib/sweetalert2/sweetalert2.all.js');
    echo $this->Html->script('lib/sweetalert2/promise.min.js');
    ?>

    <!-- Select molón -->
    <script src="https://unpkg.com/tippy.js@3/dist/tippy.all.min.js"></script>

    <!-- Tooltipster -->
    <?php
    echo $this->Html->css('../js/lib/tooltipster-master/dist/css/tooltipster.bundle.min.css');
    echo $this->Html->css('../js/lib/tooltipster-master/dist/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-punk.min.css');
    echo $this->Html->script('lib/tooltipster-master/dist/js/tooltipster.bundle.min.js');
    ?>

    <?php echo $this->Html->script('app-script.js'); ?>
</head>

<div id="container">
    <?php echo $this->fetch('header'); ?>
    <?php echo $this->fetch('content'); ?>
</div>

<?php echo $this->Html->script('../css/lib/foundation-6.4.2/js/vendor/foundation.min.js'); ?>
</body>
</html>
