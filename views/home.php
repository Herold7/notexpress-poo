<?php 
$pageTitle = 'Homepage';

use models\Note;

$note = new Note();
$note->setTitle('My first note')
    ->setContent('The first note')
    ->setSlug('1')
    ;

echo $note->getTitle();
echo $note->getContent();
echo $note->getSlug();

?>

<h1><?= $pageTitle ?></h1>