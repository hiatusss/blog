<!DOCTYPE html>
<html>
  <head>
    <title>Tank {{ $tank->id }}</title>
  </head>
  <body>
    <h1>Tank {{ $tank->id }}</h1>
    <ul>
      <li>Name: {{ $tank->name }}</li>
      <li>Nationality: {{ $tank->nationality }}</li>
      <li>Rating: {{ $tank->rating }}</li>
    </ul>
  </body>
</html>
