@extends('layouts.app')

@section('content')
<style>
    .form-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }
    .container {
        width: 400px;
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0px 5px 15px rgba(0,0,0,0.1);
    }
    .title {
        text-align: center;
        margin-bottom: 25px;
        color: #333;
    }
    .input-group { margin-bottom: 20px; }
    .input-group label {
        display: block;
        margin-bottom: 8px;
        color: #555;
        font-weight: bold;
    }
    .input-group input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        outline: none;
        transition: 0.3s;
        box-sizing: border-box;
    }
    .input-group input:focus {
        border-color: #4f46e5;
        box-shadow: 0px 0px 5px rgba(79,70,229,0.3);
    }
    .btn {
        width: 100%;
        padding: 12px;
        border: none;
        background: #4f46e5;
        color: white;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s;
    }
    .btn:hover { background: #4338ca; }
    .btn-cancel {
        display: block;
        text-align: center;
        margin-top: 12px;
        color: #777;
        text-decoration: none;
        font-size: 14px;
    }
    .btn-cancel:hover { color: #333; }
</style>

<div class="form-wrapper">
    <div class="container">
        <h2 class="title">Edit Teacher</h2>
        <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="input-group">
                <label>Teacher Name</label>
                <input type="text" name="name" value="{{ $teacher->name }}" placeholder="Enter Name" required>
            </div>
            <div class="input-group">
                <label>Teacher Email</label>
                <input type="email" name="email" value="{{ $teacher->email }}" placeholder="Enter Email" required>
            </div>
            <div class="input-group">
                <label>Subject Taught</label>
                <input type="text" name="subject" value="{{ $teacher->subject }}" placeholder="Enter Subject" required>
            </div>
            <button type="submit" class="btn">Update Teacher</button>
        </form>
        <a href="{{ route('teachers.index') }}" class="btn-cancel">← Cancel & Go Back</a>
    </div>
</div>
@endsection