<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Kategori_M;

class Kategori extends BaseController
{
	public function index()
	{
        echo "<h1>Belajar CI4</h1>";
    }
    
    public function select(){
        $model = new Kategori_M();
        $kategori = $model->findAll();
        
        $data = [
            'judul' => 'SELECT DATA DARI CONTROLLER',
            'kategori' => $kategori
        ];
        
        return view("kategori/select", $data);
    }

    public function selectWhere($id = null){
        echo "<h1>Menampilkan Data yang Dipilih $id</h1>";
    }

    public function formInsert(){
        return view("kategori/forminsert");
    }

    public function formUpdate($id = null){
        echo view("template/header");
        echo view("kategori/update");
        echo view("template/footer");    }

    public function update($id = null){

    }

    public function delete($id = null){
        
    }

	//--------------------------------------------------------------------

}
