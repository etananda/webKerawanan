<?php

namespace App\Controllers;

class JumlahDesa extends BaseController
{
    public function __construct()
    {
        helper('form');
    }
    public function index()
    {
        $model = new \App\Models\JumlahDesaModel();
        $jumlahDesa = $model->findAll();

        return view('jumlah-desa/index', [
            'jumlahDesa' => $jumlahDesa,
        ]);
    }

    public function import()
    {
        if ($this->request->getPost()) {
            $fileName = $_FILES["csv"]["tmp_name"];

            if ($_FILES['csv']['size'] > 0) {
                $file = fopen($fileName, "r");

                $model = new \App\Models\JumlahDesaModel();

                $builder = $model->builder();

                $data = array();

                while (!feof($file)) {
                    $column = fgetcsv($file, 1000, ";");

                    $kecamatan = $column[0];
                    $jumlah_desa = $column[1];

                    $row = [
                        'kecamatan' => $kecamatan,
                        'jumlah_desa' => $jumlah_desa,
                    ];

                    array_push($data, $row);
                }

                $builder->insertBatch($data);
                fclose($file);
            }

            return redirect()->to(site_url('JumlahDesa/index'));
        }
        return view('jumlah-desa/import');
    }
}
