<?php

require_once __DIR__ . '/vendor/autoload.php';

use Database\MySQL;

require 'page/template-start.php';
require 'page/createPostModal.php';

// html code bellow

$data = MySQL::getInstance()->getPosts();

foreach ($data as $post) {
    ?>
    <br>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title"><?php echo ($post["title"]); ?></h5>
        </div>

        <div class="card-body">
            <p class="card-text"><?php echo ($post["description"]); ?></p>
        </div>

        <div class="card-footer">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-warning btn-sm">Post</button>
                </div>
                <div class="col-6">
                    <form action="methodDelete/deletePost.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo ($post["id"]); ?>">

                        <button type="submit" class="btn btn-danger btn-sm float-right">Delete</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
<?php
}

echo '<br>';

require 'page/template-end.php';
?>