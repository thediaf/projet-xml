<?php ob_start() ?> 

<div class="mx-auto my-6 p-4 max-w-3xl bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
<?php if (file_exists('restaurant.xml')) {
        $xml = simplexml_load_file('restaurant.xml');
        // var_dump($xml);
        foreach ($xml as $restautant) { ?>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                <?= $restautant->restaurant->fiche->coordonnees->nom ?>
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                Restaurateur: <?= $restautant->restaurant->fiche->coordonnees->restaurateur ?><br>
                Adresse: <?= $restautant->restaurant->fiche->coordonnees->adresse ?>
            </p>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                Description: <?= $restautant->restaurant->fiche->coordonnees->description->paragraphe ?> a
            </p>
            <fieldset class="field">
        <legend class="legend">Menus:</legend>
        
    </fieldset>
        <?php
        }
    }?>

</div>
            
<?php $content = ob_get_clean(); ?>
<?php require('View/template.php'); ?>