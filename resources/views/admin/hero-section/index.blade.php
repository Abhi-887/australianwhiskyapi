@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Hero Section</h5>

            @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

            <!-- General Form Elements -->
            <form action="{{ route('hero.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Main title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="main" value="{{ $hero_section->main }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="description" value="{{ $hero_section->description }}" required>
                    </div>
                </div>



                <button type="submit" class="btn btn-primary">Update</button>
            </form><!-- End General Form Elements -->

        </div>
    </div>
</div>

@endsection
