@extends('layouts.app')
@section('title', 'Dashboard | Home')

@section('content')
<div class="profile-env">
    <div class="row">
        <a href="{{ route('hospital.index') }}">
        <div class="col-sm-3 col-xs-6">
            <div class="tile-stats tile-green">
                <div class="icon"><i class="glyphicon glyphicon-header"></i></div>
                <div class="num" data-start="0" data-end="{{ $no_of_hospitals }}" data-postfix="" data-duration="1500"
                    data-delay="0">{{ $no_of_hospitals }}
                </div>
                <h3><i class="glyphicon glyphicon-header"></i> Hospitals</h3>
                <p>Hospitals using Stre@mline</p>
            </div>
        </div>
        </a>
        <a href="{{ route('completed_hospitals') }}">
        <div class="col-sm-3 col-xs-6">
            <div class="tile-stats tile-blue">
                <div class="icon"><i class="glyphicon glyphicon-header"></i></div>
                <div class="num" data-start="0" data-end="{{ $no_of_completed_hospitals }}" data-postfix=""
                    data-duration="1500" data-delay="600">{{ $no_of_completed_hospitals }}
                </div>
                <h3><i class="glyphicon glyphicon-ok"></i> Finished Hospitals</h3>
                <p>Hospitals completed</p>
            </div>
        </div></a>
        <div class="clear visible-xs"></div>
        <a href="{{ route('pending_hospitals') }}">
        <div class="col-sm-3 col-xs-6">
            <div class="tile-stats tile-green">
                <div class="icon"><i class="glyphicon glyphicon-header"></i></div>
                <div class="num" data-start="0" data-end="{{ $no_of_hospitals - $no_of_completed_hospitals }}"
                    data-postfix="" data-duration="1500" data-delay="1200">
                    {{ $no_of_hospitals - $no_of_completed_hospitals }}
                </div>
                <h3><i class="glyphicon glyphicon-saved"></i> Pending Hospitals</h3>
                <p>Hospitals pending</p>
            </div>
        </div></a>
        <a href="{{ route('user.index') }}">
        <div class="col-sm-3 col-xs-6">
            <div class="tile-stats tile-blue">
                <div class="icon"><i class="glyphicon glyphicon-user"></i></div>
                <div class="num" data-start="0" data-end="{{ $users->count()}}" data-postfix="" data-duration="1500"
                    data-delay="1800">{{ $users->count()}}
                </div>
                <h3><i class="glyphicon glyphicon-user"></i> Users</h3>
                <p>Dashboard users</p>
            </div>
        </div></a>
    </div>
    <br />
    <div class="row report">
        <div class="col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">Selected Hospital Progress Bar</div>
                </div>
            </div>
            @if(count($selected_listings) > 0)
                @foreach($selected_listings as $selected_hospital)
                    <div class="panel-body">
                        <div class="row">
                            <h5>Hospital: <b>{{ $selected_hospital['hospital']->hospital_name }}</h5></b>
                            <b>Progress:</b>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="progress @if($selected_hospital['completion_rate'] !== 100.0) progress-striped @endif active">
                                    <div class="progress-bar
                                    @if($selected_hospital['completion_rate'] <= 50) progress-bar-danger
                                    @elseif($selected_hospital['completion_rate'] > 50 && $selected_hospital['completion_rate'] <=80) progress-bar-warning
                                    @elseif($selected_hospital['completion_rate'] > 80 && $selected_hospital['completion_rate'] <= 99) progress-bar-info
                                    @elseif($selected_hospital['completion_rate'] == 100) progress-bar-success
                                    @else
                                    progress-bar-warning
                                    @endif" role="progressbar"
                                        aria-valuenow="{{ $selected_hospital['completion_rate'] }}" aria-valuemin="0"
                                        aria-valuemax="100" style="width: {{ $selected_hospital['completion_rate'] }}%">
                                        @if($selected_hospital['completion_rate'] == 100.0) COMPLETED @else {{ $selected_hospital['completion_rate']}} % @endif
                                        <span class="sr-only">{{ $selected_hospital['completion_rate'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            @else
                <div style="height: 400px;">
                    <img src="{{ asset('assets/images/no_data.png') }}" />
                </div>
            @endif

        </div>
        <div class="col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">Member Activity</div>
                </div>
            </div>
            @if($total_engagements > 0)
            <div class="h-screen bg-gray-100">
                <div class="container px-4 mx-auto">
                    <div class="p-6 m-20 bg-white rounded shadow">
                        {!! $piechart->container() !!}
                    </div>
                </div>
                <script src="{{ LarapexChart::cdn() }}"></script>
                {{ $piechart->script() }}
            </div>
            @else
            <div style="height: 400px;">
            <img src="{{ asset('assets/images/no_data.png') }}" />
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
