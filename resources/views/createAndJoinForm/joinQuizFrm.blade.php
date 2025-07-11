<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/joinFrm.css">
    <link rel="stylesheet" href="bootstrap.min.css"> 
    @livewireStyles
    <title>Join</title>
</head>
<body>

    {{-- @livewire('question-list') --}}
    @livewire('question-list', ['code' => request()->route('code')])
        
    @livewireScripts
    
</body>
</html>