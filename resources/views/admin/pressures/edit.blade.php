@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.pressure.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.pressures.update", [$pressure->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('sys') ? 'has-error' : '' }}">
                            <label class="required" for="sys">{{ trans('cruds.pressure.fields.sys') }}</label>
                            <input class="form-control" type="number" name="sys" id="sys" value="{{ old('sys', $pressure->sys) }}" step="1" required>
                            @if($errors->has('sys'))
                                <span class="help-block" role="alert">{{ $errors->first('sys') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.pressure.fields.sys_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('dia') ? 'has-error' : '' }}">
                            <label class="required" for="dia">{{ trans('cruds.pressure.fields.dia') }}</label>
                            <input class="form-control" type="number" name="dia" id="dia" value="{{ old('dia', $pressure->dia) }}" step="1" required>
                            @if($errors->has('dia'))
                                <span class="help-block" role="alert">{{ $errors->first('dia') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.pressure.fields.dia_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('pulse') ? 'has-error' : '' }}">
                            <label class="required" for="pulse">{{ trans('cruds.pressure.fields.pulse') }}</label>
                            <input class="form-control" type="number" name="pulse" id="pulse" value="{{ old('pulse', $pressure->pulse) }}" step="1" required>
                            @if($errors->has('pulse'))
                                <span class="help-block" role="alert">{{ $errors->first('pulse') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.pressure.fields.pulse_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
                            <label class="required" for="date">{{ trans('cruds.pressure.fields.date') }}</label>
                            <input class="form-control datetime" type="text" name="date" id="date" value="{{ old('date', $pressure->date) }}" required>
                            @if($errors->has('date'))
                                <span class="help-block" role="alert">{{ $errors->first('date') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.pressure.fields.date_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection