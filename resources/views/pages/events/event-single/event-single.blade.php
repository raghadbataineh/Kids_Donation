@extends('layouts.master')

@section('title', 'Event')

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
                                <h2>{{ $campaign->title }}</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Event</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->

        <!-- tp-event-details-area start -->
        <div class="tp-case-details-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col {{ count($moreCampaigns) > 0 ? 'col-md-8' : 'col-md-12' }}">
                        <div class="tp-case-details-wrap">
                            <div class="tp-case-details-text">
                                <div id="Description">
                                    <div class="tp-case-details-img">
                                        <img src="{{ url('/images/' . $campaign->image) }}" alt="" width="300px">
                                    </div>
                                    <div class="tp-case-content">
                                        <div class="tp-case-text-top">
                                            <h2>{{ $campaign->title }}</h2>
                                            <div class="time-left">
                                                <span>Time left:</span>
                                                <h5 class="event-countdown" data-end-date="{{ $campaign->end_date }}"
                                                    data-campaign-id="{{ $campaign->id }}"></h5>
                                            </div>
                                            <ul class="p-2">
                                                <li class="target_money_ele">Target Money: ${{ $campaign->target_money }}
                                                </li>
                                                <li class="raised_money_ele">Raised Money: ${{ $campaign->raised_money }}
                                                </li>
                                                <input type="hidden" value="{{ $campaign->target_money }}"
                                                    class="target_money">
                                                <input type="hidden" value="{{ $campaign->raised_money }}"
                                                    class="raised_money">
                                            </ul>
                                            <div class="case-bb-text">
                                                <h3>Campaign Mission</h3>
                                                <p>{{ $campaign->description }}</p>
                                            </div>
                                            <div class="submit-area sub-btn">
                                                @if ($campaign->raised_money >= $campaign->target_money)
                                                <span class="maxTargetCampaignValue" style="font-size:25px; color: green; font-weight:bold">Campaign reached the target vlaue</span>
                                                <div style="padding: 15px 0 0 0">
                                                    <a href="{{route('go-home')}}" class="theme-btn">Home</a>
                                                    <a href="{{route('go-events')}}" class="theme-btn">Campaigns</a>
                                                </div>
                                                @else
                                                    <a href="{{ route('go-donate-campaign', ['campaign' => $campaign]) }}" class="theme-btn submit-btn">Donate Now</a>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (count($moreCampaigns) > 0)

                        <div class="col col-md-4 col-sm-12">
                            <div class="tp-blog-sidebar">
                                <div class="widget recent-post-widget">
                                    <h3>More Events</h3>
                                    <div class="posts">
                                        @foreach ($moreCampaigns as $campaign)
                                            <div class="post">
                                                <div class="img-holder">
                                                    <a href="{{ route('go-event-single', ['campaign' => $campaign]) }}"><img
                                                            src="{{ url('/images/' . $campaign->image) }}" alt></a>
                                                </div>
                                                <div class="details">
                                                    <h4><a
                                                            href="{{ route('go-event-single', ['campaign' => $campaign]) }}">{{ $campaign->title }}</a>
                                                    </h4>
                                                    <div class="time-left">
                                                        <span>Time left:</span>
                                                        <h5 class="event-countdown"
                                                            data-end-date="{{ $campaign->end_date }}"
                                                            data-campaign-id="{{ $campaign->id }}"></h5>
                                                    </div>
                                                    <div style="text-align: left">
                                                        <h5 class="target_money_ele">Target Money:
                                                            ${{ $campaign->target_money }}</h5>
                                                        <input type="hidden" value="{{ $campaign->target_money }}"
                                                            class="target_money">
                                                        <input type="hidden" value="{{ $campaign->raised_money }}"
                                                            class="raised_money">
                                                        <h5 class="raised_money_ele">Raised Money:
                                                            ${{ $campaign->raised_money }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- tp-event-details-area end -->

    </div>
    <!-- end of page-wrapper -->

@endsection
