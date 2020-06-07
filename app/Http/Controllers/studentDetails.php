<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\services\servicesData;

class studentDetails extends Controller
{
    private $data;
        
    public function __construct(servicesData $dataServ)
    {
            $this->data = $dataServ;
    }


    public function getStudentDetails()
    {
           return $this->data->getStudentDetails();

    }

}
