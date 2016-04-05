<?php

namespace Eduboard\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use Eduboard\Examination;
use Eduboard\Http\Requests;

class ExaminationController extends Controller
{   
    protected $examinations;

    public function __construct(Examination $examinations) 
    {
        $this->examinations = $examinations;   
        parent::__construct(); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Examination $examination)
    {   
        $examinations = $this->examinations->orderBy('examination', 'desc')->paginate();
        return view('admin.examination.index', compact('examinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Examination $examination)
    {
        return view('admin.examination.form', compact('examination'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ExaminationCreateRequest $request)
    {
        Examination::create($request->only('examination'));
        
        return redirect(route('admin.examination.create'))->with('status', 'Examination type created successfully');
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
        $examination = $this->examinations->findOrFail($id);

        return view('admin.examination.form', compact('examination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UpdateexaminationsRequest $request, $id)
    {
        $examination = $this->examinations->findOrFail($id);
        $examination->fill($request->only('examination'))->save();

        return redirect(route('admin.examination.edit', $id))->with('status', 'Examination type has been edited');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $examination = $this->examinations->findOrFail($id);

        $examination->delete();

        return redirect(route('admin.examination.index'))->with('status', 'Examination has type been deleted');
    }
}
