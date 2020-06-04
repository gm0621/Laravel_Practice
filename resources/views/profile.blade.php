@extends("template")

@section('content')
    <div class="container">
        <h1>{{ $user->name }}'s Profile</h1>
        <p>
            See what {{ $user->name }} has been up to on LaravelAnswers.
        </p>
        <hr />

        <div class="row">
            <div class="col-sm-6">
                <h3>Questions</h3>

                @foreach($user->questions as $question)
                    <div class="card">
                        <div class="card-body">
                            <h4> {{ $question->title }}</h4>
                            <p>
                                {{ $question->description }}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('questions.show', $question->id) }}" class="btn btn-link">View Question</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-sm-6">
                <h3>Answers</h3>
                @foreach($user->answers as $answer)
                    <div class="card">
                        <h4 class="card-header">
                            <p>
                                {{ $answer->question->title }}
                            </p>
                        </h4>
                        <div class="card-body">
                            <p>
                                {{ $answer->content }}
                            </p>

                        </div>
                        <div class="card-footer">
                            <a href="{{ route('questions.show', $answer->question->id) }}" class="btn btn-link">View answer</a>
                        </div>
                    </div>
                @endforeach
            </div>
        <div>

    </div>
@endsection
