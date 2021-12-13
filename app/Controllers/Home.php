<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $laptopModel = model('App\Models\LaptopModel', false);

        $data = [
            "judul_halaman" => "home",
            "halaman_aktif" => "index"
        ];

        echo view('./template/header');
        echo view('./template/body', $data);
        echo view('./template/footer');
    }

    public function laptop()
    {

        $laptopModel = model('App\Models\LaptopModel', false);
        helper('date');

        $dataLaptop['dataLaptop'] = $laptopModel->findAll();

        $data = [
            "judul_halaman" => "laptop",
            "halaman_aktif" => "laptop"
        ];

        echo view('./template/header');
        echo view('./template/laptop', $dataLaptop);
        echo view('./template/footer');
    }

    public function accessories()
    {

        $accessoriesModel = model('App\Models\AccessoriesModel', false);
        helper('date');

        $dataAccessories['dataAccessories'] = $accessoriesModel->findAll();

        $data = [
            "judul_halaman" => "accessories",
            "halaman_aktif" => "accessories"
        ];

        echo view('./template/header');
        echo view('./template/accessories', $dataAccessories);
        echo view('./template/footer');
    }

    public function printer()
    {

        $printerModel = model('App\Models\PrinterModel', false);
        helper('date');

        $dataPrinter['dataPrinter'] = $printerModel->findAll();

        $data = [
            "judul_halaman" => "printer",
            "halaman_aktif" => "printer"
        ];

        echo view('./template/header');
        echo view('./template/printer', $dataPrinter);
        echo view('./template/footer');
    }
}
