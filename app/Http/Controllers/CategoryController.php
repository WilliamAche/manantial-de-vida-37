<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryQuestions;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File; 

class CategoryController extends Controller
{

     // Muestra la lista de las categorias
    public function index()
    {
        try {

            $category = Category::all();

            return view('pages.categories.index', compact('category'));

        } catch (\Throwable $th) {
            Log::error('index - CategoryController -> Error: '.$th);
            abort(403, "Ocurrio un error. Contacte con el administrador");
        }
    }

    // Funcion para crear la categoriia
    public function store(Request $request)
    {
        try {
             
            if($request->file('image')->getSize() > 2000000){

                return redirect()->back()->with('error','The image can not have a size more than 2mb');

            }else{
            if($request->hasFile('image')){
                
                $file = $request->file('image');
                $name = Auth::id().'_'.rand(0,100).$request->name.'_'.$file->getClientOriginalName();
                $file->move(public_path('storage') . '/category', $name);
             }
             
            $category = Category::create([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $name,
            ]);
            
            // guarda las preguntas de la categoria creada
            if($request->quests[0] != null){
                foreach ($request->quests as $item) {
                    CategoryQuestions::create([
                        'question' => $item,
                        'category_id' => $category->id,
                    ]);
                }
            }

            return redirect()->route('category.list')->with('message','Created category');
        }
        } catch (\Throwable $th) {
            Log::error('store - CategoryController -> Error: '.$th);
            abort(403, "Ocurrio un error. Contacte con el administrador");
        }
    }

     // Funcion para actualizar una categoria
    public function update(Request $request, $id)
    {
        try {

            if($request->hasFile('image')){
                if($request->file('image')->getSize() > 2000000){

                    return redirect()->back()->with('error','The image can not have a size more than 2mb');

                }else{
                // borra la imagen anterior
                $imgold = Category::find($id);
                $filename = public_path('storage').'/category/'.$imgold->image;
                File::delete($filename);

                // guarda la nueva imagen
                $file = $request->file('image');
                $name = Auth::id().'_'.rand(0,100).$request->name.'_'.$file->getClientOriginalName();
                $file->move(public_path('storage') . '/category', $name);

                Category::find($id)->update([
                    'image' => $name,
                ]);
            }
             }

            Category::find($id)->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);

            // actualiza las respuestas de la categoria
            $array_c = array_combine($request->quests_id, $request->quests); 

            foreach ($array_c as $key => $item) {
                CategoryQuestions::find($key)->update([
                    'question' => $item,
                ]);
            }

            return redirect()->route('category.list')->with('message','Updated category');

        } catch (\Throwable $th) {
            Log::error('update - CategoryController -> Error: '.$th);
            abort(403, "Ocurrio un error. Contacte con el administrador");
        }
    }

    // Funcion para eliminar una categoria
    public function delete($id)
    {
        try {

            // borra la imagen
            $imgold = Category::find($id);
            $filename = public_path('storage').'/category/'.$imgold->image;
            File::delete($filename);
   
            Category::find($id)->delete();

            return redirect()->back()->with('message','Deleted category');

        } catch (\Throwable $th) {
            Log::error('delete - CategoryController -> Error: '.$th);
            abort(403, "Ocurrio un error. Contacte con el administrador");
        }
    }

}
