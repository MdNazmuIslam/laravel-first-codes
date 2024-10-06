<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactForm;
use App\Mail\welcomeMail as MailWelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\mail\welcomeMail;
use Illuminate\Http\Request;

class EmailContoroller extends Controller
{
    public function sendEmail( ContactForm $request){

      $fileName = time().".".$request->file('attacment')->extension();
       
       $request->file('attacment')->move("uploads",$fileName);
       $toEmail ="mdnazmulkhan4398@gmail.com";
      
      
       $mailsend = Mail::to($toEmail)->send(new MailWelcomeMail($request->all(), $fileName));
       
    
        if($mailsend){
            return redirect('Contact')->with('status',"Email send  successfully");
            
        }else{
            return redirect('Contact')->with('failed',"Email send failed");
            
        }
    }
}
