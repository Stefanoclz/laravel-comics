<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>DC Comics</title>
</head>
<body>

    @include('partials.header')

    <main class="mainDetail">

        <div class="borderMain">
        </div>

        <div class="containerDetail">
        <img class="imgDetail" src={{ $lista[0]['thumb'] }} alt="Comic">

        <div class="infoComic">

            <div class="description">

                <div class="title">
                    <h1>{{ $lista[0]['title'] }}</h1>
                </div>

                <div class="infoPrice">
                    <div class="price">
                        <h5><span>U.S. Price: </span>{{ $lista[0]['price'] }}</h5>
                        <h5><span>AVAILABLE</span></h5>
                    </div>
                    <div class="disponibility">
                        <div>
                            <select name="disponibility" id="">
                                <option value="Check availability">Check availability</option>
                                <option value="availabile">Availabile</option>
                                <option value="Not availabile">Not availabile</option>
                            </select>
                        </div>
                    </div>                                 
                </div>

                <div class="plot">
                    {{ $lista[0]['description'] }}
                </div>
            </div>

            <div class="adv">
                <h5>ADVERTISEMENT</h5>
                <img src="images/adv.jpg" alt="adv">
            </div>
        </div>
        

        <!-- BOT MAIN -->

        <div class="botMain">
            
        </div>
        
    </main>

    @include('partials.topFooter')

    @include('partials.footer')
    
</body>
</html>