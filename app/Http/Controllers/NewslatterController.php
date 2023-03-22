<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newslatter;
use Illuminate\Support\Facades\DB;


class NewslatterController extends Controller{
    

    public function insert_new_newslatter(request $request){
        $data = $request->all();
        $name = $data["name"];
        $email = $data["email"];

        $data = Newslatter::select("email")->where("email", $email)->get();

        $return = False;

        if(count($data) >= 1){
            $return = True;
        }else{
            // $newslatter = new Newslatter;
            // $newslatter->nombre = strtolower($name);
            // $newslatter->email = strtolower($email);
            // $newslatter->save();

            DB::table("newslatter")->insert(
                ["nombre" => strtolower($name),
                "email" => strtolower($email)]);

            $return = False;
            
        }

       

        return $return;
    }

}
