<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class studentController extends Controller
{
   public function showdata(){
    $student = DB::table('students')->simplePaginate(4);
    return view('crud',['student' => $student]);
   }

   public function addData(){
      return view('/Pages/addData');
   }
   public function DataAdd( request  $req){
      $student = DB::table('students')->insertOrIgnore([
         'Name' => $req->name,
         'class' => $req->class,
         'Subject' => $req->subject,
         'age' => $req->age
      ]);
      if($student){
         return redirect()->route('crud');
      }else{
         echo "<h1?> data not insert </h1>";
      }
   }
   public function updateData( string $id){
      $student = DB::table('students')->where('id',$id)->get();
      return view('/Pages/updateData',['student' => $student]);
     
   }
   public function DataUpdate( Request $req){
      $student = DB::table('students')->where('id',$req->id)->update([
          'Name' => $req->name,
         'class' => $req->class,
         'Subject' => $req->subject,
         'age' => $req->age,
      ]);
      if($student){
         return redirect()->route('crud');
      }else{
         echo "<h1?> data not update </h1>";
      }
      return view('/Pages/updateData');
   }
   public function deleteData(string $id){
      $student = DB::table('students')->where('id',$id)->delete();
      // return view('/Pages/deleteData');
      if($student){
         return redirect()->route('crud');
      }else{
         echo "<h1> data not delete </h1>";
      }
   }
   public function viewData( string $id){
      $student = DB::table('students')->where('id',$id)->get();
      return view('/Pages/viewData',['student' => $student]);
   }
   
}
