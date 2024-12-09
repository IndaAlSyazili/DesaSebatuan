<?php

@extends('admin.layout')

@section('content')
    <h2>Posts List</h2>
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }} ({{ $post->created_at }})</li>
        @endforeach
    </ul>
@endsection
