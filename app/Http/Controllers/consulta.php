<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Controllers\Event;
use App\Models\User;

class consulta extends Controller
{
    
    public function index(Request $request)
    {
        $Estado=$request->estado;
        switch ($Estado) {
            case 1:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/CHIAPAS');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 2:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/MEXICO');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 3:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/AGUASCALIENTES');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 4:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/BAJA%20CALIFORNIA');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 5:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/BAJA%20CALIFORNIA%20SUR');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 6:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/CAMPECHE');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 7:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/CHIHUAHUA');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 8:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/COAHUILA');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 9:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/COLIMA');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 10:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/DURANGO');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 11:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/GUANAJUATO');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 12:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/GUERRERO');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 13:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/HIDALGO');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 14:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/JALISCO');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 15:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/MICHOACAN');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 16:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/MORELOS');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 17:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/NAYARIT');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 18:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/NUEVO%20LEON');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 19:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/OAXACA');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 20:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/PUEBLA');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 21:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/QUERETARO');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 22:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/QUINTANA%20ROO');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 23:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/SAN%20LUIS%20POTOSI');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 24:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/SINALOA');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 25:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/SONORA');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 26:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/TABASCO');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 27:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/TAMAULIPAS');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 28:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/TLAXCALA');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 29:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/VERACRUZ');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 30:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/YUCATAN');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            case 31:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/ZACATECAS');
                $datos = $response->json();

                return view('index',compact('datos'));
                break;
            default:
                $response = HTTP::get('https://municipalista.aiscomds.com:8084/API/v2/estado/MEXICO');
                $datos = $response->json();

                return view('index',compact('datos'));
            break;
            
        }
        
        
    }

   
    public function inicio(Request $request )
    {
        
        
    }

    
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
