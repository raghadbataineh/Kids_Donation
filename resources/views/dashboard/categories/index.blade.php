@extends('dashboard.dashboard_layouts.master')

@section('title','')


@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success" id="success-alert">
    {{ session('success') }}
</div>
@endif
 <!-- Main content -->
 <section class="content">
    <a class="btn btn-primary  mb-3" href="{{route('categories.create') }}">Add Category </a>
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Category</h3>

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
                        Category Image
                    </th>
                    <th>
                        Category Title
                    </th>

                    <th>
                        Category Description
                    </th>

                    <th >
                        Type
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
                @foreach ($categories as $category)

                <tr>
                    <th scope="row">{{$i}}</th>
                    <td><img src="{{ url('/images/' . $category->image) }}" alt="" width="100px" height="100px"></td>

                     <td>{{$category->title}}</td>
                    <td>
                        <div class="description-wrapper" style="width: 200px">
                            <span class="short-description">{{ Str::limit($category->description, 100) }}</span>
                            <span class="full-description" style="display: none;">{{ $category->description }}</span>
                        </div>
                        <a href="#" class="read-more">Read More</a>
                    </td>

                    <td>{{$category->type}}</td>
                    <td class="project-actions text-right">

                        <a class="btn btn-info " href="{{ route('categories.edit', $category->id) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>

                        <form action="{{route('categories.destroy',$category->id)}}"  method="POST"  style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this Category?')">
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
