<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PianoLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'userid',
        'song',
        'composer',
        'playingage',
        'difficulty',
        'degree',
        'playingtime',
        'playingtimenrp',
        'score',
        'readingperiod',
        'exercise',
        'technique',
        'recording',
        'url',
        'soundsource',
        'books',
        // cautionは不要

        // 以下外部キー追加
        'composer_id',
        'song_id',
    ];

    public function composers()
    {
        return $this->belongsTo(Composer::class);
    }

    public function songs()
    {
        return $this->belongsTo(Song::class);
    }

    // public function genders()
    // {
    //     return $this->belongsTo(Gender::class);
    // }

    public function scopeFilter($query, $filters)
    {
        if(isset($filters['composer_id'])) {
            $query->where('composer_id', $filters['composer_id']);
        }
        if(isset($filters['song_id'])) {
            $query->where('song_id', $filters['song_id']);
        }

        return $query;
    }
}





// 下記はデフォルトの状態のもの
// <?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class PianoLog extends Model
// {
//     use HasFactory;
// }


