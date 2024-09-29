<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto mt-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Login Form</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('loginSave') }}" method="post" >
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group mt-3">
                           <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <sapn class="text-primary mt-3">If You have not regitered then </span><a href="{{ url('/register') }}">Register here </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>