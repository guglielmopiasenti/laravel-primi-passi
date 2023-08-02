<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/css/app.css">
    <title>Home</title>
</head>
<body>
    <nav>
        <a href="technologies">HTML</a>
        <a href="technologies2">CSS</a>
        <a href="technologies3">JS</a>
    </nav>
    <h1>
        HELLO LARAVEL
    </h1>
    <ul>
        @forelse($technologies as $technology)
            <li>{{ $technology }}</li>
        @empty
            <li>No technologies available.</li>
        @endforelse
    </ul>
    
</body>
</html>