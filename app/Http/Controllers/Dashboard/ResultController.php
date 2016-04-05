<?php

namespace Eduboard\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use Eduboard\Result;
use Eduboard\Board;
use Eduboard\Year;
use Eduboard\Examination;
use Eduboard\Http\Requests;

class ResultController extends Controller
{   
    protected $results;

    public function __construct(Result $results) 
    {
        $this->results = $results;    
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Result $results)
    {   
        $results = $this->results->orderBy('roll', 'desc')->paginate(100);
        return view('admin.result.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Result $result)
    {
        $boards = Board::all();
        $years = Year::all();
        $examinations = Examination::all();

        return view('admin.result.form', compact('result', 'boards', 'years', 'examinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ResultCreateRequest $request)
    {

        Result::create($request->all());
        
        return redirect(route('admin.result.create'))->with('status', 'Result created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = $this->results->findOrFail($id);

        $boards = Board::all();
        $years = Year::all();
        $examinations = Examination::all();

        return view('admin.result.form', compact('result', 'boards', 'years', 'examinations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UpdateResultsRequest $request, $id)
    {
        $result = $this->results->findOrFail($id);
        $result->fill($request->all())->save();

        return redirect(route('admin.result.edit', $id))->with('status', 'Result has been edited');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->results->findOrFail($id);

        $result->delete();

        return redirect(route('admin.result.index'))->with('status', 'Result has been deleted');
    }
}
