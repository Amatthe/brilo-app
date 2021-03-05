@extends('layout.app')

@section('content')
    <h1>Current Bitcoin prices are:</h1>

    <!-- Data goes here -->
    <table>
        <tr>
            <td>USD (&dollar;)</td>
            <td>{{ $usd }}</td>
        </tr>
        <tr>
            <td>EUR (&euro;)</td>
            <td>{{ $eur }}</td>
        </tr>
    </table>

    <p>Last data timestamp is: {{ $timestamp }}</p>

    <!-- API provider info  -->
    <a href="{{ $configReference }}">{{ $configInfo }}</a>

@endsection
