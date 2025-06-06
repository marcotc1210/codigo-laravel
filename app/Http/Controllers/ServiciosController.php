<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Servicio;
use App\Http\Requests\CreateServicioRequest;

class ServiciosController extends Controller
{
    public function index()
    {
        // $servicios = [
        //     ['titulo' => 'Mantenimiento'],
        //     ['titulo' => 'Afinamiento'],
        //     ['titulo' => 'Cambio de aceite'],
        //     ['titulo' => 'Cambio de llantas'],
        //     ['titulo' => 'Cambio de frenos'],
        //     ['titulo' => 'Cambio de batería'],
        //     ['titulo' => 'Lavado'],
        // ];
        // $servicios = DB::table('servicios')->get();
        $servicios = Servicio::orderBy('titulo', 'desc')->paginate(2);

        return view('servicios.index', compact('servicios'));
    }
    public function show($id) {
        $servicio = Servicio::find($id);
        return view('servicios.show', compact('servicio'));
    }

    public function create() 
    {
        return view('servicios.create');
    }
    public function store(CreateServicioRequest $request)
    {
        Servicio::create($request->validated());
        return redirect()->route('servicios.index');
    }
}
