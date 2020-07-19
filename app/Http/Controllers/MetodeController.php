<?php

namespace App\Http\Controllers;

use App\Models\Assesment;
use App\Models\Criteria;
use Illuminate\Http\Request;

class MetodeController extends Controller
{
    public function index()
    {
        $assesment = Assesment::with('alternatif:id,kode,nama')->get(); 
        $C1 = Assesment::max('nilai1');
        $C2 = Assesment::max('nilai2');
        $C3 = Assesment::max('nilai3');
        $C4 = Assesment::min('nilai4');
        $B1 = Criteria::where('kode', 'C1')->value('bobot');
        $B2 = Criteria::where('kode', 'C2')->value('bobot');
        $B3 = Criteria::where('kode', 'C3')->value('bobot');
        $B4 = Criteria::where('kode', 'C4')->value('bobot');
        
        return view('pages.saw', compact('assesment', 'C1', 'C2', 'C3', 'C4', 'B1', 'B2', 'B3', 'B4'));
        
    }
}
