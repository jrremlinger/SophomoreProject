<!-- https://tailwindui.com/components/application-ui/forms/sign-in-forms -->

<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>
<body class="flex flex-col items-center bg-gradient-to-t from-green-900 to-green-400">

    <!-- This is the HOME banner -->
    <div class="flex font-serif text-5xl text-center justify-center text-white bg-green-900 h-40 items-center w-full mb-12 cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>

    <div class="flex flex-col bg-gradient-to-t from-green-400 to-green-900 rounded-xl w-3/5 mb-20 p-3"> <!-- COOL FORM BORDER -->
        <form class="flex flex-col bg-green-100 w-full items-center h-auto rounded-xl" action="http://172.31.109.60:6969/api/login" method="GET"> 
            
            <!-- Login banner thingie -->
            <div class="flex flex-col items-center w-3/5 items-center mt-10 p-4 mb-5 rounded-xl">
                <div class="font-serif text-5xl mb-4 text-green-900 font-bold">Welcome back!</div>
                <div class="font-serif text-xl text-green-900">Login below.</div>
            </div>

            <input class="w-80 h-10 mt-5 mb-5 pl-3 border-2 border-gray-500" type="text" name="email" placeholder="email"/>

            <input class="w-80 h-10 mt-5 mb-10 pl-3 border-2 border-gray-500" type="password" name="password" placeholder="password"/>

            <input class="w-80 h-16 flex justify-center bg-green-900 w-64 font-serif text-3xl text-white hover:bg-green-700 rounded-xl mb-10" type="submit" name="sub" value="Login">
        </form>
    </div>

<div class="aligner-element"></div>

</body>
</html>