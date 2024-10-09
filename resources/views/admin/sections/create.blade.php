@extends('admin.layouts.master')
@section('content')
<div class="container">
    <h1>Create Section</h1>
    <form action="{{ route('admin.sections.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title_tag">Title Tag</label>
            <input type="text" class="form-control" id="title_tag" name="title_tag">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle">
        </div>
        <div class="form-group">
            <label for="text">Text</label>
            <textarea class="form-control" id="text" name="text"></textarea>
        </div>
        <div class="form-group">
            <label for="background_type">Background Type</label>
            <select class="form-control" id="background_type" name="background_type">
                <option value="image">Image</option>
                <option value="color">Color</option>
            </select>
        </div>
        <div class="form-group">
            <label for="background_image">Background Image</label>
            <input type="text" class="form-control" id="background_image" name="background_image">
        </div>
        <div class="form-group">
            <label for="background_color">Background Color</label>
            <input type="text" class="form-control" id="background_color" name="background_color">
        </div>

        <div id="subfields">
            <h3>Subfields</h3>
            <!-- Add fields for subfields here -->
        </div>

        <div id="buttons">
            <h3>Buttons</h3>
            <!-- Add fields for buttons here -->
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection