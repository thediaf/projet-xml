<?php ob_start() ?> 

<div class="mx-auto my-6 p-4 max-w-3xl bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
<?php if (file_exists('examen.xml')) {
    $xml = simplexml_load_file('examen.xml');
?>
           
    <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">
            <?= $xml->titre ?>
        </h5>
        <p class="font-normal text-center text-gray-700 dark:text-gray-400">
            Date: <?= $xml->date['mois'] ?> <?= $xml->date['annee'] ?>
        </p>
    <fieldset class="field">
        <legend class="legend">Questions:</legend>
        <?php
            foreach ($xml->questions->question as $question) {
        ?>
            <p class="font-normal text-gray-700 dark:text-gray-400"><?= $question->partie ?></p>
        <?php
            }
        ?>
    </fieldset>
        
 <?php }?>
</div>
            
<?php $content = ob_get_clean(); ?>
<?php require('View/template.php'); ?>