@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ( $errors->all() as $errors )
            <li>{{ $errors }}</li>
        @endforeach
    </ul>
</div>
@endif



{{-- <label>Password</label>
<input type="Password" placeholder="Password" class="form-control @error('password') is-invalid @enderror " name="password" autocomplete="new-password" />
     @error('password')
            <small class="invalid-feedback">{{ $message }}</small>
     @enderror --}}
