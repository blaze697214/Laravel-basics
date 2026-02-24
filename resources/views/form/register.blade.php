<form method="post" action="{{ route('register-post') }}">
    @csrf
    <h1>Register form</h1>

    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
    Email<input type="email" name="email" required>
    Password<input type="password" name="password" required>
    <button type="submit">Submit</button>

</form>