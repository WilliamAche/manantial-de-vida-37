<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File; 

class UserController extends Controller
{
    // Muestra la lista de los usuarios admin y clientes
    public function index()
    {
        try {
        
            $user = User::where('role_id', '!=', '3')->get();

            return view('pages.users.index', compact('user'));

        } catch (\Throwable $th) {
            Log::error('index - UserController -> Error: '.$th);
            abort(403, "Ocurrio un error. Contacte con el administrador");
        }
    }
    
    // Muestra la vista del perfil del admin
    public function profile()
    {
        try {

            $img = User::where('id', Auth::id())->first('avatar');

            $getimg = url('storage/profile',$img->avatar);

            return view('pages.profile.index', compact('getimg'));

        } catch (\Throwable $th) {
            Log::error('profile - UserController -> Error: '.$th);
            abort(403, "Ocurrio un error. Contacte con el administrador");
        }
    }

    // Funcion para actualizar un usuario
    public function update(Request $request, $id)
    {
        try {
      
            if($request->hasFile('image')){ //Actualizara el usuario si subio una imagen

                $file = $request->file('image');
                $name = Auth::id().'_'.rand(0,100).$request->name.'_'.$file->getClientOriginalName();
                $file->move(public_path('storage') . '/profile', $name);

                User::find($id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'avatar' => $name,
                    'phone' => $request->phone,
                    'address' => $request->address,
                ]);

            }elseif($request->phone){ //Actualizara el usuario sino subio una imagen
                User::find($id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'address' => $request->address,
                ]);

            }else{ //Actualiza un usuario desde el panel admin
                User::find($id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
            }

            return redirect()->back()->with('message','Updated user');

        } catch (\Throwable $th) {
            Log::error('update - UserController -> Error: '.$th);
            abort(403, "Ocurrio un error. Contacte con el administrador");
        }
    }

    // Funcion para eliminar o desactivar un usuario
    public function delete($id)
    {
        try {

            $imgold = User::find($id);
            $filename = public_path('storage').'/profile/'.$imgold->avatar;
            File::delete($filename);

            User::find($id)->delete();

            return redirect()->back()->with('message','Deleted user');

        } catch (\Throwable $th) {
            Log::error('delete - UserController -> Error: '.$th);
            abort(403, "Ocurrio un error. Contacte con el administrador");
        }
    }

    // Funcion para activar o desactivar un usuario
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
            Log::error('status - UserController -> Error: '.$th);
            abort(403, "Ocurrio un error. Contacte con el administrador");
        }
    }

}