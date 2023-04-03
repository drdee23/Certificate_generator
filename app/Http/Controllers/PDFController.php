<?php
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = ['title' => 'Welcome to kwathu.com'];
        $pdf = PDF::loadView('pdf\myPDF', $data);
  
        return $pdf->download('kwathu.pdf');
    }

    public function view_pdf()
    {
        $data = ['title' => 'Welcome to kwathu.com'];
        $pdf = PDF::loadView('pdf\myPDF', $data);
  
        // return view();
        return view('pdf.view_pdf', compact('data'));
  
    }

    public function login()
    {
     
  
        return view('auth.login');
    }
}