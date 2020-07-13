<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Application - Country Detail</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">CRUD APPLICATION</a>
        </div>
    </div>
    
    <div class="container" style="padding-top: 10px;">
        
        <div class="row">
            <div class="col-md-6"><h3>Country Detail</h3></div>
            <div class="col-md-6">
                <a href="{{ asset('/countries')}}" class="btn btn-success pull-right"><i class="fa fa-globe" aria-hidden="true"></i> Show All Countries</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
               <div class="col-md-6 offset-md-3 text-center">
                    <h1 style="color: #ff11ff;">Welcome to {{ $country->name }}</h1>
                    <h2 style="color: #ff11ff;">The capital of {{ $country->name }} is {{ $country->capital }}</h2>
                    <h2 style="color: #ff11ff;">The Population of {{ $country->name }} is {{ $country->population }}</h2>
                </div>
                <p style="margin-top: 30px;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                     in culpa qui officia deserunt mollit anim id est laborum."
                </p>
                <p>
                    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                    veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim 
                    ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque 
                    porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
                    adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore 
                    et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis 
                    nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex 
                    ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate 
                    velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo 
                    voluptas nulla pariatur?"
                </p>
            </div>
        </div>
        
    </div>
    
</body>
</html>