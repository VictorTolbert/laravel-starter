@extends('layouts.app')
@section('hero-body')
<div class="hero-body">
    <div class="container is-fluid">
        <h1 class="title">XML Proposal Viewer</h1>
        <h2 class="subtitle">{{  $xml->Proposal->Name }}</h2>
    </div>
</div>
@endsection
@section('content')
<section class="section">
    <div class="container is-fluid">


    <article class="media">
        <div class="media-content">
            <div class="content">
                <h3>
                    Seller
                </h3>
                <div class="field">
                    <p class="field">
                        <label class="label">Company Name</label>
                        <p class="control">
                            {{  $xml->Proposal->Seller['companyName'] }}
                        </p>
                    </p>

                    <p class="field">
                        <label class="label">Salesperson Name</label>
                        <p class="control">
                            {{  $xml->Proposal->Seller->Salesperson['name'] }}
                        </p>
                    </p>

                    <p class="field">
                        <label class="label">Salesperson Email</label>
                        <p class="control">
                            {{  $xml->Proposal->Seller->Salesperson->Email }}
                        </p>
                    </p>

                    <p class="field">
                        <label class="label">{{  $xml->Proposal->Seller->Salesperson->Phone[0]['type'] }}</label>
                        <p class="control">
                            {{  $xml->Proposal->Seller->Salesperson->Phone[0] }}
                        </p>
                    </p>
                    <p class="field">
                        <label class="label">{{  $xml->Proposal->Seller->Salesperson->Phone[1]['type'] }}</label>
                        <p class="control">
                            {{  $xml->Proposal->Seller->Salesperson->Phone[1] }}
                        </p>
                    </p>
                </div>
            </div>
        </div>
    </article>

{{--             <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Seller</h3>
                </div>
                <div class="panel-body">
                    <p> <b>{{  $xml->Proposal->Seller['companyName'] }}</b>,
                    {{  $xml->Proposal->Seller->Salesperson['name'] }},
                    {{  $xml->Proposal->Seller->Salesperson->Email }}<br>
                    {{  $xml->Proposal->Seller->Salesperson->Phone[0]['type'] }}: {{  $xml->Proposal->Seller->Salesperson->Phone[0] }} /
                    {{  $xml->Proposal->Seller->Salesperson->Phone[1]['type'] }}: {{  $xml->Proposal->Seller->Salesperson->Phone[1] }}<br><br>
                    <b>{{  $xml->Proposal->Name }}</b></p>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Buyer</h3>
                </div>
                <div class="panel-body">
                    <p><b>{{  $xml->Proposal->Buyer['buyingCompanyName'] }}</b><br>
                    {{  $xml->Proposal->Buyer->BuyerName }}</p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Advertiser</h3>
                </div>
                <div class="panel-body">
                    <p><b>{{ $xml->Proposal->Advertiser['name'] }}</b><br>
                    {{ $xml->Proposal->Advertiser->Product['name'] }}</p>
                </div>
            </div>

            @if(!empty($daypartsSummary))
                <table class="table is-bordered is-narrowed is-striped">
                    <tr>
                        <th>Daypart</th>
                        <th class="text-center">Average CPP</th>
                    </tr>
                    @foreach($daypartsSummary as $key => $val)
                        <tr>
                            <td>{{ $key }}</td>
                            <td class="text-center">{{ number_format($val, 2) }}</td>
                        </tr>
                    @endforeach
                </table>
            @endif --}}
        </div>
    </div>

    <div class="container is-fluid">
        <div class="print-header">
            <h5><b>{{  $xml->Proposal->Seller['companyName'] }}</b>,
                {{  $xml->Proposal->Seller->Salesperson['name'] }},
                {{  $xml->Proposal->Seller->Salesperson->Email }}<br>
                {{  $xml->Proposal->Seller->Salesperson->Phone[0]['type'] }}: {{  $xml->Proposal->Seller->Salesperson->Phone[0] }} /
                {{  $xml->Proposal->Seller->Salesperson->Phone[1]['type'] }}: {{  $xml->Proposal->Seller->Salesperson->Phone[1] }}</h5>
                <h6><b>{{ $xml->Proposal->Advertiser['name'] }}</b>, {{ $xml->Proposal->Advertiser->Product['name'] }} <br>
                <em>{{  $xml->Proposal->Name }}</em><br></h6>
        </div>
        {{--<h2>Avails: {{ $xml->Proposal->AvailList->Name }}</h2>--}}
        <table id="avail-list" class="table is-striped is-narrowed is-fullwidth is-bordered">
            <thead>
            <tr>
                <th>Program Name</th>
                <th class="rate"><b>Rate</b></th>
                <th>Rating</th>
                <th><em>CPP</em></th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>MO</th>
                <th>TU</th>
                <th>WE</th>
                <th>TH</th>
                <th>FR</th>
                <th>SA</th>
                <th>SU</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Daypart</th>
            </tr>
            </thead>
            <tbody>
        @foreach( $xml->Proposal->AvailList->AvailLineWithDetailedPeriods as $avails )
            @foreach($avails->Periods->DetailedPeriod as $period)
                <tr>
                    <td>{{ $avails->AvailName }}</td>
                    <td class="rate text-right currency">
                    {{ number_format((float) $period->Rate, 2, ".", ",") }}
                    </td>
                    <td class="text-center">{{ $period->DemoValues->DemoValue }}</td>
                    @if( (float) $period->DemoValues->DemoValue > 0 )
                    <td class="cpp text-right currency">
                        {{ number_format( (float) $period->Rate / (float) $period->DemoValues->DemoValue, 2, ".", ",")  }}
                    </td>
                    @else
                    <td class="cpp text-right">N/A</td>
                    @endif
                    <td class="text-center">{{ $period['startDate'] }}</td>
                    <td class="text-center">{{ $period['endDate'] }}</td>
                    @foreach($avails->DayTimes->DayTime->Days->children($namespaces['tvb-tp']) as $day)
                        @if ($day == 'Y')
                            <td class="text-center"><i class="fa fa-check"></i></td>
                        @else
                            <td></td>
                        @endif
                    @endforeach
                    <td class="text-center">{{$avails->DayTimes->DayTime->StartTime }}</td>
                    <td class="text-center">{{$avails->DayTimes->DayTime->EndTime }}</td>
                    <td>{{$avails->DaypartName }}</td>
                </tr>
            @endforeach
        @endforeach
            </tbody>
        </table>
    </div>
    </div>
</section>

@endsection
