 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fome 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>

    <div class="container mt-5">
    <h1>Regtstwe Form</h1>

      @include('forms.errors')

    <form action="{{ route('form4_data') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label>First Name</label>
                <input type="text" placeholder="First Name" class="form-control @error('fname') is-invalid @enderror" name="fname" />
                @error('fname')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
        </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label>Last Name</label>
                    <input type="text" placeholder="Last Name" class="form-control @error('lname') is-invalid @enderror" name="lname" />

                    @error('lname')
                         <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>
            </div>
    </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" />
                @error('email')
                     <small class="invalid-feedback">{{ $message }}</small>
                 @enderror
            </div>

            <div class="mb-3">
                    <label>Password</label>
                    <input type="Password" placeholder="Password" class="form-control @error('password') is-invalid @enderror " name="password" autocomplete="new-password" />
                         @error('password')
                                <small class="invalid-feedback">{{ $message }}</small>
                         @enderror
            </div>

            <div class="mb-3">
                    <label>Confirm Password</label>
                    <input type="password" placeholder="Password" class="form-control" name="password_confirmation" />

            </div>

            <div class="mb-3">
                <label>Bio</label>
                <textarea placeholder="bio" class="form-control @error('bio') is-invalid @enderror " name="bio" rows="5"></textarea>
                @error('bio')
                                <small class="invalid-feedback">{{ $message }}</small>
                         @enderror

            </div>


    <button class="btn btn-dark w-100">send</button>

    </form>

   </div>

  </body>
</html>
