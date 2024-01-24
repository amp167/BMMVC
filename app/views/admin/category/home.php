<?php require_once APPROOT."/views/inc/header.php"?>
<?php require_once APPROOT."/views/inc/nav.php"?>
<div class="container-fluid mt-5">
    <div class="row ">
        <div class="col-3 ">
            <div class="card rounded-0">
                <div class="card-header"><h1 class="text-info">Category</h1></div>
                <div class="card-body">
                    <ul class="list-group rounded-0">
                        <?php foreach ($data['cats'] as $category) : ?>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><?= $category->name?></span>
                            <span>
                                <a href="<?= URLROOT.'category/edit/'.$category->id?>"><i class="fa fa-edit me-2 text-info"></i></a>
                                <a href="<?= URLROOT.'category/delete/'.$category->id?>"><i class="fa fa-trash text-danger"></i></a>
                            </span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-5 offset-2 align-self-center">
            <h1 class="text-center text-info mb-5">Create Category</h1>
            <div class="card p-5 bg-light">
                <?php flash("Category_created"); ?>
                <?php flash("Category_create_fail"); ?>
                <form action="<?=URLROOT."category/create"?>" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label ">Category Name</label>
                        <input type="text" class="form-control <?= !empty($data['name_err']) ? 'is-invalid' :'' ?>" id="name" name="name">
                        <div class="text-danger"><?= !empty($data['name_err']) ? $data['name_err'] :'' ?></div>
                    </div>
                    <div class="">
                        <div class="float-end">
                            <a class="btn me-2 btn-outline-secondary" href="<?=URLROOT."admin/home"?>">Cancel</a>
                            <button type="submit" class="btn btn-outline-info">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once APPROOT."/views/inc/footer.php"?>

