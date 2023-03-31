<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pianolog;
use App\Services\CheckPianoLogService;
use App\Http\Requests\StorePianologRequest;
use App\Models\Composer;
use App\Models\Song;

class PianoLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pianologs = PianoLog::query();
        // 以下、入力項目のプルダウンデータ取得用(各マスタから)

        if ($request->filled('composer_id')) {
            $composer_id = $request->input('composer_id');
            $pianologs->where('composer_id', $composer_id);
            $check = 1;
            // dd($composer_id);
            // \Log::debug("composer_id: $composer_id");
        }         
        if ($request->filled('song_id')) {
            $song_id = $request->input('song_id');
            $pianologs->where('song_id', $song_id);
            $check = 1;
        }         

        // すべての検索項目空欄時には、1つだけ例としてのデータを渡す。
        // if ($check === 0) {
        //     $pianologs->where('userid', 'searchplease');
        // }
        
        $composers = Composer::all();
        $songs = Song::all();
        // ペジネーション
        $pianologs = $pianologs->paginate(10000);
        // $pianologs = $pianologs;
        
        return view('pianologs.index', compact('pianologs','composers','songs'));
        // 検索対応
        // $search = $request->search;
        // $query = PianoLog::search($search);
        // $pianologs = $query->select('id','username','userid','song','composer','playingage','difficulty','degree','playingtimerp','playingtimenrp','score','readingperiod','exercise','technique','recording','url','soundsource','books')
        // ->paginate(20);

        // return view('pianologs.index', compact('pianologs','age','gender','pstartage','totalhistory','pianohon','soundproofhon'));
        // return view('pianologs.index', compact('pianologs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pianologs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StorePianologRequest $request)
    public function store(request $request)
    {
        // dd($request, $request->name);
        
        PianoLog::create([
            // 'username' => $request->username,
            'userid' => $request->userid,
            'song' => $request->song,
            'composer' => $request->composer,
            // 'playingage' => $request->playingage,
            'difficulty' => $request->difficulty,
            'degree' => $request->degree,
            'playingtime' => $request->playingtime,
            // 'playingtimenrp' => $request->playingtimenrp,
            // 'score' => $request->score,
            // 'readingperiod' => $request->readingperiod,
            // 'exercise' => $request->exercise,
            // 'technique' => $request->technique,
            // 'recording' => $request->recording,
            // 'url' => $request->url,
            // 'soundsource' => $request->soundsource,
            // 'books' => $request->books,
            'composer_id' => $request->composer,
            'song' => $request->song,
        ]);

        return to_route('pianologs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pianolog = Pianolog::find($id);

        $playingage = CheckPianoLogService::checkPlayingage($pianolog);
        $difficulty = CheckPianoLogService::checkDifficulty($pianolog);
        $degree = CheckPianoLogService::checkDegree($pianolog);     
        $playingtimerp = CheckPianoLogService::checkPlayingtimerp($pianolog);
        $playingtimenrp = CheckPianoLogService::checkPlayingtimenrp($pianolog);
        $readingperiod = CheckPianoLogService::checkReadingperiod($pianolog);

        return view('pianologs.show', compact('pianolog','playingage','difficulty','degree','playingtimerp','playingtimenrp','readingperiod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pianolog = Pianolog::find($id);

        return view('pianologs.edit', compact('pianolog'));
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
        $pianolog = Pianolog::find($id);
        $pianolog->username = $request->username;
        $pianolog->userid = $request->userid;
        $pianolog->song = $request->song;
        $pianolog->composer = $request->composer;
        $pianolog->playingage = $request->playingage;
        $pianolog->difficulty = $request->difficulty;
        $pianolog->degree = $request->degree;
        $pianolog->playingtimerp = $request->playingtimerp;
        $pianolog->playingtimenrp = $request->playingtimenrp;
        $pianolog->score = $request->score;
        $pianolog->readingperiod = $request->readingperiod;
        $pianolog->exercise = $request->exercise;
        $pianolog->recording = $request->recording;
        $pianolog->url = $request->url;
        $pianolog->soundsource = $request->soundsource;
        $pianolog->books = $request->books;
        $pianolog->save();

        return to_route('pianologs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pianolog = Pianolog::find($id);
        $pianolog->delete();

        return to_route('pianologs.index');
    }
}
