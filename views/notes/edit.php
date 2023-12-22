<?php
$pageTitle = 'Edit note';

use models\Note;

$noteId = $_GET['slug'];

$note = new Note();
$note->find($noteId);

?>

<h1><?= $pageTitle ?></h1>

<div class="p-3 m-0 border-0 bd- m-0 border-0">
    <form action="/note/edit" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Titre de la note</label>
            <input type="text" name="title" id="title" class="form-control" value="<?= $note->getTitle() ?>">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenu de la note</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control"><?= $note->getContent() ?></textarea>
        </div>
        <input type="hidden" id="slug" name="slug" value="<?= $note->getSlug() ?>">
        <input type="submit" name="submit" value="Enregister" class="btn btn-success">
    </form>
</div>