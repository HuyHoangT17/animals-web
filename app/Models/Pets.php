<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pets extends Model
{
    use HasFactory;
    protected $table = 'inu';

    public function getAllPets()
    {
        $pets = DB::table($this->table)
        ->select('title', 'type', 'age', 'gender', 'location', 'applyarea')
        ->where('id', 1)
        ->get();
        return $pets;
    }
}
