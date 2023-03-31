<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

        // genderテーブル：contact_formsテーブル＝1:多の関係を構築
        public function contact_forms()
        {
            return $this->hasMany(Contactform::class);
        }
}
