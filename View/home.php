<?php ob_start() ?> 

<div class="grid grid-cols-3 gap-3">
    <?php
    if (file_exists('cinema.xml')) {
        $xml = simplexml_load_file('cinema.xml');
        foreach ($xml->film as $film) {?>
            <a href="../index.php?action=showMovie" class="block p-6 m-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                <?= $film->titre ?>
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                <?= $film->description->texte ?>
            </p>
        </a>
        <?php
        }
    }
    if (file_exists('examen.xml')) {
        $xml = simplexml_load_file('examen.xml');
        // foreach ($xml->examen as $examen) {?>
            <a href="../index.php?action=showExamen" class="block p-6 m-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                <?= $xml->titre ?>
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                <?= $xml->date['mois'] ?> <?= $xml->date['annee'] ?>
            </p>
        </a>
        <?php
        // }
    }
    if (file_exists('restaurant.xml')) {
        $xml = simplexml_load_file('restaurant.xml');
        // var_dump($xml);
        foreach ($xml as $restautant) {?>
            <a href="../index.php?action=showRestau" class="block p-6 m-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                <?= $restautant->restaurant->fiche->coordonnees->nom ?>
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                De <?= $restautant->restaurant->fiche->coordonnees->restaurateur ?> a
                <?= $restautant->restaurant->fiche->coordonnees->adresse ?>
            </p>
        </a>
        <?php
        }
    }
    ?>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('View/template.php'); ?>