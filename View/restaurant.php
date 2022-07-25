<?php ob_start() ?> 

<div class="mx-auto my-6 p-4 max-w-3xl bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
    <form method="post" action="../index.php?action=restaurant">
        <h5 class="text-xl m-2 font-medium text-gray-900 dark:text-white">Ajouter un restaurant</h5>
        
        <fieldset class="field">
            <legend class="legend">Coordonnee:</legend>
            <div class="grid md:grid-cols-2 md:gap-6 ">    
                <div class="relative z-0 mb-6 w-full group">
                    <label for="restname">Nom</label>
                    <input type="text" id="restname" name="restname"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer" 
                    >
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="address">Adresse</label>
                    <input type="text" id="address" name="address" 
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer"
                    >
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">    
                <div class="relative z-0 mb-6 w-full group">
                    <label for="director">Restaurateur</label>
                    <input type="text" id="director" name="director" 
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer" 
                    >
                </div>
            </div>
            <fieldset class="field">
                <legend class="legend">Description:</legend>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="list">Liste:</label>
                        <input type="text" id="list" name="list" 
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                focus:border-blue-600 peer"
                        >   
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="important">Partie important</label>
                        <input type="text" id="important" name="important"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                focus:border-blue-600 peer"
                        >
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="image">Image</label>
                        <input type="text" id="image" name="image"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                focus:border-blue-600 peer"
                        >
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="imagePosition">Image position</label>
                        <select id="imagePosition" name="imagePosition"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                focus:border-blue-600 peer"
                        >
                            <option value="gauche">Gauche</option>
                            <option value="centre">Centre</option>
                            <option value="droit">Droit</option>
                        </select>
                    </div>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="text">Texte</label>
                    <textarea type="text" id="text" name="text" 
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                            border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                            focus:border-blue-600 peer"
                    >  </textarea> 
                </div>
                    
            </fieldset>
        </fieldset>
        
        <fieldset class="field">
            <legend class="legend">Menus:</legend>
            <fieldset class="field">
                <legend class="legend">Menu 1:</legend>
                <div class="grid md:grid-cols-2 md:gap-6 ">    
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="menu1Name">Nom</label>
                        <input type="text" id="menu1Name" name="menu1Name"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                focus:border-blue-600 peer" 
                        >
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="menu1part" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                            Partie
                        </label>
                        <select id="menu1part" name="menu1part"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                focus:border-blue-600 peer"
                        >
                            <option value="plat">Plat</option>
                            <option value="entrée">Entrée</option>
                            <option value="dessert">Dessert</option>
                            <option value="fromage">Fromage</option>
                        </select>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="menu1price">Prix</label>
                        <input type="text" id="menu1price" name="menu1price"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                focus:border-blue-600 peer"
                        >
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="menu1devise">Devise</label>
                        <input type="text" id="menu1devise" name="menu1devise"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                focus:border-blue-600 peer"
                        >
                    </div>
                </div>
                <fieldset class="field">
                    <legend class="legend">Description:</legend>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <label for="menu1important">Partie important</label>
                            <input type="text" id="menu1important" name="menu1important"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                    border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                    focus:border-blue-600 peer"
                            >
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <label for="menu1image">Image</label>
                            <input type="text" id="menu1image" name="menu1image"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                    border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                    focus:border-blue-600 peer"
                            >
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                        <label for="menu2imagePosition">Image position</label>
                        <select id="menu2imagePosition" name="menu1imagePosition"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                focus:border-blue-600 peer"
                        >
                            <option value="gauche">Gauche</option>
                            <option value="centre">Centre</option>
                            <option value="droit">Droit</option>
                        </select>
                    </div>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="menu1desc">Texte</label>
                        <textarea id="menu1desc" name="menu1desc" 
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                focus:border-blue-600 peer"
                        >  </textarea> 
                    </div>
                </fieldset>
            </fieldset>
            <fieldset class="field">
                <legend class="legend">Menu 2:</legend>
                <div class="grid md:grid-cols-2 md:gap-6 ">    
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="menu2Name">Nom</label>
                        <input type="text" id="menu2Name" name="menu2name"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                focus:border-blue-600 peer" 
                        >
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="menu2part" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                            Partie
                        </label>
                        <select id="menu2part" name="menu2part"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                focus:border-blue-600 peer"
                        >
                            <option value="plat">Plat</option>
                            <option value="entrée">Entrée</option>
                            <option value="dessert">Dessert</option>
                            <option value="fromage">Fromage</option>
                        </select>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="menu2price">Prix</label>
                        <input type="text" id="menu2price" name="menu2price"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                focus:border-blue-600 peer"
                        >
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="menu2devise">Devise</label>
                        <input type="text" id="menu2devise" name="menu2devise"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                focus:border-blue-600 peer"
                        >
                    </div>
                </div>
                <fieldset class="field">
                    <legend class="legend">Description:</legend>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <label for="menu2important">Partie important</label>
                            <input type="text" id="menu2important" name="menu2important"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                    border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                    focus:border-blue-600 peer"
                            >
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <label for="menu2image">Image</label>
                            <input type="text" id="menu2image" name="menu2image"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                    border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                    focus:border-blue-600 peer"
                            >
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                        <label for="menu2imagePosition">Image position</label>
                        <select id="menu2imagePosition" name="menu2imagePosition"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                focus:border-blue-600 peer"
                        >
                            <option value="gauche">Gauche</option>
                            <option value="centre">Centre</option>
                            <option value="droit">Droit</option>
                        </select>
                    </div>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="menu2desc">Texte</label>
                        <textarea id="menu2desc" name="menu2desc" 
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                                border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                                focus:border-blue-600 peer"
                        >  </textarea> 
                    </div>
                </fieldset>
            </fieldset>
            <div class="relative z-0 mb-6 w-full group">
                <label for="service">Service</label>
                <textarea id="service" name="service" 
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                        border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                        focus:border-blue-600 peer"
                >  </textarea> 
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