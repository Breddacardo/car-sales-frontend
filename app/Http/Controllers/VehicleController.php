<?php

namespace App\Http\Controllers;

use App\Models\addcar;
use CURLFile;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VehicleController extends Controller
{
    public function vehicle(){
        $url = 'http://10.47.12.61:8080/api/get-all-cars';
       
      

        $response = Http::get($url);

        
        
        // dd();
        // dd();
        
        
        
        
            
        
        return view('vehicle')->with('body', json_decode($response->getBody(), true));
    }

    public function submitcars(Request $request){
        // dd($request->file('car_photo')->getClientOriginalName());

        // if($request->has('car_photo')){
        //     $photo = ();
        // }

            // dd($request->file('car_photo'));

            if($request->has('car_photo')){
                // $filename = $request->file('car_photo')->ge();
                $file = $request->file('car_photo');

                // $photo = fopen($file, 'r');
            }
            $response = Http::withHeaders(['Accept' => 'application/json'])
            ->attach(
                'car_photo', $file,
            )
            ->post('http://10.47.12.61:8080/api/addcars',
            [
                'car_name' => $request->car_name,
                'car_info' => $request->car_info,
                'car_price' => $request->car_price,
                'car_photo' => $file
                    
            ]
        );
            dd($response->json());
            // dd($response->status());

        // $response = Http::post('http://10.47.12.61:8080/api/addcars')
        // ->accept('application/json')
        // ->withbody(
        //     'car_name' => $request->car_name,
        //     'car_info' => $request->car_info,
        //     'car_price' => $request->price,
        //     // 'carphoto' => $request->car_photo,

        //     base64_encode($request->car_photo), 'image/jpeg'
        // );
    }


   public function uploadphoto(Request $request){
        return "photo uploaded successfully!";
   }


//    public function carinfo(){
        
//     return view('carinfo');
    
//     }


    public function getcarinfo($id){
        $url = 'http://10.47.12.61:8080/api/get-car-info/'.$id;

        $response = Http::get($url);
        // dd($response->headers());
        return view('carinfo')->with('body', json_decode($response->getBody(), true));
    }

}

