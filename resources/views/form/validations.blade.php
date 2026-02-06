
@vite('resources/js/app.js')

<form action={{ '/validations' }} method="post" enctype="multipart/form-data">
    @csrf
    <div>
        Name
        <input type="text" name="name" value="{{old('name')}}">
        @error('name') {{ $message }} @enderror
    </div>
    <div>
        Email
        <input name="email" type="text" value="{{ old('email') }}">
        @error('email') {{ $message }} @enderror
    </div>
    <div>
        Title
        <input name="title" type="text" value="{{ old('title') }}">
        @error('title') {{ $message }} @enderror
    </div>
    <div>
        Photo
        <input name="photo" type="file" value="{{ old('photo') }}">
        @error('photo') {{ $message }} @enderror
    </div>
    <div>
        Credit Card Number 
        <input name="credit-card-no" type="text" value="{{ old('credit-card-no') }}">
        @error('credit-card-no')
            {{ $message }}
        @enderror
    </div>
    <div>
        Payment Type
        <select name="payment" value="{{ old('payment') }}">
            <option value="cc">Credit Card</option>
            <option value="dc">Debit Card</option>
            <option value="visa">Visa</option>
            <option value="upi">UPI</option>
        </select>
    </div>
    <div>
        Publish at
        <input name="publish" type="text" value="{{ old('publish') }}">
        @error('publish')
            {{ $message }}
        @enderror
    </div>
    <div>
        Start Date
        <input name="start" type="date" value="{{ old('start') }}">
        @error('start')
            {{ $message }}
        @enderror
    </div>
    <div>
        Password
        <input name="password" type="password" value="{{ old('password') }}">
        @error('password')
            {{ $message }}
        @enderror
    </div>
    <div>
        v1.0
        <input name="v1\.0" type="text" value="{{ old('v1\.0') }}">
        @error('v1\.0')
            {{ $message }}
        @enderror
    </div>
    Submit form
    <input type="submit" value='Send'>
</form>