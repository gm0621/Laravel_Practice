@extends('template')

@section("content")
<div class='container'>
    <h1>{{ $question->title }} </h1>
    <p class="lead">
        {{ $question->description }}
    </p>
    {{-- $question->user->name --}}
    Submitted by <span class="text-primary">{{ $question->user->name }}</span> on <span class="text-success">{{ $question->created_at->diffForHumans() }}</span>
    <hr />

    <!-- display all of the answers for this question -->
    @if($question->answers->count() > 0)
        @foreach ($question->answers as $answer)
            <div class="container p-3 my-3 border">
                <p>
                    {{ $answer->content }}
                </p>
            <h6>Answered By <span class="text-primary">{{ $answer->user->name }}</span>, <span class="text-success">{{$answer->created_at->diffForHumans()}}<span></h6>
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

