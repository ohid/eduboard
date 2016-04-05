@extends('layouts/front')

@section('form')

<div class="col-md-8 col-md-offset-2">
    <form action="/result" method="post">
    {{ csrf_field() }}

        @if($errors->has())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif
        

        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label for="examination">Examination</label>
                </div>
                <div class="col-md-8">
                    <select type="text" id="examination" name="examination" class="form-control">
                        <option value="">Select Exam Type</option>
                        @foreach($examinations as $examination)
                            <option value="{{ $examination->examination }}">{{ $examination->examination }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label for="year">Year</label>
                </div>
                <div class="col-md-8">
                    <select type="text" name="year" id="year" class="form-control">
                        <option value="" >Select Examination Year</option>
                        @foreach($years as $year)
                            <option value="{{ $year->year }}">{{ $year->year }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label for="board">Board</label>
                </div>
                <div class="col-md-8">
                    <select type="text" id="board" name="board" class="form-control">
                        <option value="">Select Board</option>
                        @foreach($boards as $board)
                            <option value="{{ $board->board }}">{{ $board->board }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label for="roll">Roll</label>
                </div>
                <div class="col-md-8">
                    <input type="text" id="roll" class="form-control" name="roll" placeholder="Enter roll">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                    <input type="submit" value="Submit" class="btn btn-success">
                    <input type="reset" value="Reset" class="btn btn-warning">
                </div>
            </div>
        </div>
    </form>
</div>

@stop
