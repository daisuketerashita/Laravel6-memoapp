<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Memo;

class MemosController extends Controller
{
    
    //一覧画面
    public function index(){
        $memos = Memo::orderBy('created_at','desc')->get();

        return view('index',['memos' => $memos]);
    }

    //新規作成画面
    public function create(){
        return view('create');
    }

    //新規登録の処理
    public function store(Request $request){
        $content = $request->validate(['content' => 'required']);
        Memo::create($content);

        return redirect()->route('index');
    }

    //編集画面
    public function edit(Request $request){
        $memo = Memo::find($request->id);

        return view('edit',['memo' => $memo]);
    }

    //編集登録の処理
    public function update(Request $request){
        $memo = Memo::find($request->id);
        $content = $request->validate(['content' => 'required']);

        $memo->fill($content)->save();

        return redirect()->route('index');
    }

    //削除機能
    public function delete(Request $request){
        $memo = Memo::find($request->id);

        $memo->delete();

        return redirect()->route('index');
    }
}
