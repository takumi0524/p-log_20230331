<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyPianoLog extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'username',
        'userid',
        'composer',
        'song',
        // 'playingage',
        'difficulty',
        'degree',
        'playingtime',
        // 'playingtimenrp',
        // 'score',
        // 'readingperiod',
        // 'exercise',
        // 'technique',
        // 'recording',
        // 'url',
        // 'soundsource',
        // 'books',
        // cautionは不要
    ];

    public function scopeSearch($query, $search)
    {
        if($search !== null){
            $search_split = mb_convert_kana($search, 's'); // 全角スペースを半角
            $search_split2 = preg_split('/[\s]+/', $search_split); //空白で区切る
            foreach( $search_split2 as $value ){
            $query->where('username', 'like', '%' .$value. '%'); }
        }
        return $query;
    }
}
