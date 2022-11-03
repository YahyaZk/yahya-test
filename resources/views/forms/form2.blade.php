<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fome 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>

   <div class="container mt-5">
    <h1>Information Form</h1>
    <form action="{{ route('form2_data') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name" class="form-control mb-3"/>
    <input type="email" name="email" placeholder="Email" class="form-control mb-3"/>
    <input type="number" name="age" placeholder="Age" class="form-control mb-3"/>
    <input type="password" name="password" placeholder="password" class="form-control mb-3"/>
    <button class="btn btn-dark w-100">send</button>

    </form>

   </div>

  </body>
</html>
