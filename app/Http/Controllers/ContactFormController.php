<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  //20230326追加
use App\Models\ContactForm;
use App\Models\Age;
use App\Models\Gender;
use App\Services\CheckFormService;
use App\Http\Requests\StoreContactRequest;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contacts = ContactForm::query();
        $check = 0; //いずれかの検索項目に入力されていたら1になり、全て空欄なら0

        if ($request->filled('age_id')) {
            $age_id = $request->input('age_id');
            $contacts->where('age_id', $age_id);
            $check = 1;
            // \Log::debug("age_id: $age_id");
        }         
        if ($request->filled('gender_id')) {
            $gender_id = $request->input('gender_id');
            $contacts->where('gender_id', $gender_id);
            $check = 1;
            // dd($contacts);
            // \Log::debug("age_id: $age_id");
        } 
            // 検索してねっていうのが伝わるデータを1件入れておくのはどうだろうか。
            // 他に解決策がないのでいったんこれで！



        // すべての検索項目空欄時には、1つだけ例としてのデータを渡す。
        if ($check === 0) {
            $contacts->where('username', 'searchplease');
        }

        $contacts = $contacts->paginate(10);

        // 以下、入力項目のプルダウンデータ取得用(各マスタから)
        $ages = Age::all();
        $genders = Gender::all();

        // ページング対象のレコードが0件の場合、空のコレクションを作成する
        if ($contacts->isEmpty()) {
            $contacts = collect();
        }

        return view('Contacts.index', compact('contacts','ages','genders'));
        // $query = DB::table('contact_forms');
        // // genderがリクエストに含まれている場合、その値で検索する
        // if ($request->filled('gender')) {
        //     $gender = $request->input('gender');
        //     $query->where('gender', $gender);
        // }
        // if ($request->filled('age')) {
        //     $age = $request->input('age');
        //     $query->where('age', $age);
        // }
        // contact_formテーブルから全件取得する
        // $contacts = [];  
        //最初は↑でやっていたが、これだと配列contactsが空になってしまうのがエラーの原因らしい。なので、下記の通り変更した。
           // クエリパラメーターから検索条件を取得
        // $username = $request->input('username');
        // $query = DB::table('contact_forms');
        // if (!empty($username)) {
        //     $query->where('username', 'like', "%{$username}%");
        // }
       
        // $contacts = $query->where('gender', '3')->paginate(20);
        // $contacts = $query->paginate(20);
        // if(empty($username)){
        //     $contacts = [];
        // }

        // ビューにデータを渡す
        // return view('Contacts.index', compact('contacts'));
        // $contacts = ContactForm::select('id','username','age','gender','pstartage','totalhistory','pianohon','soundproofhon','community')
        // ->get();

        // ペジネーション対応
        // $contacts = ContactForm::select('id','username','age','gender','pstartage','totalhistory','pianohon','soundproofhon','community')
        // ->paginate(20);

        // 検索対応
        // $search = $request->search;
        // $query = ContactForm::search($search);
        // $contacts = $query->select('id','username','userid','age','gender','pstartage','totalhistory','pianohon','soundproofhon','community')
        // ->paginate(20);

        // return view('Contacts.index', compact('contacts','age','gender','pstartage','totalhistory','pianohon','soundproofhon'));
        // return view('Contacts.index', compact('contacts'));
    }

    public function search(Request $request)
    {
        // // -----複数項目条件指定---ここから
        // $username = $request->input('username');
        // $email = $request->input('email');
        // // 検索条件に合致するデータを取得する
        // 検索対応
        // $search = $request->search;
        // $query = ContactForm::query(search);
        // if ($username) {
        //     $query->where('username', 'LIKE', "%$username%");
        // }
        // if ($email) {
        //     $query->where('email', 'LIKE', "%$email%");
        // }
        // $contacts = $query->paginate(20);
        // // -----複数項目条件指定---ここまで

    // 検索条件を取得
    $pname = $request->input('username');
    $userid = $request->input('userid');
    $age = $request->input('age');
    $gender = $request->input('gender');

    // クエリビルダで検索クエリを組み立てる
    $query = DB::table('contact_forms');
    if (!empty($username)) {
        $query->where('username', 'like', "%{$username}%");
    }
    if (!empty($userid)) {
        $query->where('userid', 'like', "%{$userid}%");
    }
    if (!empty($age)) {
        $query->where('age', $age);
    }
    if (!empty($gender)) {
        $query->where('gender', $gender);
    }

    // 検索結果を取得してビューに渡す
    $contacts = $query->paginate(20);
    
    return view('Contacts.index', compact('contacts'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactRequest $request)
    {
        // dd($request, $request->name);
        
        ContactForm::create([
            'username' => $request->username,
            'userid' => $request->userid,
            'email' => $request->email,
            'age' => $request->age,
            'gender' => $request->gender,
            'pstartage' => $request->pstartage,
            'totalhistory' => $request->totalhistory,
            'pianohon' => $request->pianohon,
            'soundproofhon' => $request->soundproofhon,
            'community' => $request->community,
        ]);

        return to_route('Contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = ContactForm::find($id);

        $gender = CheckFormService::checkGender($contact);
        $age = CheckFormService::checkAge($contact);
        $pstartage = CheckFormService::checkPstartage($contact);     
        $totalhistory = CheckFormService::checkTotalhistory($contact);
        $pianohon = CheckFormService::checkPianohon($contact);
        $soundproofhon = CheckFormService::checkSoundproofhon($contact);

        return view('Contacts.show', compact('contact','age','gender','pstartage','totalhistory','pianohon','soundproofhon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = ContactForm::find($id);

        return view('Contacts.edit', compact('contact'));
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
        $contact = ContactForm::find($id);
        $contact->username = $request->username;
        $contact->userid = $request->userid;
        $contact->email = $request->email;
        $contact->age = $request->age;
        $contact->gender = $request->gender;
        $contact->pstartage = $request->pstartage;
        $contact->totalhistory = $request->totalhistory;
        $contact->pianohon = $request->pianohon;
        $contact->soundproofhon = $request->soundproofhon;
        $contact->community = $request->community;
        $contact->save();

        return to_route('Contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = ContactForm::find($id);
        $contact->delete();

        return to_route('Contacts.index');
    }
}
