<html>
<head>
<title> hello</title>
    <?php echo $this->Html->css(array('bootstrap','custom'));?>
    <?php
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
<?php echo $this->element('header'); ?>
<div class="mainContainer">
    <div class="container">
    <?php
    echo $this->fetch('content');
    ?>
    </div>
</div>
<?php echo $this->element('footer'); ?>
</body>
</html>