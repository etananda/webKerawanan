<?php

namespace App\Controllers;

class Data extends BaseController
{
    public function __construct()
    {
        helper('form');
    }
    public function index()
    {
        $dataModel = new \App\Models\DataModel();

        $data = $dataModel->select('*')
            ->join('master_data', 'data.id_master_data=master_data.id')
            ->orderBy('data.id_master_data', 'asc')
            ->get();
        return view('data/index', [
            'data' => $data,
        ]);
    }

    public function import()
    {
        if ($this->request->getPost()) {
            $fileName = $_FILES["csv"]["tmp_name"];

            if ($_FILES['csv']['size'] > 0) {
                $file = fopen($fileName, "r");

                $modelMasterData = new \App\models\MasterDataModel();
                $dataMaster = [
                    'nama' => $this->request->getPost('nama')
                ];

                $modelMasterData->save($dataMaster);
                $id_masterData = $modelMasterData->insertID();

                $modelData = new \App\Models\DataModel();

                $builder = $modelData->builder();

                $data = array();

                while (!feof($file)) {
                    $column = fgetcsv($file, 1000, ";");

                    $jumlah_desa = $column[0];
                    $kecamatan = $column[1];
                    $nilai = $column[2];

                    $row = [
                        'id_master_data' => $id_masterData,
                        'jumlah_desa' => $jumlah_desa,
                        'kecamatan' => $kecamatan,
                        'nilai' => $nilai,
                    ];

                    array_push($data, $row);
                }

                $builder->insertBatch($data);
                fclose($file);
            }

            return redirect()->to(site_url('Data/index'));
        }
        return view('data/import');
    }
}
