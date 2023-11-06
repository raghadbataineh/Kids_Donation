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
    <h2>Edit Admin Information</h2>

    <form action="{{ route('admins.update', $admins->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required
                value="{{ old('name', $admins->name) }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Current Image:</label>
            @if($admins->image)
                <img src="{{ url('/images/' . $admins->image) }}" alt="Current Image" style="max-width: 200px;">
            @else
                <p>No image available.</p>
            @endif
        </div>
    
        <div class="form-group">
            <label for="new_image">Select New Image:</label>
            <input type="file" id="new_image" name="new_image"> <!-- Add the name attribute -->
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control @error('age') is-invalid @enderror" required
                value="{{ old('email', $admins->email) }}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">New Password:</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                >
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
</div>



@endsection

@section('scripts')

@endsection
