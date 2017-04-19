<!doctype html>
<html>
<head>
<title>Look at me Login</title>
</head>
<body>

<h1>Login</h1>
<form method="POST" action="login">
            {{ csrf_field() }}
            <span class="col-md-12">Name: <input name="name" type="text" value="{{ Input::old('title') }}"></span>
            <span class="col-md-12">Email: <input name="email" type="text" value="{{ Input::old('salary') }}"></span>
            <span class="col-md-12">Password: <input name="password" list="states" value="{{ Input::old('state') }}"></span>
            <button type="submit">Submit</button>
            </form>
