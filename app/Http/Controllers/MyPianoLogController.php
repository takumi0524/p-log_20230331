<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Request\StorePianologRequest;
use App\Http\Requests\StorePianologRequest;
use Illuminate\Support\Facades\Auth;    //20230325追加
use Illuminate\Support\Facades\DB;  //20230325追加

use App\Models\MyPianoLog;
use App\Models\PianoLog;
use App\Models\MyPianoLogCreate;
use App\Models\Composer;
use App\Models\Song;
use App\Services\CheckPianoLogService;
use App\Http\Requests\StoreMyPianologRequest;

class MyPianoLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $mypianologs = PianoLog::select('id','username','age','gender','pstartage','totalhistory','pianohon','soundproofhon','community')
        // ->get();

        // ペジネーション対応
        // $mypianologs = PianoLog::select('id','username','age','gender','pstartage','totalhistory','pianohon','soundproofhon','community')
        // ->paginate(20);

        // 検索対応
        // $search = $request->search;
        // // $query = MyPianoLog::search($search);
        // $query = PianoLog::search($search);
        // $mypianologs = $query->select('id','username','userid','song','composer','playingage','difficulty','degree','playingtimerp','playingtimenrp','score','readingperiod','exercise','technique','recording','url','soundsource','books')
        // ->paginate(20);

        // // return view('mypianologs.index', compact('mypianologs','age','gender','pstartage','totalhistory','pianohon','soundproofhon'));
        // return view('mypianologs.index', compact('mypianologs'));

        // ログインしているユーザのみの情報を引っ張ってきたい(複数行あってよい)
        if (Auth::check()) {
            $user = Auth::user();
            $mypianologs = DB::table('piano_logs')
                ->where('userid', $user->userid)
                ->paginate(10000);
                // ->get();
                // dd($mypianologs,$user);
            return view('mypianologs.index', compact('user', 'mypianologs'));
        } else {
            return view('mypianologs.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mypianologs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePianologRequest $request)
    // public function store(request $request)
    {
        // composerとsongの名前からそれぞれのidを取得する
        $composer = Composer::where('composer', $request->composer)->firstOrFail();
        $song = Song::where('song', $request->song)->firstOrFail();
        
        $myPianoLogCreate = new PianoLog;

        // 外部キーのcomposer_idとsong_idを設定する
        $myPianoLogCreate->composer_id = $composer->id;
        $myPianoLogCreate->song_id = $song->id;

         // その他の必要な情報を追加する
        $myPianoLogCreate->userid = $request->userid;
        $myPianoLogCreate->composer = $request->composer;
        $myPianoLogCreate->song = $request->song;
        $myPianoLogCreate->difficulty = $request->difficulty;
        $myPianoLogCreate->degree = $request->degree;
        $myPianoLogCreate->playingtime = $request->playingtime;

         // モデルインスタンスを保存する
          $myPianoLogCreate->save();

          // 成功した場合はリダイレクトする
          return redirect()->route('mypianologs.index');

        // // MyPianoLog::create([
        // PianoLog::create([
        //     // 'username' => $request->username,
        //     'userid' => $request->userid,
        //     'song' => $request->song,
        //     'composer' => $request->composer,
        //     // 'playingage' => $request->playingage,
        //     'difficulty' => $request->difficulty,
        //     'degree' => $request->degree,
        //     'playingtime' => $request->playingtime,
        //     // 'playingtimenrp' => $request->playingtimenrp,
        //     // 'score' => $request->score,
        //     // 'readingperiod' => $request->readingperiod,
        //     // 'exercise' => $request->exercise,
        //     // 'technique' => $request->technique,
        //     // 'recording' => $request->recording,
        //     // 'url' => $request->url,
        //     // 'soundsource' => $request->soundsource,
        //     // 'books' => $request->books,
        //     'composer_id' => $composer->id,
        //     'song_id' => $song->id,
        // ]);

        // return to_route('mypianologs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $mypianolog = MyPianoLog::find($id);
        $mypianolog = PianoLog::find($id);

        $playingage = CheckPianoLogService::checkPlayingage($mypianolog);
        $difficulty = CheckPianoLogService::checkDifficulty($mypianolog);
        $degree = CheckPianoLogService::checkDegree($mypianolog);     
        $playingtimerp = CheckPianoLogService::checkPlayingtimerp($mypianolog);
        $playingtimenrp = CheckPianoLogService::checkPlayingtimenrp($mypianolog);
        $readingperiod = CheckPianoLogService::checkReadingperiod($mypianolog);

        return view('mypianologs.show', compact('mypianolog','playingage','difficulty','degree','playingtimerp','playingtimenrp','readingperiod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $mypianolog = MyPianoLog::find($id);
        $mypianolog = PianoLog::find($id);

        return view('mypianologs.edit', compact('mypianolog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePianologRequest $request, $id)
    {
        $mypianolog = PianoLog::find($id);
        // $mypianolog = MyPianoLog::find($id);
        // $mypianolog->username = $request->username;
        $mypianolog->userid = $request->userid;
        $mypianolog->song = $request->song;
        $mypianolog->composer = $request->composer;
        // $mypianolog->playingage = $request->playingage;
        $mypianolog->difficulty = $request->difficulty;
        $mypianolog->degree = $request->degree;
        $mypianolog->playingtime = $request->playingtime;
        // $mypianolog->playingtimenrp = $request->playingtimenrp;
        // $mypianolog->score = $request->score;
        // $mypianolog->readingperiod = $request->readingperiod;
        // $mypianolog->exercise = $request->exercise;
        // $mypianolog->recording = $request->recording;
        // $mypianolog->url = $request->url;
        // $mypianolog->soundsource = $request->soundsource;
        // $mypianolog->books = $request->books;
        $mypianolog->save();

        return to_route('mypianologs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $mypianolog = MyPianoLog::find($id);
        $mypianolog = PianoLog::find($id);
        // dd($id);
        $mypianolog->delete();

        return to_route('mypianologs.index');
    }
}
