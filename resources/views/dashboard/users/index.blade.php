@extends('dashboard.dashboard_layouts.master')

@section('title','')


@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')
 <!-- Main content -->
 @if(session('success'))
<div class="alert alert-success" id="success-alert">
    {{ session('success') }}
</div>
@endif
 <section class="content">
    <!-- Default box -->
    <a class="btn btn-primary  mb-3" href="{{route('users.create') }}">Add User </a>

    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Users</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        User Name
                    </th>
                    <th>
                        User Email
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                     $i=1;
                @endphp
                @foreach ($users as $user )
                   <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{$user->name}}</td>
                    <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                    </td>
                    <td class="project-actions text-right" style="display: flex; justify-contnet:center">

                      <form action="{{route('users.destroy',$user->id)}}"  method="POST"  style="display: inline;">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Are you sure you want to delete this user?')">
                        <i class="fas fa-trash">
                        </i>
                         Delete</button>
                      </form>


                    </td>
                </tr>
                @php
                $i++;
            @endphp
                @endforeach
               
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
@endsection

@section('scripts')

@endsection
