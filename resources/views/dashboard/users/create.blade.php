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
    .err {
        color: red
    }
</style>

{{-- form --}}
<div class="card">
        <div class="card-header">Create new User</div>
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="UserName">User Name</label>
                    <input type="text" name="name" class="form-control"
                        placeholder="User Name">
                        <span class="err">@error('name'){{$message}} @enderror</span>

                </div>
                <div class="form-group">
                    <label for="UserEmail">User Email </label>
                    <input type="email" name="email" class="form-control"
                        placeholder="User Email">
                        <span class="err">@error('email'){{$message}} @enderror</span>

                </div>
                <div class="form-group">
                        <label for="UserPassword">User Password</label>
                        <input type="password" name="password" class="form-control"
                            placeholder="User Password">
                            <span class="err">@error('password'){{$message}} @enderror</span>

                    </div>


                    <br>
                    <input type="submit" value="Add User" class="btn btn-success"><br>
                </div>
            </form>
        </div>
    </div>
{{-- end form --}}
@endsection

@section('scripts')

@endsection
