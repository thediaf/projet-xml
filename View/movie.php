<?php ob_start() ?> 

<div class="mx-auto my-6 p-4 max-w-3xl bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
    <form method="post" action="../index.php?action=movie">
        <h5 class="text-xl m-2 font-medium text-gray-900 dark:text-white">Ajouter un film</h5>
        <div class="grid md:grid-cols-2 md:gap-6 ">    
            <div class="relative z-0 mb-6 w-full group">
                <label for="titre">Titre</label>
                <input type="text" id="titre" name="title"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                        border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                        focus:border-blue-600 peer" 
                >
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <label for="duration">Duree</label>
                <input type="text" id="duration" name="duration" 
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                        border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                        focus:border-blue-600 peer"
                >
            </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">    
            <div class="relative z-0 mb-6 w-full group">
                <label for="genre">Genre</label>
                <input type="text" id="genre" name="genre" 
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                        border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                        focus:border-blue-600 peer" 
                >
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <label for="language">langue</label>
                <input type="text" id="language" name="language"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                        border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                        focus:border-blue-600 peer" 
                >
            </div>

            <div class="relative z-0 mb-6 w-full group">
                <label for="year">Annee production</label>
                <input type="text" id="year" name="year"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                        border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                        focus:border-blue-600 peer" 
                >
            </div>
        </div>
        <fieldset class="field">
            <legend class="legend">Realisateur:</legend>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <label for="rlname">Nom:</label>
                    <input type="text" id="rlname" name="rlastname" 
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer"
                    >   
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="rfname">Prenom</label>
                    <input type="text" id="rfname" name="rfirstname"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer"
                    >
                </div>
            </div>
        </fieldset>
        <fieldset class="field">
            <legend class="legend">Acteur:</legend>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <label for="alname">Nom:</label>
                    <input type="text" id="alname" name="alastname"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer"
                    >
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="afname">Prenom</label>
                    <input type="text" id="afname" name="afirstname"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer"
                    >
                </div>
        </fieldset>
        
        <fieldset class="field">
            <legend class="legend">Description:</legend>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <label for="press">Presse:</label>
                    <input type="text" id="press" name="press"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer"
                    >
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="spectator">Spectateur</label>
                    <input type="text" id="spectator" name="spectator"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer"
                    >
                </div>
            </div>

            <div class="my-3 grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                        Jour
                    </label>
                    <select id="countries" name="day"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer"
                    >
                        <option value="Lun">Lundi</option>
                        <option value="Mar">Mardi</option>
                        <option value="Mer">Mercredi</option>
                        <option value="Jeu">Jeudi</option>
                        <option value="Ven">Vendredi</option>
                        <option value="Sam">Samedi</option>
                        <option value="Dim">Dimanche</option>
                    </select>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="hour">Heure</label><br>
                    <input type="time" id="hour" name="hour">
                </div>
            </div>

            <div class="relative z-0 mb-6 w-full group">
                <label for="spectator">Texte</label>
                <textarea name="text" id="" cols="30" rows="10"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                        border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                        focus:border-blue-600 peer"
                ></textarea>
            </div>
            
        </fieldset>
        <button type="submit" class="text-white bg-blue-700 h-10 hover:bg-blue-800 focus:ring-4 focus:outline-none 
                focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
        >
            Enregistrer
        </button>
    </form>
</div>
            
<?php $content = ob_get_clean(); ?>
<?php require('View/template.php'); ?>