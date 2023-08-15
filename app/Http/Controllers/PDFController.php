<?php

namespace App\Http\Controllers;

use PDF;
//use Dompdf\Dompdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {

        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'motif' => $request->motif,
            'date' => date('m/d/Y'),
            'name' => 'Mon fichier PDF générer',
        ];

        $pdf = PDF::loadView('myPDF', $data)->setOptions(['defaultFont' => 'Arial'])->setPaper('A4', 'portrait');
        return $pdf->download('demande_permission.pdf');

    }

    public function sendInfo(Request $request)
    {
        return dd($request->all());
    }

    public function voirPDF(Request $request){
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'motif' => $request->motif,
            'date' => date('m/d/Y'),
            'name' => 'Mon fichier PDF générer',
        ];
        return view('myPDF');
    }
}