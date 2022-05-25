@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.booking.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.bookings.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('trip') ? 'has-error' : '' }}">
                            <label class="required" for="trip_id">{{ trans('cruds.booking.fields.trip') }}</label>
                            <select class="form-control select2" name="trip_id" id="trip_id" required>
                                @foreach($trips as $id => $entry)
                                    <option value="{{ $id }}" {{ old('trip_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('trip'))
                                <span class="help-block" role="alert">{{ $errors->first('trip') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.booking.fields.trip_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('tripname') ? 'has-error' : '' }}">
                            <label class="required">{{ trans('cruds.booking.fields.tripname') }}</label>
                            <select class="form-control" name="tripname" id="tripname" required>
                                <option value disabled {{ old('tripname', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Booking::TRIPNAME_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('tripname', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('tripname'))
                                <span class="help-block" role="alert">{{ $errors->first('tripname') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.booking.fields.tripname_helper') }}</span>
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