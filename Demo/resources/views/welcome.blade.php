<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Laravel View</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-light text-center">
    <div class="container mt-5">

        <h1 class="display-4 text-primary">Welcome to Laravel</h1>
        <p class="lead text-secondary">This is a simple Laravel view page!</p>
        <!-- <a href="/about" class="btn btn-primary">Learn More</a> -->
         <!-- using code url generationa -->
        <a href="{{url()->to('about')}}" class="btn btn-primary">Learn More</a>


         <!-- -------------------------------- CODE GENERATIONS ------------------------------- // -->

        <!-- The {{ URL::current() }} code simply shows the web address (URL) of the page you are currently on. -->

        <h4> {{URL :: current()}} </h4>
        <h4> {{url()->current()}} </h4>

        <!-- The {{ URL::full() }} code shows the current URL along with all the query parameters included. -->
        <h4> {{URL :: full()}} </h4>
        <h4> {{url()->full()}} </h4>

    </div>
</body>

</html>