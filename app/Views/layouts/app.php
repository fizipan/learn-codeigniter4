<!doctype html>
<html lang="en">
  <head>
    
    <!-- Meta Tag -->
    <?= $this->include('includes/meta'); ?>

    <!-- Style -->
    <?= $this->renderSection('start-style'); ?>
    <?= $this->include('includes/style'); ?>
    <?= $this->renderSection('end-style'); ?>

    <title><?= $this->renderSection('title'); ?></title>
  </head>
  <body>
    
    <!-- Navbar -->
    <?= $this->include('includes/navbar'); ?>
    
    <!-- Content -->
    <?= $this->renderSection('content'); ?>

    <!-- Script -->
    <?= $this->renderSection('start-script'); ?>
    <?= $this->include('includes/script'); ?>
    <?= $this->renderSection('end-script'); ?>

  </body>
</html>