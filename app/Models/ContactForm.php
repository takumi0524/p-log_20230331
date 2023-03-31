<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'userid',
        'email',
        'age',
        'gender',
        'pstartage',
        'totalhistory',
        'pianohon',
        'soundproofhon',
        'community',
        // cautionは不要
        // 以下外部キー追加
        'age_id',
        'gender_id'
    ];

    // public function scopeSearch($query, $search)
    // {
    //     if($search !== null){
    //         $search_split = mb_convert_kana($search, 's'); // 全角スペースを半角
    //         $search_split2 = preg_split('/[\s]+/', $search_split); //空白で区切る
    //         foreach( $search_split2 as $value ){
    //         $query->where('username', 'like', '%' .$value. '%'); }
    //     }
    //     return $query;
    // }

    public function ages()
    {
        return $this->belongsTo(Age::class);
    }
    public function genders()
    {
        return $this->belongsTo(Gender::class);
    }

    // public function genders()
    // {
    //     return $this->belongsTo(Gender::class);
    // }

    public function scopeFilter($query, $filters)
    {
        if(isset($filters['age_id'])) {
            $query->where('age_id', $filters['age_id']);
        }
        if(isset($filters['gender_id'])) {
            $query->where('gender_id', $filters['gender_id']);
        }

        // if(isset($filters['status'])) {
        //     $query->where('status', $filters['status']);
        // }

        return $query;
    }
}
