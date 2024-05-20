<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\FlowerModel;
use App\Models\DataModel;
use CodeIgniter\I18n\Time;

class FlowerController extends BaseController
{
    public function index()
    {
        $flower=new FlowerModel();
        $data['flori']=$flower->findAll();
        return view('flori',$data);
    }
    public function add()
    {
        $data = [
        "nume" => "trandafiri",
        "marime" => "mari",
        "culoare" => "rosii",
         "pret"=>"100"
        ];		
        $flower = new FlowerModel();
        $flower->insert($data); 
        return redirect()->to( base_url() );
    }
    public function edit()
    {
        $data = [
        "nume" => "Albastrele",
        "marime" => "mici",
        "culoare" => "albastre",
                                "pret"=>"50"
        ];
        $flower = new FlowerModel();
        $flower->update(7, $data); 
        return redirect()->to( base_url() );
    }

public function delete()
    {
        $flower = new FlowerModel();
        $flower->delete(7);
        return redirect()->to( base_url() );
    }
}

