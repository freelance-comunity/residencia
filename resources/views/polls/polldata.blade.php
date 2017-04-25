@extends('layouts.app')

@section('main-content')

<div class="container">

    <div class="row">

        <table class="table">
            <thead>
                <th>Question 1</th>
                <th>Question 2</th>
                <th>Question 3</th>
                <th>Question 4</th>
                <th>Question 5</th>
                <th>Question 6</th>
                <th>Question 7</th>
                <!--<th width="50px">Action</th>-->
            </thead>
            <tbody>
                <tr>
                    <td>{!! $poll->question_1 !!}</td>
                    <td>{!! $poll->question_2 !!}</td>
                    <td>{!! $poll->question_3 !!}</td>
                    <td>{!! $poll->question_4 !!}</td>
                    <td>{!! $poll->question_5 !!}</td>
                    <td>{!! $poll->question_6 !!}</td>
                    <td>{!! $poll->question_7 !!}</td>
                    <!--<td>
                        <a href="{!! route('polls.edit', [$poll->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('polls.delete', [$poll->id]) !!}" onclick="return confirm('Are you sure wants to delete this Poll?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>-->
                </tr>
            </tbody>
        </table>
        <table class="table">
            <thead>
                <th>Question 8</th>
                <th>Question 9</th>
                <th>Question 10</th>
                <th>Question 11</th>
                <th>Question 12</th>
                <th>Question 13</th>
                <th>Question 14</th>
                <th>Comment</th>
            </thead>
            <tbody>
             <td>{!! $poll->question_8 !!}</td>
             <td>{!! $poll->question_9 !!}</td>
             <td>{!! $poll->question_10 !!}</td>
             <td>{!! $poll->question_11 !!}</td>
             <td>{!! $poll->question_12 !!}</td>
             <td>{!! $poll->question_13 !!}</td>
             <td>{!! $poll->question_14 !!}</td>
             <td>{!! $poll->comment !!}</td>
         </tbody>
     </table>
 </div>
</div>
@endsection