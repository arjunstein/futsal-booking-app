<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(CategoryField::class, 'category_id');
    }

    public static function getFutsalFields()
    {
        return self::orderBy('lapangans.id', 'asc')
            ->join('category_fields', 'lapangans.category_id', '=', 'category_fields.id')
            ->select('lapangans.*', 'category_fields.category_field_name')
            ->where('category_fields.category_field_name', 'like', '%futsal%')->get();
    }

    public static function getMiniSoccerFields()
    {
        return self::orderBy('lapangans.id', 'asc')
            ->join('category_fields', 'lapangans.category_id', '=', 'category_fields.id')
            ->select('lapangans.*', 'category_fields.category_field_name')
            ->where('category_fields.category_field_name', 'like', '%mini soccer%')->get();
    }
}
