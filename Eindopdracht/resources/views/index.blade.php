@extends('layout')

<table>
    <tr>
        <th>Game Id</th>
        <th>Game Name</th>
        <th>Release date</th>
    </tr>
@foreach ($games as $games)
    <tr>
        <td>{{ $games->game_id }}</td>
        <td>{{ $games->game_name }}</td>
        <td>{{ $games->release_date }}</td>
    </tr>
@endforeach

</table>