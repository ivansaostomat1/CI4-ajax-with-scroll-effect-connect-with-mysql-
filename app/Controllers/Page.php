<?php namespace App\Controllers;

use App\Models\MobilModel;

class Page extends BaseController
{
    public function about()
    {
        echo view("about");
    }

    public function contact()
    {
        echo view("contact");
    }

    public function faqs()
    {
        echo view("faqs");
    }

    public function catalog()
    {
        $model = new MobilModel();
        $data['mobils'] = $model->findAll();
        echo view("catalog", $data);
    }

    public function support()
    {
        echo view("support");
    }
}
