<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Create users </h1>
    <div>
        @if($errors->any())
            <ul>

                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach

            </ul>
        @endif
    </div>
    <form method="post" action="{{ route('users.store') }}">
        @csrf
        @method('post')
        <div>
            <label for="username"> User </label>
            <input type="text" name="username" placeholder="username" />
        </div>
        <div>
            <label for="password"> Password  </label>
            <input type="password" name="password" placeholder="password" />
        </div>

        <div>
            <input type="submit" value="Save a New User" />
        </div>

    </form>
</body>
</html>
