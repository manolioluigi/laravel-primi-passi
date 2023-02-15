<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>

    <h1>Hello World</h1>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1></h1>
                    <ul>
                       @foreach ($menu as $option)
                            <li>{{ $option }}</li>
                       @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </header>

</body>
</html>