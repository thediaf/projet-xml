<?php ob_start() ?> 

<div class="mx-auto my-6 p-4 max-w-3xl bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
    <form method="post" action="../index.php?action=examen">
        <h5 class="text-xl m-2 font-medium text-gray-900 dark:text-white">Ajouter un examen</h5>
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
                <label for="code">Code</label>
                <input type="text" id="code" name="code" 
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                        border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                        focus:border-blue-600 peer"
                >
            </div>
        </div>

        <fieldset class="field">
            <legend class="legend">Date:</legend>
            <div class="my-3 grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <label for="day" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                        Jour
                    </label>
                    <select id="day" name="day"
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
        </fieldset>
        
        <fieldset class="field">
            <legend class="legend">Questions:</legend>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <label for="question1">Question 1:</label>
                    <input type="text" id="question1" name="question1" 
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer"
                    >   
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="question2">Question 2:</label>
                    <input type="text" id="question2" name="question2"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer"
                    >
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="question3">Question 3:</label>
                    <input type="text" id="question3" name="question3" 
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer"
                    >   
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="question4">Question 4:</label>
                    <input type="text" id="question4" name="question4" 
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer"
                    >   
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="question5">Question 5:</label>
                    <input type="text" id="question5" name="question5"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer"
                    >
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="question6">Question 6:</label>
                    <input type="text" id="question6" name="question6" 
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer"
                    >   
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="question7">Question 7:</label>
                    <input type="text" id="question7" name="question7" 
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer"
                    >   
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="question8">Question 8:</label>
                    <input type="text" id="question8" name="question8"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer"
                    >
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="question9">Question 9:</label>
                    <input type="text" id="question9" name="question9" 
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer"
                    >   
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="question10">Question 10:</label>
                    <input type="text" id="question10" name="question10" 
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer"
                    >   
                </div>
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