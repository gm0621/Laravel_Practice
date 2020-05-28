@extends('template')

@section('content')

<div class="container">
    <h1>Recent Questions</h1>
    <hr />
    @foreach ($questions as $question)
        <div class="jumbotron">
            <h3> {{$question->title}} </h3>
            <p>
                {{ $question->description }}
            </p>
            <a href="{{ route('questions.show', $question->id) }}" class="btn btn-primary btn-ms"> View Details</a>
        </div>
    @endforeach

    {{ $questions->links() }}
</div>

@endsection
