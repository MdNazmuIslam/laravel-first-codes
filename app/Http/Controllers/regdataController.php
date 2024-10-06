<?php

namespace App\Http\Controllers;
use App\Http\Requests\regdataRequest;
use App\Models\regdata;

class regdataController extends Controller
{
    public function regdata(regdataRequest $regdataRequest){
        

        $save = regdata::create([
          'name' => $regdataRequest->name,
          'email' => $regdataRequest->email,
          'class' => $regdataRequest->class,
          'subject' => $regdataRequest->subject,
          'number' => $regdataRequest->number,
          'age' => $regdataRequest->age,
          'city' => $regdataRequest->city,
          'cuntry' => $regdataRequest->cuntry,
          'address' => $regdataRequest->address,
          'postCode' => $regdataRequest->postCode,
          'message' => $regdataRequest->message,
        ]);

        if($save){
            return redirect()->route('FromValidation')->with('status',"Regdata data add successfully");
        }else{
            return redirect()->route('FromValidation')->with('failed',"Regdata data add failed");
        }
       

    }
}
