<?php

namespace App\Controllers;

use App\Models\Data_OperatorModel;
use App\Models\OperatorModel;
use App\Models\StaffModel;

class Admin extends BaseController
{

    public function login(){
        return view('admin/loginpage');
    }

    public function beforeFilter()
    {
        // Cek apakah sesi 'username' ada
        if (!session('username')) {
            // Jika tidak ada, redirect ke halaman login
            return redirect()->to('/pages/home');
        }
    }




    public function index(){
        $staffJobs = new StaffModel();
        $operatorJobs = new OperatorModel();
        $employe_operator = new Data_OperatorModel();

        $staff = $staffJobs->findAll();
        $operator= $operatorJobs -> findAll();
        $employe_1=$employe_operator -> findAll();
        $pelamar_sewing = $employe_operator->where('posisi','Operator Sewing')->countAllResults();
        $pelamar_cutting = $employe_operator->where('posisi', 'Operator Cutting')->countAllResults();
        $pelamar_assembling = $employe_operator->where('posisi', 'Operator Assembling')->countAllResults();


        $data = [
            'staff' => $staff,
            'operator'=>$operator,
            'employe_1'=>$employe_1,
            'sewing'=>$pelamar_sewing,
            'cutting'=>$pelamar_cutting,
            'assembling'=>$pelamar_assembling
        ];
        return view('admin/adminHome',$data);
    }

    public function add(){
        return view('admin/addJobs');
    }

    public function save()
    {

        $addjobs = new StaffModel();

        $nama = $this->request->getPost('job_title');
        $deskripsi = $this->request->getPost('deskripsi');
        $tanggal = $this->request->getPost('tanggal');

        $data=[
            'job_title' => $nama,
            'description'=>$deskripsi,
            'expired_date'=>$tanggal
        ];

        $addjobs -> save($data);
        return redirect()->to(base_url('admin'));
        
    }

    public function edit ($id=null){
        $staffEdit = new StaffModel();
        $staff = $staffEdit->where(['id' => $id])->first();

        $data = [
            'staff' => $staff
        ];
        echo view('admin/editJobs', $data);
    }

    public function update($id=null){
        $staffUpdate = new StaffModel();

        $nama = $this->request->getPost('job_title');
        $deskripsi = $this->request->getPost('deskripsi');
        $tanggal = $this->request->getPost('tanggal');

        $data = [
            'job_title' => $nama,
            'description' => $deskripsi,
            'expired_date' => $tanggal
        ];

        $staffUpdate->update($id,$data);
        return redirect()->to(base_url('admin'));
    }

    public function delete($id = null)
    {
        $staffEdit = new StaffModel();
        $staffEdit->delete($id);
        return redirect()->to(base_url('admin'));
    }


    public function addOp(){
        return view('admin/Operator/addJobs');
    }

    public function saveOp()
    {

        $addjobs = new OperatorModel();

        $nama = $this->request->getPost('job_title');
        $deskripsi = $this->request->getPost('deskripsi');
        $tanggal = $this->request->getPost('tanggal');

        $data = [
            'job_title' => $nama,
            'description' => $deskripsi,
            'expired_date' => $tanggal
        ];

        $addjobs->save($data);
        return redirect()->to(base_url('admin'));
    }

    public function editOp($id = null)
    {
        $operatorEdit = new OperatorModel();
        $operator = $operatorEdit->where(['id' => $id])->first();

        $data = [
            'operator' => $operator
        ];
        echo view('admin/Operator/editJobs', $data);
    }

    public function updateOp($id = null)
    {
        $operator = new OperatorModel();

        $nama = $this->request->getPost('job_title');
        $deskripsi = $this->request->getPost('deskripsi');
        $tanggal = $this->request->getPost('tanggal');

        $data = [
            'job_title' => $nama,
            'description' => $deskripsi,
            'expired_date' => $tanggal
        ];

        $operator->update($id, $data);
        return redirect()->to(base_url('admin'));
    }

    public function deleteOp($id = null)
    {
        $staffEdit = new OperatorModel();
        $staffEdit->delete($id);
        return redirect()->to(base_url('admin'));
    }
}

