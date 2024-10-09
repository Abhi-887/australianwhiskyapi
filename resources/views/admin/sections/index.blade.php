<!-- resources/views/admin/sections/index.blade.php -->

@extends('admin.layouts.master')

@section('content')
<div class="container">
    <h1>Sections</h1>
    <a href="{{ route('admin.sections.create') }}" class="mb-3 btn btn-primary">Add New Section</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sections as $section)
            <tr>
                <td>{{ $section->title }}</td>
                <td>{{ $section->subtitle }}</td>
                <td>
                    <a href="{{ route('admin.sections.edit', $section->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.sections.destroy', $section->id) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection