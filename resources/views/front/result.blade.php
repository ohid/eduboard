@extends('layouts.front')

@if(count($results) > 0)

        @foreach($results as $result)
        @section('form')
        <h4 class="text-center">Hello <i>{{ $result->name }}</i>, Here is your result</h4>
        @stop
        @section('result')
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h4>{{ $result->examination }} Result Publication {{ $result->year }}</h4>

                    <br>

                    <table class="table table-hover result-table">
                        <tr>
                            <td>Roll No:</td>
                            <td>{{ $result->roll }}</td>
                            <td>Name:</td>
                            <td>{{ $result->name }}</td>
                        </tr>

                        <tr>
                            <td>Board</td>
                            <td>{{ $result->board }}</td>
                            <td>Father's Name:</td>
                            <td>{{ $result->fathers_name }}</td>
                        </tr>

                        <tr>
                            <td>Group:</td>
                            <td>{{ $result->sub_group }}</td>
                            <td>Mother's Name:</td>
                            <td>{{ $result->mothers_name }}</td>
                        </tr>

                        <tr>
                            <td>Type:</td>
                            <td>{{ $result->type }}</td>
                            <td>Date of Birth</td>
                            <td>{{ $result->birth }}</td>
                        </tr>

                        <tr>
                            <td>Result:</td>
                            <th>GPA={{ $result->gpa }}</th>
                            <td>Institute:</td>
                            <td>{{ $result->institute }}</td>
                        </tr>

                        <tr>
                            <td>GPA</td>
                            <th>{{ $result->gpa }}</th>
                            <td></td>
                            <td></td>
                        </tr>

                    </table>
                </div>
            </div>
            
            <br><br><br>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h4>Subject-Wise Grade/ Mark Sheet</h4>

                    <br>

                    <table class="table table-hover result-subject-table">
                        <tr>
                            <th>Subject</th>
                            <th>Grade Points:</th>
                        </tr>

                        <tr>
                            <td>Bangla</td>
                            <td>{{ $result->bangla }}</td>
                        </tr>

                        <tr>
                            <td>English</td>
                            <td>{{ $result->english }}</td>
                        </tr>

                        <tr>
                            <td>MATHEMATICS</td>
                            <td>{{ $result->math }}</td>
                        </tr>

                        <tr>
                            <td>GENERAL SCIENCE</td>
                            <td>{{ $result->science }}</td>
                        </tr>

                        <tr>
                            <td>RELIGION</td>
                            <td>{{ $result->religion }}</td>
                        </tr>

                        <tr>
                            <td>INTRODUCTION TO BUSINESS</td>
                            <td>{{ $result->int_to_busi }}</td>
                        </tr>

                        <tr>
                            <td>ACCOUNTING</td>
                            <td>{{ $result->accounting }}</td>
                        </tr>

                        <tr>
                            <td>BUSINESS ENTREPRENEURSHIP</td>
                            <td>{{ $result->business_entre }}</td>
                        </tr>

                        <tr>
                            <td>AGRICULTURE STUDIES</td>
                            <td>{{ $result->agriculture }}</td>
                        </tr>
                    </table>
                    <br>
                     <a href="/" class="btn btn-success text-center btn-lg"> Search again</a>
                </div>
            </div>

        @stop
        @endforeach

@else

@section('form')
	<div class="row">
        <div class="col-md-8 col-md-offset-2 bg-warning ">
            <div class="text-center" style="padding: 15px;">
                <h4>Sorry, No results found. Please try again <a href="/">here</a>.</h4>
            </div>
        </div>
    </div>
@stop

@endif
