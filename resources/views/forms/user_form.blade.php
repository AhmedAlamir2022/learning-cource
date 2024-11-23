<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Form </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>Registration Form </h1>
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <form action="{{ route('user.form.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="f_name" class="form-label">First Name</label>
                <input type="text" class="form-control @error('f_name') is-invalid @enderror" id="f_name"
                    name="f_name" value='{{ old('f_name') }}''>
                @error('f_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="l_name" class="form-label">Last Name</label>
                <input type="text" class="form-control @error('l_name') is-invalid @enderror" id="l_name"
                    name="l_name" value='{{ old('l_name') }}'>
                @error('l_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" value='{{ old('email') }}' autocomplete="no">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" placeholder="Enter your password">
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                    id="password_confirmation" name="password_confirmation" placeholder="confirm password">
                @error('password_confirmation')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label><br>
                <input @selected(old('gender') == 'male') type="radio" name="gender" value="male"> Male<br>
                <input @selected(old('gender') == 'female') type="radio" name="gender" value="female"> Female
                @error('gender')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="level" class="form-label @error('level') is-invalid @enderror">Education Level</label>
                <select class="form-select" id="level" name="level">
                    <option value="School" @selected(old('level') == 'School')>School</option>
                    <option value="Diploma" @selected(old('level') == 'Diploma')>Diploma</option>
                    <option value="Bachelor" @selected(old('level') == 'Bachelor')>Bachelor</option>
                    <option value="Master" @selected(old('level') == 'Master')>Master</option>
                    <option value="PHD" @selected(old('level') == 'PHD')>PHD</option>
                </select>
                @error('level')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="hobbies" class="form-label ">Hobbies</label><br>
                <label><input type="checkbox" name='hobbies[]' value="Coding"> Codding</label><br>
                <label><input type="checkbox" name='hobbies[]' value="Reading"> Reading</label><br>
                <label><input type="checkbox" name='hobbies[]' value="Traveling"> Traveling</label><br>
                <label><input type="checkbox" name='hobbies[]' value="Watching Movies"> Watching Movies</label>
                @error('hobbies')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="bio" class="form-label">Bio</label>
                <textarea class="form-control @error('bio') is-invalid @enderror" id="bio" name="bio" rows="3" >{{ old('bio') }}</textarea>
                @error('bio')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Register</button>

        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
