<?php require_once APPROOT."/views/inc/header.php"?>
<?php require_once APPROOT."/views/inc/nav.php"?>
<?php flash('login_success'); ?>
    <h1 class="text-danger text-center mt-5">Hello <?=getSessionUser() ? getSessionUser()->name : '' ?> </h1>
<?php require_once APPROOT."/views/inc/footer.php"?>

