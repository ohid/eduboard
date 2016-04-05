<?php

namespace Eduboard\Http\Controllers;

use Illuminate\Http\Request;

use Eduboard\Result;
use Eduboard\Examination;
use Eduboard\Board;
use Eduboard\Year;
use Eduboard\Http\Requests;
use Eduboard\Http\Controllers\Controller;

class ResultsController extends Controller
{
    public function index() 
    {
        $examinations = Examination::all();
        $boards = Board::all();
        $years = Year::orderBy('year', 'desc')->get();

        return view('front.home', compact('examinations', 'boards', 'years'));
    }
   
    public function search(Requests\ResultRequest $request)
    {
        $examination = $request->input('examination');
        $year = $request->input('year');
        $board = $request->input('board');
        $roll = $request->input('roll');

        $results = Result::where([
            'examination' => $examination, 
            'year' => $year,
            'board' => $board, 
            'roll' => $roll, 
            ])->get();
        // $result = Result::find($roll);

        // dd($examination);

        // dd($result);

        return view('front.result', compact('results'));
    }

}
