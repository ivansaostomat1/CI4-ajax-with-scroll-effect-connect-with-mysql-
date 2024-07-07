<?php

namespace App\Controllers;

use App\Models\MobilModel;

class Home extends BaseController
{
    public function index()
    {
        // Load the model
        $mobilModel = new MobilModel();

        // Fetch all the mobils from the database
        $data['mobils'] = $mobilModel->findAll();

        // Load the view and pass the data
        return view('index', $data);
    }
}