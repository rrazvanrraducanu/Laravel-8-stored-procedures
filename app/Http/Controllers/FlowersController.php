<?php

namespace App\Http\Controllers;
//add this
use App\Models\Flower;
use \DB;

use Illuminate\Http\Request;

class FlowersController extends Controller
{
     public function index(){
    
   DB::insert("CALL InsertFlowers('lalele', 'mici','rosii','100')");
   DB::insert("CALL InsertFlowers('trandafiri', 'mari','rosii','200')"); 
   DB::insert("CALL InsertFlowers('albastrele', 'mici','albastre','150')"); 
   $flowers1=DB::select('CALL GetFlowers()');
   $flowers2=DB::select('CALL GetFlower("trandafiri")');
    return view('pages.flowers')->with([
         'title'=>'Flowers data',
         'flowers1'=> $flowers1,
         'flowers2'=>$flowers2]);
    }
}
