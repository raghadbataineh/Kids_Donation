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
        <div class="card-header">Create new User</div>
        <div class="card-body">
            <form action="{{ route('dashboard.users.index') }}" method="POST">
                {{-- {!! csrf_field() !!} --}}
                @csrf
                <div class="form-group">
                    <label for="UserName">User Name</label>
                    <input type="text" name="UserName" class="form-control" 
                        placeholder="User Name">
                </div>
                <div class="form-group">
                    <label for="UserEmail">User Email </label>
                    <input type="email" name="UserEmail" class="form-control"
                        placeholder="User Email">
                </div>
                <div class="form-group">
                        <label for="UserPassword">User Password</label>
                        <input type="password" name="UserPassword" class="form-control"
                            placeholder="User Password">
                    </div>
       
                        <div class="form-group">
                                <label for="Status">Status</label>
                                <input type="text" name="Status" class="form-control"
                                    placeholder="Admin or User">
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