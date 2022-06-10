<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index() {
        Return Book::get();
    }

    public function store(Request $request) {

        $request->validate([
            'email' => ['required', 'email'],
            'modalidade' => ['required', 'string'],
            'nome' => ['required', 'string'],
            'quantidadeInfantil' => ['required', 'numeric'],
            'quantidadeRomance' => ['required', 'numeric'],
            'quantidadeReligioso' => ['required', 'numeric'],
            'quantidadeSaude' => ['required', 'numeric']
        ]);

        $relatoriolancado = $request->all();

        return Book::create($relatoriolancado);
    }

}
