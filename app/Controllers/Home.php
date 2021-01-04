<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Home extends BaseController
{
	public function index()
	{
		$barang = new BarangModel();
		$model = $barang->findAll();
		return view('hello/world', ['model' => $model,]);
	}

	//--------------------------------------------------------------------

}
