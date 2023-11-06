@extends('dashboard.dashboard_layouts.master')

@section('title','')


@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')

<form action="{{ route('dashboard.users.update') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $post->id }}">
        <div class="form-group">
            <label>User Name</label>
            <input type="text" class="form-control" name="UserName" value="{{ $post->title }}">
        </div>
        <div class="form-group">
                <label>User Email</label>
                <input type="email" class="form-control" name="UserEmail" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="Password" class="form-control" name="Password" value="{{ $post->title }}">
            </div>
        <div class="form-group">
                
            <label>Action</label>
         
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>


@endsection

@section('scripts')

@endsection