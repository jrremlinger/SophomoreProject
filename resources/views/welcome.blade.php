<!--
<link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}"/>
-->


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eranthis Communities Home</title>

        <link rel="icon" href="/favicon.ico">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>

    </head>

    <body class="flex flex-col items-center bg-gradient-to-t from-green-900 to-green-400">

        <div class="flex font-serif text-5xl text-center justify-center text-white bg-green-900 h-56 items-center w-full cursor-default">
            Eranthis<br/>Communities
        </div>

        <div class="flex flex-col items-center w-50 mt-8 justify-around bg-green-100 w-3/5 h-80 rounded-xl mb-10">

            <button class="bg-green-900 w-64 font-serif text-3xl text-white rounded-xl h-1/5 hover:bg-green-700" type="button" onclick="window.location.href='/login'">Login</button>

            <button class="bg-green-900 w-64 font-serif text-3xl text-white rounded-xl h-1/5 hover:bg-green-700" type="button" onclick="window.location.href='/register'">Register</button>

        </div>

    </body>
</html>
