@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.trip.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.trips.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('trip_name') ? 'has-error' : '' }}">
                            <label class="required" for="trip_name">{{ trans('cruds.trip.fields.trip_name') }}</label>
                            <input class="form-control" type="text" name="trip_name" id="trip_name" value="{{ old('trip_name', '') }}" required>
                            @if($errors->has('trip_name'))
                                <span class="help-block" role="alert">{{ $errors->first('trip_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.trip.fields.trip_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                            <label class="required" for="description">{{ trans('cruds.trip.fields.description') }}</label>
                            <input class="form-control" type="text" name="description" id="description" value="{{ old('description', '') }}" required>
                            @if($errors->has('description'))
                                <span class="help-block" role="alert">{{ $errors->first('description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.trip.fields.description_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('travel_time') ? 'has-error' : '' }}">
                            <label class="required" for="travel_time">{{ trans('cruds.trip.fields.travel_time') }}</label>
                            <input class="form-control date" type="text" name="travel_time" id="travel_time" value="{{ old('travel_time') }}" required>
                            @if($errors->has('travel_time'))
                                <span class="help-block" role="alert">{{ $errors->first('travel_time') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.trip.fields.travel_time_helper') }}</span>
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