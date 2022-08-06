<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ranking</h1><br>
    <h2>Você acertou {{$nHits}} questões!</h2> <br>
    @foreach($records as $record)
    {{$record->name}} {{$record->pontuation}}<br>
    @endforeach
    
</body>
</html>