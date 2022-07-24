<?php
namespace App\Controller;

use App\Model\UserModel;
use DOMDocument;

require_once('Model/UserModel.php');


class FileController 
{
    protected $model;

    public function __construct()
    {
        $this->model = new UserModel();   
    }

    public function create()
    {
        session_start();

        if ($_POST) {
                    # code...
            $xmlFile = new DOMDocument('1.0', 'utf-8');
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
            
            $film->appendChild($realisator = $xmlFile->createElement('realisateur'));
            $realisator->appendChild(
                $xmlFile->createElement('prenom', $_POST['rfirstname'])
            );
            $realisator->appendChild(
                $xmlFile->createElement('nom', $_POST['rlastname'])
            );

            $film->appendChild($actors = $xmlFile->createElement('acteurs'));
            $actors->appendChild($actor = $xmlFile->createElement('acteur'));
            $actor->appendChild(
                $xmlFile->createElement('prenom', $_POST['rfirstname'])
            );
            $actor->appendChild(
                $xmlFile->createElement('nom', $_POST['rlastname'])
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

            require('View/home.php');
        }
        else {
            require('View/movie.php');
        }
    }
}