<!doctype html>
<html lang="en">
  <head>
    
    <!-- Meta Tag -->
    <?= $this->include('includes/meta'); ?>

    <!-- Style -->
    <?= $this->include('includes/style'); ?>

    <title><?= $this->renderSection('title'); ?></title>
  </head>
  <body>
    
    <!-- Navbar -->
    <?= $this->include('includes/navbar'); ?>
    
    <!-- Content -->
    <?= $this->renderSection('content'); ?>

    <!-- Script -->
    <?= $this->include('includes/script'); ?>

  </body>
</html>