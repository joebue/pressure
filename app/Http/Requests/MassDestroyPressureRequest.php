<?php

namespace App\Http\Requests;

use App\Models\Pressure;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPressureRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('pressure_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:pressures,id',
        ];
    }
}
