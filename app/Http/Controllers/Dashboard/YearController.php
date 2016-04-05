<?php

namespace Eduboard\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use Eduboard\Year;
use Eduboard\Http\Requests;

class YearController extends Controller
{   
    protected $years;

    public function __construct(Year $years) 
    {
        $this->years = $years;    
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Year $year)
    {   
        $years = $this->years->orderBy('year', 'desc')->paginate();
        return view('admin.year.index', compact('years'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Year $year)
    {
        return view('admin.year.form', compact('year'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\YearCreateRequest $request)
    {

        Year::create($request->only('year'));
        
        return redirect(route('admin.year.create'))->with('status', 'Year created successfully');
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
        $year = $this->years->findOrFail($id);

        return view('admin.year.form', compact('year'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UpdateYearsRequest $request, $id)
    {
        $year = $this->years->findOrFail($id);
        $year->fill($request->only('year'))->save();

        return redirect(route('admin.year.edit', $id))->with('status', 'Year has been edited');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $year = $this->years->findOrFail($id);

        $year->delete();

        return redirect(route('admin.year.index'))->with('status', 'Year has been deleted');
    }
}
