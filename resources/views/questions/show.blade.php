@extends('template')

@section("content")
<div class='container'>
    <h1>{{ $question->title }} </h1>
    <p class="lead">
        {{ $question->description }}
    </p>

    <hr />

    <!-- display all of the answers for this question -->
    @if($question->answers->count() > 0)
        @foreach ($question->answers as $answer)
            <div class="container p-3 my-3 border">
                <p>
                    {{ $answer->content }}
                </p>
            </div>
        @endforeach
    @else
        <p>
            There are no answers for this question yet. Please consider submitting one below!
        </p>
    @endif


    <!-- display the form, to submit a new answer -->
    <br />
    <form action="{{ route('answers.store')}}" method="post" >
        @csrf
        <h4>Submit Your Own Answer：</h4><br />
        <textarea class="form-control" name="content" row="4"></textarea><br />
        <input type="hidden" value="{{ $question->id }}" name="question_id" /><br />
        <button type="submit" class="btn btn-primary">Submit Answer</button>

    </form>


</div>

@endsection

