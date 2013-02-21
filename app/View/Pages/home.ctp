<div class="loginForm">
<?php echo $this->Form->create('login'); ?>
<?php
echo $this->Form->input('username', array('class' => 'inputField'));
echo $this->Form->input('password', array('class' => 'inputField'));
?>

<?php echo $this->Form->end('Login'); ?>
</div>