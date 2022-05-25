<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPressureRequest;
use App\Http\Requests\StorePressureRequest;
use App\Http\Requests\UpdatePressureRequest;
use App\Models\Pressure;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PressureController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pressure_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pressures = Pressure::all();

        return view('admin.pressures.index', compact('pressures'));
    }

    public function create()
    {
        abort_if(Gate::denies('pressure_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pressures.create');
    }

    public function store(StorePressureRequest $request)
    {
        $pressure = Pressure::create($request->all());

        return redirect()->route('admin.pressures.index');
    }

    public function edit(Pressure $pressure)
    {
        abort_if(Gate::denies('pressure_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pressures.edit', compact('pressure'));
    }

    public function update(UpdatePressureRequest $request, Pressure $pressure)
    {
        $pressure->update($request->all());

        return redirect()->route('admin.pressures.index');
    }

    public function show(Pressure $pressure)
    {
        abort_if(Gate::denies('pressure_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pressures.show', compact('pressure'));
    }

    public function destroy(Pressure $pressure)
    {
        abort_if(Gate::denies('pressure_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pressure->delete();

        return back();
    }

    public function massDestroy(MassDestroyPressureRequest $request)
    {
        Pressure::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
