<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Kategori extends BaseController
{
	public function index()
	{
        echo "<h1>Belajar CI4</h1>";
    }
    
    public function select(){
        echo view("template/header");
        echo view("kategori/select");
        echo view("template/footer");
    }

    public function selectWhere($id = null){
        echo "<h1>Menampilkan Data yang Dipilih $id</h1>";
    }

    public function formInsert(){
        echo "<h1>Menampilkan Form Insert</h1>";
    }

    public function formUpdate($id = null){
        echo "<h1>Menampilkan Form Update $id</h1>";
    }

    public function update($id = null){

    }

    public function delete($id = null){
        
    }

	//--------------------------------------------------------------------

}
