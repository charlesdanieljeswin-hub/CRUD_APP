@extends('layouts.app')

@section('content')
<style>
    .form-wrapper { display: flex; justify-content: center; align-items: center; height: 80vh; }
    .container { width: 400px; background: white; padding: 30px; border-radius: 15px; box-shadow: 0px 5px 15px rgba(0,0,0,0.1); }
    .title { text-align: center; margin-bottom: 25px; color: #333; }
    .input-group { margin-bottom: 20px; }
    .input-group label { display: block; margin-bottom: 8px; color: #555; font-weight: bold; }
    .input-group input { width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: 0.3s; box-sizing: border-box; }
    .btn { width: 100%; padding: 12px; border: none; background: #4f46e5; color: white; font-size: 16px; border-radius: 8px; cursor: pointer; }
</style>

<div class="form-wrapper">
    <div class="container">
        <h2 class="title">Edit Course</h2>
        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="input-group">
                <label>Course Title</label>
                <input type="text" name="title" value="{{ $course->title }}" required>
            </div>
            <div class="input-group">
                <label>Description</label>
                <input type="text" name="description" value="{{ $course->description }}" required>
            </div>
            <button type="submit" class="btn">Update Course</button>
        </form>
    </div>
</div>
@endsection
