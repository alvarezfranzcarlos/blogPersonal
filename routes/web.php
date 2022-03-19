<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PostController::class,'getIndex'])->name('blog.index');

Route::get('post/{id}', function ($id) {
    if($id==1){
        $post=[
            'title'=> 'Titulo agregado',
            'content'=> 'Contenido agregado'
        ];
    } else
    {
        $post=[
            'title'=> 'Titulo agregado opcional',
            'content'=> 'Contenido agregado opcional'
        ];
    }
    return view('blog.post', ['post' =>$post]);
})->name('blog.post');

Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::group(['prefix' => 'admin'], function (){
Route::get('', function () {
    return view('admin.index');
})->name('admin.index');

Route::get('create', function () {
    return view('admin.create');
})->name('admin.create');

Route::post('create', function (\Illuminate\Http\Request $request, 	\Illuminate\Validation\Factory $validator) {
    $validation=$validator->make($request->all()
    ,[
        'title'=>'required|min:5',
        'content'=>'required|min:10'
    ]);
    if ($validation->fails()){
        return redirect()->back()->withErrors($validation);
    }
    return redirect()
    ->route('admin.index')
    ->with('info','Posteo creado, nuevo titulo creado: ' . $request ->input('title'));
})->name('admin.create');

Route::get('edit/{id}', function ($id) {
    if($id==1){
        $post=[
            'title'=> 'Titulo agregado',
            'content'=> 'Contenido agregado'
        ];
    } else
    {
        $post=[
            'title'=> 'Titulo agregado opcional',
            'content'=> 'Contenido agregado opcional'
        ];
    }
    return view('admin.edit', ['post' =>$post]);
})->name('admin.edit');

Route::post('edit', function (\Illuminate\Http\Request $request, \Illuminate\Validation\Factory $validator) {
    $validation=$validator->make($request->all()
    ,[
        'title'=>'required|min:5',
        'content'=>'required|min:10'
    ]);
    if ($validation->fails()){
        return redirect()->back->withErrors($validation);
    }
    return redirect()
    ->route('admin.index')
    ->with('info','Posteo editado, nuevo titulo editado: ' . $request ->input('title'));
})->name('admin.update');

});
