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
    <form action="{{ route('kits.update',$kits->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $kits->id }}">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="{{ $kits->title }}">
        </div>
        <div class="form-group">
                <label>Description</label>
                <textarea name="description" id="" style="width: 100%; height:100px" value="{{ $kits->description }}">{{ $kits->description }}</textarea>

            </div>
            <div class="form-group">
                <label for="image">Current Image:</label>
                @if($kits->image)
                    <img src="{{ url('/images/' . $kits->image) }}" alt="Current Image" style="max-width: 200px;">
                @else
                    <p>No image available.</p>
                @endif
            </div>
        
            <div class="form-group">
                <label for="new_image">Select New Image:</label>
                <input type="file" id="new_image" name="new_image"> <!-- Add the name attribute -->
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" name="price" value="{{ $kits->price }}">
            </div>
            <div class="form-group">
                <label for="category">Choose category:</label>

             
                {{-- <select name="category_id" id="category" class="form-control">
                    <option value="{{ $kits->category->id }}" selected>{{ $kits->category->title }}</option>
                    @foreach ($categories as $category)
                        @if ($kits->category->id != $category->id)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endif
                    @endforeach
                </select> --}}
                <select name="category_id" id="category" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $kits->category_id ? 'selected' : '' }}>
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
                
                
            </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection

@section('scripts')

@endsection
