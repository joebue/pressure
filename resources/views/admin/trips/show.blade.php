@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.trip.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.trips.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.trip.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $trip->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.trip.fields.trip_name') }}
                                    </th>
                                    <td>
                                        {{ $trip->trip_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.trip.fields.description') }}
                                    </th>
                                    <td>
                                        {{ $trip->description }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.trip.fields.travel_time') }}
                                    </th>
                                    <td>
                                        {{ $trip->travel_time }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.trips.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.relatedData') }}
                </div>
                <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
                    <li role="presentation">
                        <a href="#trip_bookings" aria-controls="trip_bookings" role="tab" data-toggle="tab">
                            {{ trans('cruds.booking.title') }}
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" role="tabpanel" id="trip_bookings">
                        @includeIf('admin.trips.relationships.tripBookings', ['bookings' => $trip->tripBookings])
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection