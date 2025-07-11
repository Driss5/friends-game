<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Quiz</title>
</head>
<body>

    @extends('component.createAndJoin')
    @section('header-text-1') 
        <p>Create Your Quiz</p>
    @endsection

    @section('header-text-2') 
        <p>Enter Code de Quiz de 5 Lettre</p>
    @endsection

    @section('frm-action') 
        <form action="{{Route('createQuiz')}}" method="post">
    @endsection

    @section('frm-inp-1') 
        <label for="name" class="form-groupe">Enter YourName</label>
        <input type="text" name="name" placeholder="Name" class="form-control" id="name">
    @endsection

    @section('frm-inp-2') 
        <label for="code" class="form-groupe">Enter Code</label>
        <input type="text" name="code" placeholder="XXXXXX" class="form-control" id="code">
    @endsection

    @section('frm-btn') 
        <button type="submit">Create Quiz</button>
    @endsection

    @section('error-mssg') 
        @if ($errors->has('name'))
            <p>{{$errors->first('name')}}</p>
        @elseif($errors->has('code'))
            <p>{{$errors->first('code')}}</p>
        @endif
    @endsection
    
    
</body>
</html>