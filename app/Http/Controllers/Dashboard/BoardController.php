<?php

namespace Eduboard\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use Eduboard\Board;
use Eduboard\Http\Requests;

class BoardController extends Controller
{   
    protected $boards;

    public function __construct(Board $boards) 
    {
        $this->boards = $boards;

        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Board $board)
    {   
        $boards = $this->boards->orderBy('board', 'desc')->paginate();
        return view('admin.board.index', compact('boards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Board $board)
    {
        return view('admin.board.form', compact('board'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\BoardCreateRequest $request)
    {

        Board::create($request->only('board'));
        
        return redirect(route('admin.board.create'))->with('status', 'Board created successfully');
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
        $board = $this->boards->findOrFail($id);

        return view('admin.board.form', compact('board'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UpdateBoardsRequest $request, $id)
    {
        $board = $this->boards->findOrFail($id);
        $board->fill($request->only('board'))->save();

        return redirect(route('admin.board.edit', $id))->with('status', 'Board has been edited');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $board = $this->boards->findOrFail($id);

        $board->delete();

        return redirect(route('admin.board.index'))->with('status', 'Year has been deleted');
    }
}
