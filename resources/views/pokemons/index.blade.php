<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Pokemon - List all</title>
</head>
<body class="px-5 py-5 dark:bg-gray-900">
    
    @extends('layouts.listpokemon')
    
    @extends('layouts.header')
    @section('object', 'Pokemon')
    @section('path', 'pokemons')
    @section('secondPath', 'trainers')

</body>
</html>