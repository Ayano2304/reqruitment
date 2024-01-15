<?php

namespace App\Controllers;

use App\Models\OperatorModel;

class Operator extends BaseController{
    public function index(){

        $operatormodel = new OperatorModel();
        $operator = $operatormodel -> findAll();

        $data = [
            'operator' => $operator
        ];


        echo view('pages/header');
        echo view('pages/operatorjob',$data);
        // echo view('footer');
    }

    public function detail($jobsID)
    {
        $operatormodel = new OperatorModel();
        $operator = $operatormodel->where(['id' => $jobsID])->first();

        $data = [
            'operator' => $operator
        ];
        echo view('pages/formoperator', $data);
    }

}

