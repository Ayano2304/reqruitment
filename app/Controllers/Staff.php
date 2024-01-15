<?php

namespace App\Controllers;

use App\Models\Data_OperatorModel;
use App\Models\StaffModel;

class Staff extends BaseController{

    public function index(){
        $staffModel = new StaffModel();
        $staff = $staffModel ->findAll();

        $data=[
            'staff'=>$staff
        ];
        echo view('pages/header');
        echo view('pages/staffjob',$data);
    }


    public function hire(){

        $employe = new Data_OperatorModel();

        $ktp = $this->request->getPost('ktp');
        $nama = $this->request->getPost('nama');
        $alamat = $this->request->getPost('alamat');
        $kabupaten = $this->request->getPost('kabupaten');
        $provinsi = $this->request->getPost('provinsi');
        $tempat_lahir = $this->request->getPost('tempat_lahir');
        $ttl = $this->request->getPost('ttl');
        $kelamin = $this->request->getPost('kelamin');
        $pernikahan = $this->request->getPost('pernikahan');
        $posisi = $this->request->getPost('posisi');

        $data = [
            'ktp'=>$ktp,
            'nama' => $nama,
            'alamat'=> $alamat,
            'kota'=>$kabupaten,
            'provinsi'=>$provinsi,
            'tempat_lahir'=>$tempat_lahir,
            'tgl_lahir'=>$ttl,
            'kelamin'=>$kelamin,
            'status_nikah'=>$pernikahan,
            'posisi'=>$posisi
        ];

        $employe->save($data);
        return redirect()->to(base_url('admin'));
}

public function detail($id){
        $dataOperatorModel = new Data_OperatorModel();
        $dataOp = $dataOperatorModel->where(['id' => $id])->first();

        $data = [
            'operator' => $dataOp
        ];
        echo view('admin/Operator/detail.php', $data);
}

}