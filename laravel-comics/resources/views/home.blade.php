<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>DC Comics</title>
</head>
<body>

    @include('partials.header')

    <main>
        <div class="container">
            <div class="current">CURRENT SERIES</div>
            @foreach($lista as $index => $comic)
            @include("partials.card", ['comic'=>$comic, 'index'=>$index])
            @endforeach
        </div>
        <button>LOAD MORE</button>
    </main>

    @include('partials.topFooter')

    @include('partials.footer')
    
</body>
</html>