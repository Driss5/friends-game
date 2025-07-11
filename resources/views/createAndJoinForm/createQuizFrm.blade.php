<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/createFrm.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Create Quiz</title>
</head>
<body>
    <div class="containerr">
        <div class="headerr">
            <p>Create Your Quiz And Test Your Friend</p>
            <p>ALL CHAMP IS REQUIRED</p>
            {{-- <p>{{$codeQ}}</p> --}}
        </div>
        <form action="{{Route('createQuestions')}}" method="POST">
            @csrf
            <input type="hidden" name="codeQ" value="{{ $codeQ }}">
            <div class="question-cont">
        
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit">Start Quiz</button>
            </div>
        </form>
    </div>

    <script src="js/createQuizFrm.js"></script>
</body>
</html>