<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Service;
use App\services_materials;


class GUISupervisorController extends Controller
{

    public function index(Request $request) {

      $materials = Material::all();
      $services=Service::all();

        return view('test',compact('services','materials'));

    }

    public function __construct()
    {
        $this->middleware('auth:superviser');
    }

    public function addMaterials(Request $request)
    {
            $material = Material::where('name','LIKE',$request->materials)->get();
            $text="done";


              if(count($material) > 0){
                $text=" have some one like this ";
             }else {
                $material=new Material();
                $material->name=$request->materials;

               $material->save();
             }
             $materials = Material::all();
             $services=Service::all();

        return view('test',compact('text','services','materials'));

    }



    public function storMaterials(Request $request)
    {
        $services_materials = new services_materials;

        if (is_array( $request->material_list))
        {
            for ($i=0; $i < count( $request->material_list) ; $i++) {

                $services_materials = new services_materials;
                $services_materials->service_id = $request->serviceID;
                $services_materials->material_id =  $request->material_list[$i];
                $services_materials->save();
              }


            $msg='done for';
          }
             $msg='done all';
             $materials = Material::all();
             $services=Service::all();


          return view('test',compact('msg','services','materials'));
    }






}
