<?php

namespace App\Http\Controllers;

use App\Models\User;
use PDF;
//use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function showUser()
    {
        $users = User::all();
        return view('index', compact('users'));
    }

    public function createPDF()
    {
        $data = User::all();
        view()->share('users', $data);
        $pdf = PDF::loadView('pdf_view')
            ->setPaper('a4', 'landscape')
            ->setWarnings(false)->save('mon_fichier.pdf');
        return $pdf->stream();
    }
}