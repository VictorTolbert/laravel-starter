@extends('layouts.app')

@section('content')
<header class="hero is-dark">
    <div class="hero-body">
        <div class="container is-fluid">
            <h1 class="title">XML Proposal Viewer</h1>
            <h2 class="subtitle">{{  $xml->Proposal->Name }}</h2>
        </div>
    </div>
</header>

<section class="section">
    <div class="container is-fluid">
        {{-- <div class="print-header">
            <h5><b>{{  $xml->Proposal->Seller['companyName'] }}</b>,
                {{  $xml->Proposal->Seller->Salesperson['name'] }},
                {{  $xml->Proposal->Seller->Salesperson->Email }}<br>
                {{  $xml->Proposal->Seller->Salesperson->Phone[0]['type'] }}: {{  $xml->Proposal->Seller->Salesperson->Phone[0] }} /
                {{  $xml->Proposal->Seller->Salesperson->Phone[1]['type'] }}: {{  $xml->Proposal->Seller->Salesperson->Phone[1] }}</h5>
                <h6><b>{{ $xml->Proposal->Advertiser['name'] }}</b>, {{ $xml->Proposal->Advertiser->Product['name'] }} <br>
                <em>{{  $xml->Proposal->Name }}</em><br></h6>
        </div> --}}
        {{--<h2>Avails: {{ $xml->Proposal->AvailList->Name }}</h2>--}}
        <table id="avail-list" class="table is-striped is-fullwidth">
            <thead>
            <tr>
                <th>Program Name</th>
                <th class="rate"><b>Rate</b></th>
                <th>Rating</th>
                <th>
                    <b-tooltip label="Cost Per Point">
                        <abbr title="Cost Per Point">CPP</abbr>
                    </b-tooltip>
                </th>
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
                    <td>
                        {{ $avails->AvailName }}
                    </td>
                    <td class="rate has-text-right">
                        {{ number_format((float) $period->Rate, 2, ".", ",") }}
                    </td>
                    <td class="has-text-right">
                        {{ $period->DemoValues->DemoValue }}
                    </td>
                    @if( (float) $period->DemoValues->DemoValue > 0 )
                        <td class="has-text-right">
                            {{ number_format( (float) $period->Rate / (float) $period->DemoValues->DemoValue, 2, ".", ",")  }}
                        </td>
                    @else
                        <td class="has-text-right">
                            N/A
                        </td>
                    @endif
                    <td>
                        {{ $period['startDate'] }}
                    </td>
                    <td>
                        {{ $period['endDate'] }}
                    </td>
                    @foreach($avails->DayTimes->DayTime->Days->children($namespaces['tvb-tp']) as $day)
                        @if ($day == 'Y')
                            <td class="text-center">
                                <i class="fa fa-check"></i>
                            </td>
                        @else
                            <td></td>
                        @endif
                    @endforeach
                    <td class="text-center">
                        {{$avails->DayTimes->DayTime->StartTime }}
                    </td>
                    <td class="text-center">
                        {{$avails->DayTimes->DayTime->EndTime }}
                    </td>
                    <td>
                        {{$avails->DaypartName }}
                    </td>
                </tr>
            @endforeach
        @endforeach
            </tbody>
        </table>
    </div>
    </div>
</section>

@endsection
