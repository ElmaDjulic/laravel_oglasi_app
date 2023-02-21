<?php

namespace App\Http\Requests;

use App\Models\Listing;
use Illuminate\Foundation\Http\FormRequest;

class ListingRequest extends FormRequest
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
        if ($this->method() == 'PUT') {
            return [
                'title' => 'required'
            ];
        }
        return [
           
            'title'=>'required',
           
            'salary'=>'required',
            
        ];
    }
    public function getData()
    {
        $data = $this->validated() + [
            'user_id' => $this->user()->id ];
/* 
        if ($this->hasFile('logo'))
        {
            $directory = Listing::makeDirectory();

            $data['logo'] = $this->logo->store($directory);
        }
 */
        return $data;
    }

}
