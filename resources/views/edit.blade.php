@extends('MasterLayout.layout')
@section('body')

<form action="{{ route('posts.update',$post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Creator Name</label>
    <input type="text" name="creater" value="{{ $post->creater }}"><br>

    <label for="">Detail</label>
    <input type="text" name="detail" style="margin-top: 15px" value="{{ $post->detail }}"><br>

    <button type="submit" style="margin-top: 15px">Save</button>
</form>
<a href="{{ route('index') }}"><button type="submit" style="margin-top: 10px">Back</button></a>
    
@endsection