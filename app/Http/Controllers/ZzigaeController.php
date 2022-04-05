<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zzigae;

class ZzigaeController extends Controller
{
    public function index() {
        //$zzigaes = Zzigae::all();
        //$zzigaes = Zzigae::orderBy('name', 'desc')->get();
        //$zzigaes = Zzigae::where('type', 'budae')->get();
        $zzigaes = Zzigae::latest()->get();
        return view('zzigaes.index', ['zzigaes' => $zzigaes]);
    }
    
    public function show($id) {
        $zzigae = Zzigae::findOrFail($id);
        return view('zzigaes.show', ['zzigae' => $zzigae]);
    }

    public function create() {
        return view('zzigaes.create');
    }

    public function store() {
        
        $zzigae = new Zzigae();
        $zzigae->name = request('name');
        $zzigae->type = request('type');
        $zzigae->soup = request('soup');
        $zzigae->toppings = request('toppings');

        $zzigae->save();

        return redirect('/')->with('msg', 'Thank you for order');
    }

    public function destroy($id) {
        $zzigae = Zzigae::findOrFail($id);
        $zzigae->delete();

        return redirect('/zzigaes');
    }
}
