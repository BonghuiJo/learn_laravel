<html>

<head></head>

<body>

    <h1> rendering </h1>
    <li><a href="/">home</a></li>
    <li><a href="{{ route('page') }}"> page </a></li>
    <li><a href="{{ route('blog') }}"> blog </a></li>
    <li><a href="{{ route('company') }}"> company </a></li>


    <p>{!! \App\Service\MessageFacade::printMessage() !!}</p>

</body>

</html>
