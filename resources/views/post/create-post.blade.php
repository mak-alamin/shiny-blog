@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a Post</h1>

    <form action="" method="post">
       {{ csrf_field() }}
        <label for="post_title">Post Title</label> <br>
        <input type="text" name="post_title" id="post_title"> <br><br>

        <label for="post_content">Post Content</label> <br>
        <textarea name="post_content" id="post_content"></textarea> <br><br>

        <input type="submit" value="Post">
    </form>
</div>
@endsection