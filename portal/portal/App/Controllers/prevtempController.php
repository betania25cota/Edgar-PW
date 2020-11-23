<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\noticia;

class previsaotempoController extends Controller {
    
    public function index() {
        //$clients = Clients::getAll();
        //$this->view('clients', ['clients' -> $clients]);
    }
    
    public function previsaotempo($titulo) {
        $noticiaModel = new noticia();
        $noticia = $noticiaModel->getByTituloUrl($titulo);

        $this->view('previsão do tempo', ['noticia' -> $noticia]);
    }
}