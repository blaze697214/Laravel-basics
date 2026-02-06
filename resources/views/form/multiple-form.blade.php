<form name="firstform" action="{{ url('/multiple-form') }}" method="POST">
    @csrf
    <div>
        Email
        <input type="text" name="email"  value="{{ old('email') }}">
        {{ $errors->firstform->first('email') }}
    </div>
    Send Form <input name="firstform" type="submit" value="Submit">
</form>

<form name="secondform" action="{{ url('/multiple-form') }}" method="POST">
    @csrf
    <div>
        Title
        <input type="text" name="title"  value="{{ old('title') }}">
        {{ $errors->secondform->first('title') }}
    </div>
    Send Form <input name="secondform" type="submit" value="Submit">
</form>