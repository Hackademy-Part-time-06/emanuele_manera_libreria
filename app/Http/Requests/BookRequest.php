<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // true per non avere problemi di autorizzazione 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [ 
            "title" => "required|string|max:150",
            "author" => "required|string",
            "year" => "required|number",
            "pages" => "required|number"
        ];
    }

    public function messages () { // gestione messaggi di errore in lingua diversa (default: inglese) 
        return [
            'title.required' => 'Campo Nome richiesto',
            'title.string' => 'Il campo Nome deve essere di tipo stringa', 
            'title.max' => 'Il campo Nome deve essere di massimo 150 caratteri', 
            'author.required' => 'Campo Autore richiesto',
            'author.string' => 'Il campo Autore deve essere di tipo stringa',
            'year.required' => 'Campo Anno richiesto',
            'year.number' => 'Il campo Anno deve essere di tipo numerico',
            'pages.required' => 'Campo Pagine richiesto',
            'pages.number' => 'Il campo Pagine deve essere di tipo numerico'
        ];
    }
}
