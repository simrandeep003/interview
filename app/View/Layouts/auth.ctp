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
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('interview_dev', 'Interview Schedular: the perfect interview scheduling software');
$cakeVersion = __d('interview_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
  <?php echo $this->Html->charset(); ?>
  <title>
    <?php echo $cakeDescription ?>:
    <?php echo $title_for_layout; ?>
  </title>
  <?php
    echo $this->Html->meta('icon');
    echo $this->fetch('meta');

    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('auth');
    echo $this->fetch('css');

    echo $this->Html->script('jquery-1.11.1.min');
    echo $this->Html->script('default');
    echo $this->fetch('script');
  ?>
  <script type="text/javascript">
    var WEBROOT = '<?php echo $this->request->webroot; ?>';
  </script>
</head>
<body>

  <div id="content">

    <?php if ($this->Session->check('Message.flash')): ?>
      <div class="alert alert-info">
        <?php echo $this->Session->flash(); ?>
      </div>
    <?php endif; ?>

    <?php echo $this->fetch('content'); ?>
  </div>

  <div id="footer">
    <div class="container">
      <p class="text-muted">Copyright ©2014 Interview Scheduler</p>
    </div>
  </div>

</body>
</html>
