<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LOGIN</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>

        <div class="container">
            <div class="col-md-4 offset-md-d">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="button" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
