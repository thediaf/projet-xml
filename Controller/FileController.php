<?php
namespace App\Controller;

use App\Model\UserModel;
use DOMDocument;
use DOMImplementation;

require_once('Model/UserModel.php');


class FileController 
{
    protected $model;

    public function __construct()
    {
        $this->model = new UserModel();   
    }

    public function movie()
    {
        session_start();

        if ($_POST) {

                    # code...
            $xmlFile = new DOMDocument('1.0', 'utf-8');
            $imp = new DOMImplementation;

            $xmlFile->appendChild($imp->createDocumentType('programme', '', 'cinema.dtd'));
            $xmlFile->appendChild($programme = $xmlFile->createElement('programme'));
            
            $programme->appendChild($film = $xmlFile->createElement('film'));

            $film->appendChild(
                $xmlFile->createElement('titre', $_POST['title'])
            );
            $film->appendChild(
                $xmlFile->createElement('duree', $_POST['duration'])
            );
            $film->appendChild(
                $xmlFile->createElement('genre', $_POST['genre'])
            );
            $film->setAttribute('annee_production', $_POST['year']);
            
            $film->appendChild($realisator = $xmlFile->createElement('realisateur'));
            $realisator->appendChild(
                $xmlFile->createElement('nom', $_POST['rlastname'])
            );
            $realisator->appendChild(
                $xmlFile->createElement('prenom', $_POST['rfirstname'])
            );

            $film->appendChild($actors = $xmlFile->createElement('acteurs'));
            $actors->appendChild($actor = $xmlFile->createElement('acteur'));
            $actor->appendChild(
                $xmlFile->createElement('nom', $_POST['rlastname'])
            );
            $actor->appendChild(
                $xmlFile->createElement('prenom', $_POST['rfirstname'])
            );
            
            $film->appendChild(
                $xmlFile->createElement('langue', $_POST['language'])
            );

            $film->appendChild($description = $xmlFile->createElement('description'));
            $description->appendChild(
                $xmlFile->createElement('presse', $_POST['press'])
            );
            $description->appendChild(
                $xmlFile->createElement('spectateur', $_POST['spectator'])
            );
            $description->appendChild(
                $xmlFile->createElement('texte', $_POST['text'])
            );
            $description->appendChild(
                $schedule = $xmlFile->createElement('horaire_projection')
            );
            $schedule->setAttribute('jour', $_POST['day']);
            $schedule->setAttribute('heure', $_POST['hour']);

            $xmlFile->formatOutput = true;
            $xmlFile->save('cinema.xml');
            $documentValid = $xmlFile->validate();
            if ($documentValid) {
                # code...
                var_dump($xmlFile);
            }

            require('View/home.php');
        }
        else {
            require('View/movie.php');
        }
    }

    public function examen()
    {
        session_start();

        if ($_POST) {
                    # code...
            $xmlFile = new DOMDocument('1.0', 'utf-8');
            $imp = new DOMImplementation;

            $xmlFile->appendChild($imp->createDocumentType('examen', '', 'examen.dtd'));
            $xmlFile->appendChild($examen = $xmlFile->createElement('examen'));

            $examen->setAttribute('code', $_POST['code']);
            $examen->appendChild(
                $xmlFile->createElement('titre', $_POST['title'])
            );
            
            $examen->appendChild(
                $date = $xmlFile->createElement('date')
            );
            $date->setAttribute('mois', $_POST['mois']);
            $date->setAttribute('annee', $_POST['annee']);


            $examen->appendChild($questions = $xmlFile->createElement('questions'));
            $questions->appendChild($question1 = $xmlFile->createElement('question'));
            $question1->appendChild(
                $xmlFile->createElement('partie', $_POST['question1'])
            );
            $questions->appendChild($question2 = $xmlFile->createElement('question'));
            $question2->appendChild(
                $xmlFile->createElement('partie', $_POST['question2'])
            );
            $questions->appendChild($question3 = $xmlFile->createElement('question'));
            $question3->appendChild(
                $xmlFile->createElement('partie', $_POST['question3'])
            );
            $questions->appendChild($question4 = $xmlFile->createElement('question'));
            $question4->appendChild(
                $xmlFile->createElement('partie', $_POST['question4'])
            );
            $questions->appendChild($question5 = $xmlFile->createElement('question'));
            $question5->appendChild(
                $xmlFile->createElement('partie', $_POST['question5'])
            );
            $questions->appendChild($question6 = $xmlFile->createElement('question'));
            $question6->appendChild(
                $xmlFile->createElement('partie', $_POST['question6'])
            );
            $questions->appendChild($question7 = $xmlFile->createElement('question'));
            $question7->appendChild(
                $xmlFile->createElement('partie', $_POST['question7'])
            );
            $questions->appendChild($question8 = $xmlFile->createElement('question'));
            $question8->appendChild(
                $xmlFile->createElement('partie', $_POST['question8'])
            );
            $questions->appendChild($question9 = $xmlFile->createElement('question'));
            $question9->appendChild(
                $xmlFile->createElement('partie', $_POST['question9'])
            );
            $questions->appendChild($question10 = $xmlFile->createElement('question'));
            $question10->appendChild(
                $xmlFile->createElement('partie', $_POST['question10'])
            );

            $xmlFile->formatOutput = true;
            $xmlFile->save('examen.xml');


            require('View/home.php');
        }
        else {
            require('View/examen.php');
        }
    }

