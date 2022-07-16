<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File; 

class ProfessionalController extends Controller
{

    // Muestra la lista de los profesionales
    public function index()
    {
        try {
        
            $user = User::where('role_id', '3')->get();

            return view('pages.professional.index', compact('user'));

        } catch (\Throwable $th) {
            Log::error('index - ProfessionalController -> Error: '.$th);
            abort(403, "Ocurrio un error. Contacte con el administrador");
        }
    }

    // Funcion para crear el profesional
    public function store(Request $request)
    {
        try {

            $verify_email = User::where('email', $request->email)->get();
            
            if($verify_email != null){
                User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role_id' => '3',
                ]);
            }else{
                return redirect()->back()->with('error','The email already exists');
            }

            return redirect()->back()->with('message','Created user');

        } catch (\Throwable $th) {
            Log::error('store - ProfessionalController -> Error: '.$th);
            abort(403, "Ocurrio un error. Contacte con el administrador");
        }
    }

    // Funcion para actualizar el profesional
    public function update(Request $request, $id)
    {
        try {

            $find = User::find($id);

            if ($find->email != $request->email) {
                $verify_email = User::where('email', $request->email)->first();
                if($verify_email == null){
                    User::find($id)->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                    ]);
                }else{
                    return redirect()->back()->with('error','The email already exists');
                }
            }else{
                User::find($id)->update([
                    'name' => $request->name,
                    'password' => Hash::make($request->password),
                ]);
            }

            return redirect()->back()->with('message','Updated user');

        } catch (\Throwable $th) {
            Log::error('update - ProfessionalController -> Error: '.$th);
            abort(403, "Ocurrio un error. Contacte con el administrador");
        }
    }

    // Funcion para eliminar un profesional
    public function delete($id)
    {
        try {

            $imgold = User::find($id);
            $filename = public_path('storage').'/profile/'.$imgold->avatar;
            File::delete($filename);

            User::find($id)->delete();

            return redirect()->back()->with('message','Deleted user');

        } catch (\Throwable $th) {
            Log::error('delete - ProfessionalController -> Error: '.$th);
            abort(403, "Ocurrio un error. Contacte con el administrador");
        }
    }

    // Funcion para activar o desactivar un profesional
    public function status($id)
    {
        try {

            $user = User::find($id);

            if($user->status == 1){
                User::find($id)->update([
                    'status' =>0,
                ]);

                return redirect()->back()->with('message','Disabled user');

            }else{
                User::find($id)->update([
                    'status' => 1,
                ]); 

                return redirect()->back()->with('message','Activated user');
            }
         
        } catch (\Throwable $th) {
            Log::error('status - ProfessionalController -> Error: '.$th);
            abort(403, "Ocurrio un error. Contacte con el administrador");
        }
    }

}