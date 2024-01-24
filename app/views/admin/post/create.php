<?php require_once APPROOT."/views/inc/header.php"?>
<?php require_once APPROOT."/views/inc/nav.php"?>
<div class="container mt-3 ">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <?php flash('post_create_fail'); ?>
            <h1 class="text-center text-info">Create a Post</h1>
            <div class="card border-0 shadow p-5">
                <form action="<?=URLROOT."post/create"?>" method="post" enctype="multipart/form-data">
                    <div class="d-flex">
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-control" name="category" id="category">
                                <?php foreach ($data['catData'] as $title) :?>
                                    <option value="<?=$title->id?>"><?= $title->name?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="mb-3 ms-5">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control <?= !empty($data['password_err']) ? 'is-invalid' :'' ?>" id="image" name="image">
                            <div class="text-danger"><?= !empty($data['image_err']) ? $data['image_err'] :'' ?></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control <?= !empty($data['title_err']) ? 'is-invalid' :'' ?>" id="title" name="title">
                        <div class="text-danger"><?= !empty($data['title_err']) ? $data['title_err'] :'' ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label ">Description</label>
                        <textarea class="form-control" id="description" class="p-3" name="description"  rows="3"></textarea>
                        <div class="text-danger"><?= !empty($data['description_err']) ? $data['description_err'] :'' ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label ">Content</label>
                        <textarea class="form-control" id="content" class="p-3" name="content" cols="80" rows="6"></textarea>
                        <div class="text-danger"><?= !empty($data['content_err']) ? $data['content_err'] :'' ?></div>
                    </div>
                    <div class="float-end mt-3">
                        <div class="">
                            <button type="submit" class="btn me-2 btn-outline-secondary">Cancel</button>
                            <button type="submit" class="btn btn-outline-info">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once APPROOT."/views/inc/footer.php"?>

