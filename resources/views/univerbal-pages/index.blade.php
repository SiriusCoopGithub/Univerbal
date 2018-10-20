<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>{{config('app.name', 'NotFound')}}</title>
</head>

<body>
    <div>
        <h1>index page</h1>
    </div>
    <div class="flex-center position-ref full-height">

        {{-- Try the example component from vue.js --}}
        <div class="content" id="app">
            <example-component></example-component>
        </div>
    </div>

    <script src="/js/app.js"></script>
</body>

</html>
