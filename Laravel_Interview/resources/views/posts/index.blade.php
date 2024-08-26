<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="../../css/app.css"></link>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Page</title>
</head>
<body>
    <div class="container">
        <div class="welcome">
            Welcome. Click here to view posts
        </div>
    </div>
    <div class="link-container">
        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            Posts
        </a>
    </div>
</body>
</html>
