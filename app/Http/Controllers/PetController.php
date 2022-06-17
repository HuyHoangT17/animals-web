<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pets;

class PetController extends Controller
{
    //
    public $data = [];
    protected $pets;

    public function __construct()
    {
        $this->inu = new Pets();
    }

    public function index()
    {
        $petsList = $this->inu->getAllPets();


        return view('home', compact('petsList'), $this->data);
    
        
    }

    
}
