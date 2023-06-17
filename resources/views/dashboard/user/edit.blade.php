@extends('dashboard.layouts.main')

@section('main')
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <div class="bg-white rounded h-100 p-4">
            <h1 class="mb-4 text-dark">Edit Profile</h1>
            <hr class="dropdown-divider" style=" height: 3px">
            <div class="col-lg-8">
                <form method="post" action="/dashboard/user/{{ $user->id }}">
                    @method('put')
                    @csrf
                    <div class="mb-3 text-dark">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control  bg-white @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name', $user->name) }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 text-dark">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control  bg-white @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username', $user->username) }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 text-dark">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control  bg-white @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Edit Profile</button>
                </form>
            </div>
        </div>
        
    </div>
    
</div>
<!-- Table End -->
<script>
    document.addEventListener('trix-file-accept', function(e){e.preventDefault()})
</script>
@endsection