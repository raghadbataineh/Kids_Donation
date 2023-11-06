@extends('layouts.master')

@section('title', 'Campaigns')

@section('event')
 class="active"
@endsection

@section('content')


    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-container">
                <div class="page-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <h2>Campaigns</h2>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('go-home')}}">Home</a></li>
                                    <li>Events</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->
        <!-- event-area start -->
        <div class="event-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="section-title section-title2 text-center">
                            <div class="thumb-text">
                                <span>Campaigns</span>
                            </div>
                            <h2>Donate Campaigns</h2>
                            <p>It is a long established fact that reader distracted by the the readable content off page looking at its layout point.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @foreach ($campaigns as $campaign)
                        <span class="campaign_id" hidden style="display: none">{{$campaign->id}}</span>
                            <div class="event-item" style="grid-template-columns: 30% 70%; grid-template-rows: 200px; display: grid;">
                                <div class="event-img" style="width: 300px !important;">
                                    <img src="{{ url('/images/' . $campaign->image) }}" width="300px">
                                </div>
                                    <div class="event-text">
                                        <div class="event-left">
                                            <div class="event-l-text">
                                                @php
                                                    $start_date = \Carbon\Carbon::parse($campaign->start_date);
                                                @endphp
                                                <span> {{ $start_date->format('F') }}</span>
                                                <h4> {{ $start_date->format('d') }}</h4>
                                            </div>
                                        </div>
                                        <div class="event-right">
                                            <ul>
                                                <li>End Date:{{ $campaign->end_date }}</li>
                                                <li class="target_money_ele">Target Money: ${{ $campaign->target_money }}</li>
                                                <li style="margin-left:30px;" class="raised_money_ele" id="{{$campaign->id}}">Raised Money: ${{ $campaign->raised_money }}</li>
                                            </ul>
                                            @if($campaign->raised_money >= $campaign->target_money)
                                            <script>
                                                var raised_money = document.getElementById('{{ $campaign->id }}');
                                                raised_money.style = "color: green; margin-left: 30px;";
                                                var checkMark = document.createElement('span');
                                                checkMark.innerHTML = ` <i class="fa-solid fa-check" style="color: #009912;"></i>`;
                                                raised_money.appendChild(checkMark);
                                            </script>
                                            @endif
                                            <div class="time-left">
                                                <span>Time left:</span>
                                                <h5 class="event-countdown" data-end-date="{{ $campaign->end_date }}" data-campaign-id="{{ $campaign->id }}"></h5>
                                            </div>
                                            <h2>
                                                <a style="text-decoration: underline" href="{{ route('go-event-single', ['campaign' => $campaign]) }}">{{ $campaign->title }}</a>
                                            </h2>
                                            <p style="width: 60ch; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{{ $campaign->description }}</p>
                                        </div>
                                    </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination" style="display: flex; justify-content:center">
                        {{$campaigns->links()}}
                    </div>
                </div>
            </div>
            <div class="shape1"><img src="{{asset('assets/images/event/1.png')}}" alt=""></div>
            <div class="shape2"><img src="{{asset('assets/images/event/2.png')}}" alt=""></div>
        </div>
        <!-- event-area start -->

    </div>
    <!-- end of page-wrapper -->


    @endsection
