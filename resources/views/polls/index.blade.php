@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Polls</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('polls.create') !!}">Add New</a>
    </div>

    <div class="row">
        @if($polls->isEmpty())
        <div class="well text-center">No Polls found.</div>
        @else
        <table class="table">
            <thead>
                <th>Question 1</th>
                <th>Question 2</th>
                <th>Question 3</th>
                <th>Question 4</th>
                <th>Question 5</th>
                <th>Question 6</th>
                <th>Question 7</th>
                <th>Question 8</th>
                <th>Question 9</th>
                <th>Question 10</th>
                <th>Question 11</th>
                <th>Question 12</th>
                <th>Question 13</th>
                <th>Question 14</th>
                <th>Comment</th>
                <th width="50px">Action</th>
            </thead>
            <tbody>
               
                @foreach($polls as $poll)
                <tr>
                    <td>{!! $poll->question_1 !!}</td>
                    <td>{!! $poll->question_2 !!}</td>
                    <td>{!! $poll->question_3 !!}</td>
                    <td>{!! $poll->question_4 !!}</td>
                    <td>{!! $poll->question_5 !!}</td>
                    <td>{!! $poll->question_6 !!}</td>
                    <td>{!! $poll->question_7 !!}</td>
                    <td>{!! $poll->question_8 !!}</td>
                    <td>{!! $poll->question_9 !!}</td>
                    <td>{!! $poll->question_10 !!}</td>
                    <td>{!! $poll->question_11 !!}</td>
                    <td>{!! $poll->question_12 !!}</td>
                    <td>{!! $poll->question_13 !!}</td>
                    <td>{!! $poll->question_14 !!}</td>
                    <td>{!! $poll->comment !!}</td>
                    <td>
                        <a href="{!! route('polls.edit', [$poll->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('polls.delete', [$poll->id]) !!}" onclick="return confirm('Are you sure wants to delete this Poll?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection