<?php require_once APPROOT."/views/inc/header.php"?>
<?php require_once APPROOT."/views/inc/nav.php"?>
    <div class="container-fluids mt-5">
        <div class="row ">
            <div class="col-3 ">
                <div class="card rounded-0">
                    <div class="card-header"><h1 class="text-info">Category</h1></div>
                    <div class="card-body">
                        <a href="<?=URLROOT."post/create"?>" class="btn btn-info my-3 text-white">Create a post</a>
                        <ul class="list-group rounded-0">
                            <li class="list-group-item d-flex justify-content-between">
                                <a href="<?=URLROOT."post/home"?>" class="text-decoration-none text-dark">ALL</a>
                            </li>
                            <?php foreach ($data['category'] as $category) : ?>
                                <li class="list-group-item d-flex justify-content-between">
                                    <a href="<?=URLROOT."post/category/".$category->id?>" class="text-decoration-none text-dark"><?= $category->name?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-5 offset-2 align-self-center">
            <?php foreach ($data['post'] as $post) : ?>
                <div class="card my-4">
                    <div class="card-header d-flex justify-content-between">
                        <h1 class=""><?=$post->title?></h1>
                        <div class="dropdown">
                            <button class="bg-transparent border-0 " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <h3 class="text-secondary">....</h3>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                <li><a class="dropdown-item" href="<?=URLROOT."post/delete/".$post->id?>">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <p class="card-body"><?=$post->description?></p>
                </div>
            <?php endforeach;?>
            </div>
        </div>
    </div>
<?php require_once APPROOT."/views/inc/footer.php"?>