<?php
$pageTitle = 'Add note';
var_dump($_POST);

?>

<h1><?= $pageTitle ?></h1>

<div class="p-3 m-0 border-0 bd- m-0 border-0">
    <form action="" method="post" >
        <div class="mb-3">
            <label for="InputTitle1" class="form-label">Title</label>
            <input type="text" name="title"class="form-control" id="InputTitle1"  aria-describedby="TitleHelp">
        </div>
        <div class="mb-3">
            <label for="InputContent1" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="InputContent1" >
        </div>
        <div class="mb-3">
            <label for="InputUser1" class="form-label">User</label>
            <input type="number" name="user" class="form-control" id="InputUser1" >
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
    </form>
</div>