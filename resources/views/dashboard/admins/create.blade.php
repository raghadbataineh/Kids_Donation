@extends('dashboard.dashboard_layouts.master')

@section('title','')


@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')

<style>
    span{
        color: red
    }
</style>

{{-- form --}}


<div class="card">
        <div class="card-header">Create new Admin</div>
        <div class="card-body">
            <form action="{{ route('admins.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="UserName">Admin Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Admin Name">
                    <span>@error('name'){{$message}} @enderror</span>


                </div>
                <div class="form-group">
                    <label for="UserName">Admin Image</label>
                    <input type="file" name="image" class="form-control" placeholder="Admin Image">
                    <span>@error('image'){{$message}} @enderror</span>


                </div>
                <div class="form-group">
                    <label for="UserEmail">Admin Email </label>
                    <input type="email" name="email" class="form-control" placeholder="Admin Email">
                    <span>@error('email'){{$message}} @enderror</span>
                    

                </div>
                <div class="form-group">
                        <label for="UserPassword">Admin Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Admin Password">
                        <span>@error('password'){{$message}} @enderror</span>


                    </div>
       
                    
                    <br>
                    <input type="submit" value="Add Admin" class="btn btn-success"><br>
                </div>
            </form>
        </div>
    </div>
   
{{-- end form --}}
@endsection

@section('scripts')

@endsection


