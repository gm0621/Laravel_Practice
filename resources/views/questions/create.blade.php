<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <h1> Ask for Questions</h1>
            <hr />

            <form action="{{ route('questions.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Questions:</label>
                    <input type="text" class="form-control" placeholder="input your question's subject" id="title" name="title">
                </div>

                <div class="form-group">
                    <label for="description">More Information:</label>
                    <textarea class="form-control" rows="4" name="description" id="description"></textarea>
                </div>       

                <button type="submit" class="btn btn-primary">Send a Question</button>         
                

            </form>
        
        </div>

    </body>
</html>
