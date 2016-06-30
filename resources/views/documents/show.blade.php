<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=OpenSans" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 60px;
                width: 100%;
                font-family: 'Lato';
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>{{ $document->title }}</h1>
            <p>{{ $document->body }}</p>

            <h2>Adjustments</h2>
            <ul>
                @foreach($document->adjustments as $user)
                    <li><strong>{{ $user->email }}</strong> on {{ $user->pivot->updated_at->diffForHumans() }}</li>
                @endforeach
            </ul>
        </div>
    </body>
</html>