    public function restaurant()
    {
        session_start();

        if ($_POST) {
                    # code...
            $xmlFile = new DOMDocument('1.0', 'utf-8');            
            $imp = new DOMImplementation;

            $xmlFile->appendChild($imp->createDocumentType('portail', '', 'restaurant.dtd'));

            $xmlFile->appendChild($portail = $xmlFile->createElement('portail'));
            
            $portail->appendChild($restaurants = $xmlFile->createElement('restaurants'));
            $restaurants->appendChild($restaurant = $xmlFile->createElement('restaurant'));
            $restaurant->appendChild($fiche = $xmlFile->createElement('fiche'));

            $fiche->appendChild($coordonnees = $xmlFile->createElement('coordonnees'));
            $coordonnees->appendChild(
                $xmlFile->createElement('nom', $_POST['restname'])
            );
            $coordonnees->appendChild(
                $xmlFile->createElement('adresse', $_POST['address'])
            );
            $coordonnees->appendChild(
                $xmlFile->createElement('restaurateur', $_POST['director'])
            );
            $coordonnees->appendChild(
                $description = $xmlFile->createElement('description')
            );
            $description->appendChild(
                $xmlFile->createElement('liste', $_POST['list'])
            );
            $description->appendChild(
                $xmlFile->createElement('important', $_POST['important'])
            );
            $description->appendChild(
                $paragraphe = $xmlFile->createElement('paragraphe', $_POST['text'])
            );
            if ($_POST['image'] !== null) {
                $paragraphe->appendChild(
                    $image = $xmlFile->createElement('image', $_POST['image'])
                );
                $image->setAttribute('position', $_POST['imagePosition']);
            }


            $fiche->appendChild($carte = $xmlFile->createElement('carte'));
            if (isset($_POST['service'])) {
                $carte->appendChild(
                    $xmlFile->createElement('service', $_POST['service'])
                );
            }
            else {
                $carte->appendChild($menus = $xmlFile->createElement('menus'));
                $menus->appendChild($menu1 = $xmlFile->createElement('menu'));
                $menu1->appendChild(
                    $xmlFile->createElement('nom', $_POST['menu1name'])
                );
                $menu1->setAttribute('prix', $_POST['menu1price']);
                $menu1->setAttribute('devise', $_POST['menu1devise']);
                $menu1->setAttribute('partie', $_POST['menu1part']);
                $menu1->appendChild(
                    $menu1description = $xmlFile->createElement('description_menu')
                );
                $menu1description->appendChild(
                    $xmlFile->createElement('important', $_POST['menu1important'])
                );
                $menu1description->appendChild(
                    $paragraphe = $xmlFile->createElement('paragraphe', $_POST['menu1desc'])
                );
                if ($_POST['menu1image'] !== null) {
                    $paragraphe->appendChild(
                        $menu1image = $xmlFile->createElement('image', $_POST['menu1image'])
                    );
                    $menu1image->setAttribute('position', $_POST['menu1imagePosition']);
                }

                $menus->appendChild($menu2 = $xmlFile->createElement('menu'));
                $menu2->appendChild(
                    $xmlFile->createElement('nom', $_POST['menu2name'])
                );
                $menu2->setAttribute('prix', $_POST['menu2price']);
                $menu2->setAttribute('devise', $_POST['menu2pevise']);
                $menu2->setAttribute('partie', $_POST['menu2part']);
                $menu2->appendChild(
                    $menu2description = $xmlFile->createElement('description_menu')
                );
                $menu2description->appendChild(
                    $xmlFile->createElement('important', $_POST['menu2important'])
                );
                $menu2description->appendChild(
                    $paragraphe = $xmlFile->createElement('paragraphe', $_POST['menu2desc'])
                );
                if ($_POST['menu2image'] !== null) {
                    $paragraphe->appendChild(
                        $menu2image = $xmlFile->createElement('image', $_POST['menu2image'])
                    );
                    $menu2image->setAttribute('position', $_POST['menu2imagePosition']);
                }
            }

            $xmlFile->formatOutput = true;
            $xmlFile->save('restaurant.xml');

            require('View/home.php');
        }
        else {
            require('View/restaurant.php');
        }
    }

    public function showExamen()
    {
        require('View/show_examen.php');
    }

    public function showMovie()
    {
        require('View/show_movie.php');
    }

    public function showRestau()
    {
        require('View/show_restau.php');
    }
}