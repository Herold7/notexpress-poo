<?php
$pageTitle = 'Add note';

?>

<h1><?= $pageTitle ?></h1>

<div class="p-3 m-0 border-0 bd- m-0 border-0">
    <form action="" method="post" >
        <div class="mb-3">
            <label for="InputTitle1" class="form-label">Titre de la note</label>
            <input type="text" name="title"class="form-control" id="InputTitle1"  aria-describedby="TitleHelp">
        </div>
        <div class="mb-3">
            <label for="InputContent1" class="form-label">Contenu de la note</label>
            <textarea name="content" cols="30" rows="10" class="form-control" id="InputContent1"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
    </form>
</div>
