<?php


namespace src\tienda_virtual\controllers\backoffice\categories;


use src\tienda_virtual\controllers\backoffice\ABMController;

class SubCategoriaController extends ABMController
{
    public function __construct()
    {
        parent::__construct("SubCategoriaService", "backoffice.abm");
    }
}