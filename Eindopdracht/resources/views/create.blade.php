@extends('layout')

<?php
use App\Http\Controllers\GameController;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ routes('GameController.store') }}" method="POST">
    <input type="text" id="game_name" name="game_name"/>
    <input type="text" id="release_date" name="release_date"/>
    <input type="text" id="developer" name="developer"/>
    <input type="text" id="publisher" name="publisher"/>
    <input type="text" id="space_required" name="space_required"/>
    <input type="text" id="created_at" name="created_at"/>
    <input type="text" id="updated_at" name="updated_at"/>

    <input type="submit" value="Submit" />
    </form>
</body>
</html>