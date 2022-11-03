<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fome 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>

   <div class="container mt-5">
    <h1>Yahya Form</h1>
    <Form method="post"action="{{ route('form1_data') }}">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" placeholder="Name" class="form-control" name="name" />
        </div>
        <div class="mb-3">
            <label>Age</label>
            <input type="text" placeholder="Age" class="form-control" name="Age" />

        </div>
        <div class="text-center ">
            <button class="btn btn-dark w-25">Send</button>
        </div>
    </Form>
   </div>

  </body>
</html>
