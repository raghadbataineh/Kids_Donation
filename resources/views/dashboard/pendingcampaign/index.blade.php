@extends('dashboard.dashboard_layouts.master')

@section('title', '')

@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')
<!-- Main content -->


<section class="content">
    <!-- Bootstrap Card -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Pending Campaigns</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                    title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Campaign image</th>
                            <th>Notarized File</th>
                            <th>Campaign Title</th>
                            <th>Campaign description</th>
                            <th class="text-center">target_money</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($pendingcampaigns as $pendingcampaign)
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td><img src="{{ url('/images/' . $pendingcampaign->image) }}" alt="" width="350px"></td>
                            <td>
                                <a href="{{url('/campaignPdf/' . $pendingcampaign->auth_file)}}" target="_blank" class="btn btn-primary">Show File</a>
                            </td>
                            <td style="word-wrap: break-word; max-width: 30ch;">{{$pendingcampaign->title}}</td>
                            {{-- <td style="word-wrap: break-word; max-width: 30ch;">{{$pendingcampaign->description}}</td> --}}
                            <td>
                                <div class="description-wrapper" style="width: 200px">
                                    <span class="short-description">{{ Str::limit( $pendingcampaign->description, 100) }}</span>
                                    <span class="full-description" style="display: none;">{{ $pendingcampaign->description }}</span>
                                </div>
                                <a href="#" class="read-more">Read More</a>
                            </td>
                            <td>{{$pendingcampaign->target_money}}</td>

                            <td class="project-actions text-right" style="display: flex; flex-direction:column; gap:10px">
                                <form action="{{route('pendingcampaign.store',$pendingcampaign->id)}}"
                                method="POST" style="display: inline;" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="pending_campaign_id" value="{{ $pendingcampaign->id }}">

                                <label for="end_date">end date</label>
                                <input type="date" name="end_date" id="end_date">
                                <button type="submit" class="btn btn-success"
                                    onclick="return confirm('Are you sure you want to delete this Category?')">Approve</button>
                            </form>
                                <form action="{{route('pendingcampaign.destroy',$pendingcampaign->id)}}"
                                    method="POST" style="display: inline;">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this Category?')">Delete</button>
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
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->
@endsection

@section('scripts')

@endsection
