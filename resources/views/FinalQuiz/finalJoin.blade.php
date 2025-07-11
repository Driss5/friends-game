<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/finalJoin.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Final Quiz</title>
</head>
<body>
    <div class="parent">
        <div>
            <div class="header mt-3">
                <p>Thanks For Join </p>
                <p>Your Score : {{$scoreAff->score}}</p>
            </div>
            <div class="image-friend">
                <img src="/images/final/friend-1.jpg" alt="">
                <p>Thanks For Join</p>
                <div>
                    <button><a href="{{Route('home')}}">Play Another Game</a></button>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>