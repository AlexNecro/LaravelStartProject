<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';
    protected $fillable = ['text','is_enabled'];

    protected $casts = ['is_enabled' => 'boolean',];

    public static function maxPepito() {
        $beforeValue = Test::orderBy('id', 'desc')->first();
        Test::find($beforeValue->id)->text = 'So what about pepito?';
        Test::find($beforeValue->id)->is_enabled = 1;
        return $beforeValue;
    }

    public static function getById(int $id) {
        try {
            return Test::findOrFail($id);
        } catch (Exception $e) {
            return null;
        }
    }

    public static function getByText(string $text) {
        try {
            return Test::where('text', $text)->get();
        } catch (Exception $e) {
            return null;
        }
    }

}
