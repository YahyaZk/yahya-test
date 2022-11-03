<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fome 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>

    <div class="container mt-5">
    <h1>Regtstwe Form</h1>
    <form action="{{ route('form3_data') }}" method="post">
    @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" placeholder="Name" class="form-control " name="name" />
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" placeholder="Email" class="form-control " name="Email" />
            </div>

            <div class="mb-3">
                    <label>Password</label>
                    <input type="Password" placeholder="Password" class="form-control " name="Password" />
            </div>
            {{-- <input type="text" name="name" placeholder="Name" class="form-control mb-3"/>
            <input type="email" name="email" placeholder="Email" class="form-control mb-3"/>
            <input type="number" name="password" placeholder="Password" class="form-control mb-3"/> --}}



            <div class="mb-3">
                <label>Bio</label>
                <textarea placeholder="bio" class="form-control" name="bio" rows="5"></textarea>
            </div>

    <button class="btn btn-dark w-100">send</button>

    </form>

   </div>

  </body>
</html>
