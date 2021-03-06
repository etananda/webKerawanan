<?php

namespace App\Controllers;

class Maps extends BaseController
{
	public function index()
	{
		helper('form');

		$model = new \App\Models\DataModel();

		$fileName = base_url("maps/kebumen.geojson");
		$file = file_get_contents($fileName);
		$file = json_decode($file);

		$features = $file->features;

		$idMasterData = 5;
		if ($this->request->getPost()) {
			$idMasterData = $this->request->getPost('master');
		}

		foreach ($features as $index => $feature) {
			$jumlah_desa = $feature->properties->desa;
			$data = $model->where('id_master_data', $idMasterData)
				->where('jumlah_desa', $jumlah_desa)
				->first();

			if ($data) {
				$features[$index]->properties->nilai = $data->nilai;
			}
		}

		$nilaiMax = $model->select('MAX(nilai) AS nilai')->where('id_master_data', $idMasterData)->first()->nilai;

		$masterDataModel = new \App\Models\MasterDataModel();
		$masterData = $masterDataModel->find($idMasterData);

		$allMasterData = $masterDataModel->findAll();

		$masterDataMenu = [];

		foreach ($allMasterData as $md) {
			$masterDataMenu[$md->id] = $md->nama;
		}

		return view('maps/index', [
			'data' => $features,
			'nilaiMax' => $nilaiMax,
			'masterData' => $masterData,
			'masterDataMenu' => $masterDataMenu,
		]);
	}

	//--------------------------------------------------------------------

}
