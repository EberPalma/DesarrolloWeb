<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnos;
use App\Models\Grupos;

class EscuelaController extends Controller
{
    /**
     * * Funcion que regresa una consulta con todos los alumnos
     */
    public function alumnosIndex(){
        $alumnos = Alumnos::all();
        $cantidad = $alumnos->count();
        return view('lista')
            ->with('alumnos', $alumnos)
            ->with('cantidad', $cantidad);
    }

    /**
     * * Funcion que regresa una consulta con solo un alumno
     * @param $id
     */
    public function alumnosShow($id){
        $alumno = Alumnos::find($id);
        $grupo = Grupos::find($alumno->id_grupo);
        return view('detalle_alumno')
            ->width('alumno', $alumno);
    }

    public function alumnosCreate(){
        $grupos = Grupos::all();
        return view('nuevo_alumno')
            ->with('grupos', $grupos);
    }

    /**
     * * Funcion para crear registros en la tabla td_alumnos
     * @param $request
     */
    public function alumnosStore(Request $request){

        // * Validacion de la informacion proporcionada
        $request->validate([
            'matricula' => 'required|integer',
            'nombre' => 'required|string',
            'fecha_nacimiento' => 'required|date',
            'genero' => 'required|string',
            'email' => 'required|text',
            'direccion' => 'required|text',
            'id_grupo' => 'required|integer',
            'password' => 'required',
        ]);

        // * Manejo de las imagenes
        if($request->file('foto') != ''){

            // ? En caso de que se suba una foto
            $file = $request->foto;
            $foto = $file->getClientOriginalName();
            $date = date('Y-m-d');
            $foto_name = $foto . $request->matricula . $date;
            \Storage::disk('local')->put($foto_name, \File::get($file));
        }else{

            // ! En caso de que no se suba una foto, se añade una por defecto
            $foto_name = "shadow.png";
        }

        $query = Alumnos::create([
            'matricula' => $request->matricula,
            'nombre' => $request->nombre,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'genero' => $request->genero,
            'email' => $request->email,
            'direccion' => $request->direccion,
            'id_grupo' => $request->id_grupo,
            'password' => $request->password,
            'foto' => $foto_name
        ]);

        return redirect()->route('lista');
    }

    public function alumnosUpdate(Request $request, $id){

        // * Validacion de la informacion proporcionada
        $request->validate([
            'matricula' => 'required|integer',
            'nombre' => 'required|string',
            'fecha_nacimiento' => 'required|date',
            'genero' => 'required|string',
            'email' => 'required|text',
            'direccion' => 'required|text',
            'id_grupo' => 'required|integer',
            'password' => 'required',
        ]);

        $alumno = Alumno::find($id);

        // * Manejo de las imagenes
        if($request->file('foto') != ''){

            // ? En caso de que se suba una foto
            $file = $request->foto;
            $foto = $file->getClientOriginalName();
            $date = date('Y-m-d');
            $foto_name = $foto . $request->matricula . $date;
            \Storage::disk('local')->put($foto_name, \File::get($file));
        }else{

            // ! En caso de que no se suba una foto, se añade una por defecto
            $foto_name = $alumno->foto;
        }

        $alumno->matricula = $request->matricula;
        $alumno->nombre = $request->nombre;
        $alumno->fecha_nacimiento = $request->fecha_nacimiento;
        $alumno->genero = $request->genero;
        $alumno->email = $request->email;
        $alumno->direccion = $request->direccion;
        $alumno->id_grupo = $request->id_grupo;
        $alumno->password = $request->password;
        $alumno->foto = $foto_name;
        
        $alumno->save();
        
        return redirect()->route('detalle', ['id', $id]);
    }

    public function alumnosDelete($id){
        $alumno = Alumnos::find($id);
        $alumno->delete;
        return redirect()->route('lista');
    }

    public function gruposIndex(){
        $grupos = Grupos::all();
        return view('lista_grupos')
            ->with('grupos', $grupos);
    }
}
