<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>

    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('cake.generic', 'bootstrap','custom');
    echo $this->Html->script(array('jquery'));

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
<div id="wrapper">
    <?php echo $this->Element('header'); ?>

</div>


</body>
</html>