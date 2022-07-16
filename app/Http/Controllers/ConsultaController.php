<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use Illuminate\Http\Request;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

/**
 * Class ConsultaController
 * @package App\Http\Controllers
 */
class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Consumir WebService Rest de consul$consulta y mostrarlo en la vista
        $consulta=HTTP::get('http://localhost:8000/api/consultas');
        $consultasArray=$consulta->json();
        return view('consulta.index', compact('consultasArray'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consulta = new Consulta();
        return view('consulta.create', compact('consulta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Llamar al controlador del WebService Rest de consul$consulta
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:8000/api/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        $response = $client->request('POST', 'consultas', [
            'form_params' => [
                'nombre' => $request->nombre,
                'apPaterno' => $request->apPaterno,
                'apMaterno' => $request->apMaterno,
                'fechaConsulta' => $request->fechaConsulta,
                'motivo' => $request->motivo,
                'diagnostico' => $request->diagnostico,
                'tratamiento' => $request->tratamiento,
                'observaciones' => $request->observaciones,
            ],
        ]);
        return redirect()->route('consultas.index')->with('success', 'Consulta creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Consumir WebService Rest de consul$consulta y mostrarlo en la vista
        $consulta=HTTP::get('http://localhost:8000/api/consultas/'.$id);
        $consultaArray=$consulta->json();
        return view('consulta.show', compact('consultaArray'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = Consulta::find($id);

        return view('consulta.edit', compact('consulta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Consulta $consulta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consulta $consulta)
    {
        //Llamar al controlador del WebService Rest de consul$consulta
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:8000/api/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        $response = $client->request('PUT', 'consultas/'.$consulta->id, [
            'form_params' => [
                'nombre' => $request->nombre,
                'apPaterno' => $request->apPaterno,
                'apMaterno' => $request->apMaterno,
                'fechaConsulta' => $request->fechaConsulta,
                'motivo' => $request->motivo,
                'diagnostico' => $request->diagnostico,
                'tratamiento' => $request->tratamiento,
                'observaciones' => $request->observaciones,
            ],
        ]);
        return redirect()->route('consultas.index')->with('success', 'Consulta actualizada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        //Llamar al controlador del WebService Rest de consul$consulta
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:8000/api/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        $response = $client->request('DELETE', 'consultas/'.$id);
        return redirect()->route('consultas.index')->with('success', 'Consulta eliminada correctamente');
    }
}
