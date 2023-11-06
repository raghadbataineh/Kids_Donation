@extends('dashboard.dashboard_layouts.master')

@section('title','')


@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')

{{-- form --}}
<div class="card">
        <div class="card-header">Create new Partner </div>
        <div class="card-body">
            <form action="{{ route('partners.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
               
                <div class="form-group">
                    <label for="UserName">Partner Image</label>
                    <input type="file" name="image" class="form-control" placeholder="Partner Image">
                    <span>@error('image'){{$message}} @enderror</span>

                </div>
              
                    <br>
                    <input type="submit" value="Add Partner" class="btn btn-success"><br>
                </div>
            </form>
        </div>
    </div>
{{-- end form --}}
@endsection

@section('scripts')

@endsection