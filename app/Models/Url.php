<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Url extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'default_url',
        'short_url',
    ];

    
    static function insert_urls($default_url,$short_url)
    {
        DB::table('urls')
            ->insert([
                'default_url' => $default_url,
                'short_url'  => $short_url
            ]);
    }
}
