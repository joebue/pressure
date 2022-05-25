<?php

namespace App\Http\Requests;

use App\Models\Pressure;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePressureRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pressure_create');
    }

    public function rules()
    {
        return [
            'sys' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'dia' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'pulse' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'date' => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
        ];
    }
}
