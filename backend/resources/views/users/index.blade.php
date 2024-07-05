<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Users affiche</title>
  </head>
  <body>
    <section class="container mt-5">
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($data as $key => $value)
              <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>
                <a href="{{ route('user.edit', $value->id) }}" class="btn btn-secondary">edit</a>
                <a href="{{ route('user.show', $value->id) }}" class="btn btn-danger">delete</a>
            </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </section>
</body>
</html>
