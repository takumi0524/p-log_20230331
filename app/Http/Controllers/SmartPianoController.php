<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SmartPiano;
use App\Models\Composer;
use App\Models\Song;
use AppHttp\Requests\StoreSmartPianoRequest;
use Illuminate\Support\Facades\DB;  //

class SmartPianoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $smartpianos = SmartPiano::query();
        $check = 0; //いずれかの検索項目に入力されていたら1になり、全て空欄なら0

        if ($request->filled('composer_id')) {
            $composer_id = $request->input('composer_id');
            $smartpianos->where('composer_id', $composer_id);
            $check = 1;
            // dd($composer_id);
            // \Log::debug("composer_id: $composer_id");
        }         
        if ($request->filled('song_id')) {
            $song_id = $request->input('song_id');
            $smartpianos->where('song_id', $song_id);
            $check = 1;
            // dd($composer_id,$song_id,$smartpianos);

            // \Log::debug("composer_id: $composer_id");
        } 
            // 検索してねっていうのが伝わるデータを1件入れておくのはどうだろうか。
            // 他に解決策がないのでいったんこれで！

        // すべての検索項目空欄時には、1つだけ例としてのデータを渡す。
        // if ($check === 0) {
        //     $smartpianos->where('userid', 'searchplease');
        // }

        // ペジネーション
        // $smartpianos = $smartpianos->paginate(10);

        // 以下、入力項目のプルダウンデータ取得用(各マスタから)
        $composers = Composer::all();
        $songs = Song::all();


        // ページング対象のレコードが0件の場合、空のコレクションを作成する
        // if ($smartpianos->isEmpty()) {
        //     $smartpianos = collect();
        // }

        return view('smartpianos.index', compact('smartpianos','composers','songs'));

        // return view('smartpianos.index', compact('smartpianos'));
        // return view('smartpianos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
