<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trip extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'trips';

    protected $dates = [
        'travel_time',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'trip_name',
        'description',
        'travel_time',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function tripBookings()
    {
        return $this->hasMany(Booking::class, 'trip_id', 'id');
    }

    public function getTravelTimeAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setTravelTimeAttribute($value)
    {
        $this->attributes['travel_time'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
