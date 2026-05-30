@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h1>All Courses</h1>
        <a href="{{ route('courses.create') }}" style="padding: 10px 15px; background: #4f46e5; color: white; text-decoration: none; border-radius: 8px;">+ Add New Course</a>
    </div>
    <br>

    <table border="1" width="100%" style="border-collapse: collapse; text-align: left; background: white; box-shadow: 0px 5px 15px rgba(0,0,0,0.05);">
        <tr style="background-color: #f4f6f9;">
            <th style="padding: 15px;">Course Title</th>
            <th style="padding: 15px;">Description</th>
            <th style="padding: 15px;">Actions</th>
        </tr>
        @foreach ($courses as $course)
        <tr style="border-bottom: 1px solid #ddd;">
            <td style="padding: 15px;">{{ $course->title }}</td>
            <td style="padding: 15px;">{{ $course->description }}</td>
            <td style="padding: 15px;">
                <a href="{{ route('courses.edit', $course->id) }}" style="color: blue; text-decoration: none;">Edit</a> |
                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="color: red; border: none; background: none; cursor: pointer; font-size: 16px;">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
