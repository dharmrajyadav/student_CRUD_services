<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\services\servicesData;

class registrationController extends Controller
{

    private $data;
        
    public function __construct(servicesData $dataServ)
    {
            $this->data = $dataServ;
    }


    public function registGetview()
    {
        
        return view('student.registration');
    }

        public function registSubmit(Request $request)
        {
            return $this->data->getFormData($request->all());
                
        }

        public function getCourseType()
        {
                return $this->data->getCourseType();
        }

        public function getCountry()
        {
            return $this->data->getCountry();
        }

        public function getCountryId($id)
        {
                return $this->data->getCountryId($id);
        }


}
