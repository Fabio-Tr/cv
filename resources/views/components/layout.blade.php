<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>{{ $title ?? ' ' }}</title>



    <meta name="description" content="Il curriculum vitae di Fabio Trani">
    <meta name="keywords" content="curriculum vitae, cv curriculum vitae, cv v, cv vitae    ">

    <meta property="og:url" content="https://www.fabiotrani.it/"/>
		<meta property="og:type" content="website">
		<meta property="og:title" content="Fabio Trani - Curriculum Vitae"/>
		<meta property="og:description" content="Home Page di Fabio Trani - Curriculum Vitae"/>
		<meta property="og:site_name" content="www.fabiotrani.it"/>
		<meta property="og:locale" content="it_IT"/>
</head>

<body>
    <div style="display: none">
        ███████╗  ████████╗
        ██╔════╝  ╚══██╔══╝
        █████╗░░  ░░░██║░░░
        ██╔══╝░░  ░░░██║░░░
        ██║░░░░░  ░░░██║░░░
        ╚═╝░░░░░  ░░░╚═╝░░░
    </div>



    {{ $slot }}


    
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
