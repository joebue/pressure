<?php

return [
    'userManagement' => [
        'title'          => 'Benutzerverwaltung',
        'title_singular' => 'Benutzerverwaltung',
    ],
    'permission' => [
        'title'          => 'Zugriffsrechte',
        'title_singular' => 'Berechtigung',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Rollen',
        'title_singular' => 'Rolle',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Benutzer',
        'title_singular' => 'Benutzer',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'pressure' => [
        'title'          => 'Pressure',
        'title_singular' => 'Pressure',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'sys'               => 'Sys',
            'sys_helper'        => 'Systolischer Druck',
            'dia'               => 'Dia',
            'dia_helper'        => 'Diastolischer Druck',
            'pulse'             => 'Pulse',
            'pulse_helper'      => 'Puls',
            'date'              => 'Date',
            'date_helper'       => 'Datum und Uhrzeit der Messung',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'travel' => [
        'title'          => 'Travel',
        'title_singular' => 'Travel',
    ],
    'travelTool' => [
        'title'          => 'Travel Tool',
        'title_singular' => 'Travel Tool',
    ],
    'trip' => [
        'title'          => 'Trip',
        'title_singular' => 'Trip',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'trip_name'          => 'Trip Name',
            'trip_name_helper'   => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'travel_time'        => 'Travel Time',
            'travel_time_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'booking' => [
        'title'          => 'Bookings',
        'title_singular' => 'Booking',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'trip'              => 'Trip',
            'trip_helper'       => ' ',
            'tripname'          => 'Tripname',
            'tripname_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
];