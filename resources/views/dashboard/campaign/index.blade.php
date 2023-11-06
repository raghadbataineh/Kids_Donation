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
    <a class="btn btn-primary  mb-3" href="{{route('campaigns.create')}}">Add Campaign </a>
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Campaign</h3>

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
                        Campaign image
                    </th>
                    <th>
                        Campaign Title
                    </th>
                    <th>
                        Campaign description
                    </th>

                    <th class="text-center">
                        target_money
                    </th>
                    <th>
                        raised_money
                    </th>
                    <th>
                        start_date
                    </th>
                    <th>
                        end_date
                    </th>
                    <th>
                        Stutas
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                     $i=1;
                @endphp
                @foreach ( $campaigns as $campaign )

                <tr>

                    <th scope="row">{{$i}}</th>
                    <td><img src="{{ url('/images/' . $campaign->image) }}" alt="" width="100px" height="100px"></td>

                     <td>{{$campaign->title}}</td>
                    {{-- <td>{{$campaign->description}}</td> --}}
                    <td>
                        <div class="description-wrapper" style="width: 200px">
                            <span class="short-description">{{ Str::limit($campaign->description, 50) }}</span>
                            <span class="full-description" style="display: none;">{{ $campaign->description }}</span>
                        </div>
                        <a href="#" class="read-more">Read More</a>
                    </td>

                    <td>{{$campaign->target_money}}</td>
                    <td>{{$campaign->raised_money}}</td>
                    <td>{{$campaign->start_date}}</td>
                    <td>{{$campaign->end_date}}</td>
                    <td>{{$campaign->active}}</td>
                    <td class="project-actions text-right">

                        <a class="btn btn-info " href="{{ route('campaigns.edit', $campaign->id) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>

                        <form action="{{route('campaigns.destroy',$campaign->id)}}"  method="POST"  style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this Campaign?')">
                            <i class="fas fa-trash">
                            </i>Delete</button>
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
