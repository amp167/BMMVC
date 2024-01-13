<?php require_once APPROOT."/views/inc/header.php"?>
<?php require_once APPROOT."/views/inc/nav.php"?>
<div class="container mt-5 ">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card p-5 bg-light">
                <h2 class="text-center">Register to Post</h2>
                <form action="<?=URLROOT."user/register"?>" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">User Name</label>
                        <input type="text" class="form-control <?= !empty($data['name_err']) ? 'is-invalid' :'' ?>" id="username" name="username" >
                        <div class="text-danger"><?= !empty($data['name_err']) ? $data['name_err'] :'' ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label ">Email address</label>
                        <input type="email" class="form-control <?= !empty($data['email_err']) ? 'is-invalid' :'' ?>" id="email" name="email">
                        <div class="text-danger"><?= !empty($data['email_err']) ? $data['email_err'] :'' ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control <?= !empty($data['password_err']) ? 'is-invalid' :'' ?>" id="password" name="password">
                        <div class="text-danger"><?= !empty($data['password_err']) ? $data['password_err'] :'' ?></div>
                    </div>
                    <div class="mb-4">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control <?= !empty($data['confirm_password_err']) ? 'is-invalid' :'' ?>" id="confirm_password" name="confirm_password" >
                        <div class="text-danger"><?= !empty($data['confirm_password_err']) ? $data['confirm_password_err'] :'' ?></div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="<?= URLROOT."user/login"?>" class="text-decoration-none">Already Register? Please login!</a>
                        <div class="">
                            <button type="submit" class="btn me-2 btn-outline-secondary">Cancel</button>
                            <button type="submit" class="btn btn-outline-secondary">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once APPROOT."/views/inc/footer.php"?>

