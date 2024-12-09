<?php

@extends('admin.layout')

@section('content')
    <h2>Users List</h2>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} ({{ $user->email }})</li>
        @endforeach
    </ul>
@endsection
