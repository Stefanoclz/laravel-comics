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
        
        </div>     
    </main>

    <!-- BOT MAIN -->  

    <div class="botMain">

        <div class="detail">

            <div class="talent">
                <div class="det">
                    <h2>Talent</h2>
                </div>
                <div class="det">
                    <h6>Art by:</h6>
                    <div>
                        @foreach($lista[0]['artists'] as $artist)
                        <p><a href="">{{ $artist }}</a></p>
                        @endforeach
                    </div>
                </div>
                <div class="det">
                    <h6>Written by: </h6>
                    <div>
                        @foreach($lista[0]['writers'] as $writer)
                        <p><a href="">{{ $writer }}</a></p>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="specs">
                <div class="det">
                    <h2>Specs</h2>
                </div>
                <div class="det">
                    <h6>Series: </h6>
                    <div>
                       <p><a href="">{{ $lista[0]['series'] }}</a></p>
                    </div>
                </div>
                <div class="det">
                    <h6>U.S. Price: </h6>
                    <div>
                        <p>{{ $lista[0]['price'] }}</p>
                    </div>
                </div>
                <div class="det">
                    <h6>On Sale Date: </h6>
                    <div>
                     <p>{{ $lista[0]['sale_date'] }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('partials.topFooterDetail')

    @include('partials.footer')
    
</body>
</html>