<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Users Create</title>
  </head>
  <body>
    <section class="container mt-5">
    @if (session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <div class="card">
        <div class="card-header">User Create</div>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="form-groupe">
                    <label >name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-groupe">
                    <label >Email</label>
                    <input type="email" name="email" class="form-control">

                </div>
                <div class="form-groupe">
                    <label >Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
        <div class="card-footer"></div>
    </div>
    </section>
</body>
</html>
