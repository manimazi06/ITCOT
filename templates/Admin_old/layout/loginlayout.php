<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
      ITCOT : Admin
    </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= $this->Url->build('/') ?>tanfinet.png" type="image/x-icon">
	<?php echo $this->Html->css('admin/style.min');?>
    <?php echo $this->Html->css('admin/main');?>
    <?php echo $this->Html->script('admin/libs/jquery/dist/jquery.min');?>
    <?php echo $this->Html->script('admin/libs/bootstrap/dist/js/bootstrap.bundle.min');?>
</head>
<body style=" background-color: #fff;
	 background-image: url('images/bg-img.jpg') !important;
	 background-position: center;
	 background-size: cover;
	 background-repeat: no-repeat;">
	
   <div id="main-wrapper">
        <!-- Login box.scss -->
        <!-- -------------------------------------------------------------- -->
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
        <!-- -------------------------------------------------------------- -->
  
    </div> 
</body>
<script>
        $(".preloader").fadeOut();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    </script>
</html>
