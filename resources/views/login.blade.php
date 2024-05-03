<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>

<body>
  <form action="{{ route('login.store') }}" method="post">
    @csrf

    <div>
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" />
      @error('email')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" />
      @error('password')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <input type="submit" value="Login">

  </form>
</body>

</html>
