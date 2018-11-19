<?php

namespace App\Http\Controllers;
Use Illuminate\Http\Request;
use App\Film;


class FilmController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    public function create(Request $request)
    {

        $film = Film::create([
            'title' => $request->input('title'),
            'genre' => $request->input('genre'),
            'year' => $request->input('year'),
            'producer' => $request->input('producer'),
        ]);
       
        $response=[
            'status'=>'success',
           // 'data'=>$film,
            'message'=>'film created',
        ];

        return response()->json($response, 200);


    }

    public function index(){
        $films = Film::all();
         
        $response=[
            'status'=>'success',
            'message'=>'films list',
            'data' => $films,
        ];
         return response()->json($response, 200);
    }

    public function show($id)
    {
        $film = Film::find($id);
        $response=[
            'status'=>'success',
            'data' => $film,
        ];
        return response()->json($response, 200);
    }

    public function delete($id)
    {
        $film = Film::find($id);
        $film->delete();
        $response=[
            'status'=>'success',
            'message' => 'deleted',
        ];
        return response()->json($response, 200);
    }
    // public function update(Request $request, $id)
    // {
    //     $film = Film::findOrFail($id);
        
    //       $response=[
    //         'status'=>'success',
    //         'message' => 'updated',
    //         'data' =>$request,
    //     ];
    //     return response()->json($response, 200);
    //  }

    public function update(Request $request, $id)
    {
         $film = Film::findOrFail($id);
         $film['title']= $request->input('title');
         $film->genre= $request->input('genre');
         $film->year= $request->input('year');
         $film->producer = $request->input('producer');
         $film->save();
          $response=[
            'status'=>'success',
            'message' => 'updated',
            'data' =>$request,
        ];
        return response()->json($response, 200);
     }
}
