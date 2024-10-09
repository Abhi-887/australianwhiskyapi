<!-- resources/views/admin/sections/edit.blade.php -->
@extends('admin.layouts.master')

@section('content')
<div class="container">
    <h1>Edit Section</h1>
    <form action="{{ route('admin.sections.update', $section->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title_tag">Title Tag</label>
            <input type="text" class="form-control" id="title_tag" name="title_tag" value="{{ $section->title_tag }}">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $section->title }}">
        </div>
        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $section->subtitle }}">
        </div>
        <div class="form-group">
            <label for="text">Text</label>
            <textarea class="form-control" id="text" name="text">{{ $section->text }}</textarea>
        </div>
        <div class="form-group">
            <label for="background_type">Background Type</label>
            <select class="form-control" id="background_type" name="background_type">
                <option value="image" {{ $section->background_type == 'image' ? 'selected' : '' }}>Image</option>
                <option value="color" {{ $section->background_type == 'color' ? 'selected' : '' }}>Color</option>
            </select>
        </div>
        <div class="form-group">
            <label for="background_image">Background Image</label>
            <input type="text" class="form-control" id="background_image" name="background_image"
                value="{{ $section->background_image }}">
        </div>
        <div class="form-group">
            <label for="background_color">Background Color</label>
            <input type="text" class="form-control" id="background_color" name="background_color"
                value="{{ $section->background_color }}">
        </div>

        <div id="subfields">
            <h3>Subfields</h3>
            @foreach($section->subfields as $key => $subfield)
            <div class="form-group">
                <label for="title_color">Title Color</label>
                <input type="text" class="form-control" id="title_color" name="subfields[{{ $key }}][title_color]"
                    value="{{ $subfield->title_color }}">
            </div>
            <div class="form-group">
                <label for="subtitle_color">Subtitle Color</label>
                <input type="text" class="form-control" id="subtitle_color" name="subfields[{{ $key }}][subtitle_color]"
                    value="{{ $subfield->subtitle_color }}">
            </div>
            <div class="form-group">
                <label for="text_color">Text Color</label>
                <input type="text" class="form-control" id="text_color" name="subfields[{{ $key }}][text_color]"
                    value="{{ $subfield->text_color }}">
            </div>
            @endforeach
        </div>

        <div id="buttons">
            <h3>Buttons</h3>
            @foreach($section->buttons as $key => $button)
            <div class="form-group">
                <label for="background_color">Button Background Color</label>
                <input type="text" class="form-control" id="background_color"
                    name="buttons[{{ $key }}][background_color]" value="{{ $button->background_color }}">
            </div>
            <div class="form-group">
                <label for="text_color">Button Text Color</label>
                <input type="text" class="form-control" id="text_color" name="buttons[{{ $key }}][text_color]"
                    value="{{ $button->text_color }}">
            </div>
            <div class="form-group">
                <label for="background_hover_color">Button Background Hover Color</label>
                <input type="text" class="form-control" id="background_hover_color"
                    name="buttons[{{ $key }}][background_hover_color]" value="{{ $button->background_hover_color }}">
            </div>
            <div class="form-group">
                <label for="text_hover_color">Button Text Hover Color</label>
                <input type="text" class="form-control" id="text_hover_color"
                    name="buttons[{{ $key }}][text_hover_color]" value="{{ $button->text_hover_color }}">
            </div>
            <div class="form-group">
                <label for="link_url">Link URL</label>
                <input type="text" class="form-control" id="link_url" name="buttons[{{ $key }}][link_url]"
                    value="{{ $button->link_url }}">
            </div>
            <div class="form-group">
                <label for="link_title">Link Title</label>
                <input type="text" class="form-control" id="link_title" name="buttons[{{ $key }}][link_title]"
                    value="{{ $button->link_title }}">
            </div>
            <div class="form-group">
                <label for="link_target">Link Target</label>
                <input type="text" class="form-control" id="link_target" name="buttons[{{ $key }}][link_target]"
                    value="{{ $button->link_target }}">
            </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection