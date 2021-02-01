<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Honor;

class HonorsController extends Controller
{
    public function create() {
        return view('honors.create');
    }

    public function store() {

        $data = request()->validate([
            'title' => 'required',
            'image' => 'required|image',
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        Honor::create([
            'title' => $data['title'],
            'image' => $imagePath,
        ]);

        return redirect('pages/hall');
    }
}
