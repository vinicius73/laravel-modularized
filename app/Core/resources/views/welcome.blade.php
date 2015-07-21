@extends('core::base')
@section('body')
    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }

        .desc {
            font-size: 30px;
        }
    </style>
    <div class="container">
        <div class="content">
            <div class="title">Laravel 5</div>
            <div class="desc">it's over 9000</div>
        </div>
    </div>
@endsection