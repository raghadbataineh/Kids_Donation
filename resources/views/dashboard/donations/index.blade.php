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
 <section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Donation</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects text-center">
            <thead>
                <tr>
                    <th>
                        Image
                    </th>
                    <th>
                        Title
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                       Location
                    </th>
                    <th>
                       Phone
                    </th>
                    <th class="text-center">
                        User
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                     $i=1;
                @endphp
                    @foreach ($donations as $donation)
                    <tr>
                    <td><img src="{{ url('/images/' . $donation->image) }}" width="250px" alt=""></td>
                    <td>{{ $donation->title }}</td>
                    <td>
                      <div class="description-wrapper">
                          <span class="short-description">{{ Str::limit($donation->description, 100) }}</span>
                          <span class="full-description" style="display: none;">{{ $donation->description }}</span>
                      </div>
                      <a href="#" class="read-more">Read More</a>
                  </td>
                    <td>{{ $donation->type }}</td>
                    <td>{{ $donation->phone }}</td>
                    <td>{{ $donation->user->name }}</td>
                    <td class="project-actions">

                      <form action="{{route('donations.destroy',$donation->id)}}"  method="POST"  style="display: inline;">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger" style="display: flex;"
                        onclick="return confirm('Are you sure you want to delete this donation?')">Delete</button>
                      </form>


                    </td>
                </tr>
                @endforeach
                @php
                    $i++;
                @endphp
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
