<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSmartPianoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'userid' => ['required', 'string', 'max:255'],
            'song' => ['required', 'string', 'max:255'], 
            'composer' => ['required', 'composer', 'max:255'], 
            'song' => ['required', 'song', 'max:255'], 
            'number' => ['required', 'number', 'max:255'], 
            'genre' => ['required', 'genre', 'max:255'], 
            'opus' => ['required', 'opus', 'max:255'], 
            'movement' => ['required', 'movement', 'max:255'], 
            'key' => ['required', 'key', 'max:255'], 
            'commonname' => ['required', 'commonname', 'max:255'], 
            'playingage' => ['required'],
            'difficulty' => ['required'],
            'degree' => ['required'],
            'playingtime' => ['required'],
        ];
    }
}
