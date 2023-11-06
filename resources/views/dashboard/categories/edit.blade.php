@extends('dashboard.dashboard_layouts.master')

@section('title','')


@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')

<div class="container-fluid">
    <form action="{{ route('categories.update',$categories->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $categories->id }}">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="{{ $categories->title }}">
        </div>
        <div class="form-group">
                <label>Description</label>
                <textarea name="description" id="" style="width: 100%; height:100px">{{{ $categories->description }}}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Current Image:</label>
                @if($categories->image)
                    <img src="{{ url('/images/' . $categories->image) }}" alt="Current Image" style="max-width: 200px;">
                @else
                    <p>No image available.</p>
                @endif
            </div>
        
            <div class="form-group">
                <label for="new_image">Select New Image:</label>
                <input type="file" id="new_image" name="new_image"> <!-- Add the name attribute -->
            </div>
            <div class="form-group">
                <label>Type</label>
                {{-- <input type="text" class="form-control" name="type" value="{{ $categories->type }}"> --}}
                <select name="type" id="">
                    {{-- <option value="{{ $categories->type }}">learning</option>
                    <option value="{{ $categories->type }}">school suplies</option>
                    <option value="{{ $categories->type }}">service</option> --}}
                    <option value="learning">learning</option>
                    <option value="school suplies">school suplies</option>
                    <option value="service">service</option>
                </select>
            </div>
        <div class="form-group">
                
         
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>


@endsection

@section('scripts')

@endsection