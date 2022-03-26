<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        $items = DB::table('subjects')->get();
        return view('index',['items' => $items]);
    }
    public function add()
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $param = [
            'id' => $request->id,
            'title' => $request->title,
        ];
        DB::table('subjects')->insert($param);
        return redirect('/');

    }
        public function edit(Request $request)
        {
            $item = DB::table('subjects')->where('id',$request->id)->first();
            return view('edit',['form' => $item]);
        }
        public function update(Request $request)
        {
            $param = [
                'id' => $request->id,
                'title' => $request->title,
            ];
            DB::table('subjects')->where('id',$request->id)->update($param);
            return redirect('/');
        }
    }
