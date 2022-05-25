<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTravelRequest;
use App\Http\Requests\StoreTravelRequest;
use App\Http\Requests\UpdateTravelRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TravelController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('travel_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.travels.index');
    }

    public function create()
    {
        abort_if(Gate::denies('travel_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.travels.create');
    }

    public function store(StoreTravelRequest $request)
    {
        $travel = Travel::create($request->all());

        return redirect()->route('admin.travels.index');
    }

    public function edit(Travel $travel)
    {
        abort_if(Gate::denies('travel_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.travels.edit', compact('travel'));
    }

    public function update(UpdateTravelRequest $request, Travel $travel)
    {
        $travel->update($request->all());

        return redirect()->route('admin.travels.index');
    }

    public function show(Travel $travel)
    {
        abort_if(Gate::denies('travel_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.travels.show', compact('travel'));
    }

    public function destroy(Travel $travel)
    {
        abort_if(Gate::denies('travel_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $travel->delete();

        return back();
    }

    public function massDestroy(MassDestroyTravelRequest $request)
    {
        Travel::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
