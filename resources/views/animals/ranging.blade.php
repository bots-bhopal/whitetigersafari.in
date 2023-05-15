@extends('layouts.master')

@section('title','- Free Ranging Animals')

@push('css')
    <style>
        header .main-header ul li a{
            color: #dcd794!important;
            font-weight: 600;
        }
    </style>
@endpush

@section('content')
    <!-- Breadcumb Area Start Here -->
    <div class="breadcumb-area three"></div>
    <!-- Breadcumb Area End Here -->

    <!-- Remember Start Here -->
    <div class="remember-area faq-area threee gallery-open">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title">
                        <h2>{{ __('animals.ranging-h2') }}</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sponser-area">
                        <div class="media">
                            <h2 class="all-h2">{{ __('animals.tbl-mammals-h2') }}</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="info">
                                            <th class="text-center">{{ __('animals.tbl-th1') }}</th>
                                            <th class="text-center">{{ __('animals.tbl-th2') }}</th>
                                            <th class="text-center">{{ __('animals.tbl-th3') }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- On cells (`td` or `th`) -->
                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.mammals-tr1-td1') }}</th>
                                            <td>{{ __('animals.mammals-tr1-td2') }}</td>
                                            <td class="text-center">{{ __('animals.mammals-tr1-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.mammals-tr2-td1') }}</th>
                                            <td>{{ __('animals.mammals-tr2-td2') }}</td>
                                            <td class="text-center">{{ __('animals.mammals-tr2-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.mammals-tr3-td1') }}</th>
                                            <td>{{ __('animals.mammals-tr3-td2') }}</td>
                                            <td class="text-center">{{ __('animals.mammals-tr3-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.mammals-tr4-td1') }}</th>
                                            <td>{{ __('animals.mammals-tr4-td2') }}</td>
                                            <td class="text-center">{{ __('animals.mammals-tr4-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.mammals-tr5-td1') }}</th>
                                            <td>{{ __('animals.mammals-tr5-td2') }}</td>
                                            <td class="text-center">{{ __('animals.mammals-tr5-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.mammals-tr6-td1') }}</th>
                                            <td>{{ __('animals.mammals-tr6-td2') }}</td>
                                            <td class="text-center">{{ __('animals.mammals-tr6-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.mammals-tr7-td1') }}</th>
                                            <td>{{ __('animals.mammals-tr7-td2') }}</td>
                                            <td class="text-center">{{ __('animals.mammals-tr7-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.mammals-tr8-td1') }}</th>
                                            <td>{{ __('animals.mammals-tr8-td2') }}</td>
                                            <td class="text-center">{{ __('animals.mammals-tr8-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.mammals-tr9-td1') }}</th>
                                            <td>{{ __('animals.mammals-tr9-td2') }}</td>
                                            <td class="text-center">{{ __('animals.mammals-tr9-td3') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h2 class="all-h2">{{ __('animals.tbl-birds-h2') }}</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="info">
                                            <th class="text-center">{{ __('animals.tbl-th1') }}</th>
                                            <th class="text-center">{{ __('animals.tbl-th2') }}</th>
                                            <th class="text-center">{{ __('animals.tbl-th3') }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- On cells (`td` or `th`) -->
                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr1-td1') }}</th>
                                            <td>{{ __('animals.birds-tr1-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr1-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr2-td1') }}</th>
                                            <td>{{ __('animals.birds-tr2-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr2-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr3-td1') }}</th>
                                            <td>{{ __('animals.birds-tr3-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr3-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr4-td1') }}</th>
                                            <td>{{ __('animals.birds-tr4-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr4-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr5-td1') }}</th>
                                            <td>{{ __('animals.birds-tr5-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr5-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr6-td1') }}</th>
                                            <td>{{ __('animals.birds-tr6-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr6-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr7-td1') }}</th>
                                            <td>{{ __('animals.birds-tr7-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr7-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr8-td1') }}</th>
                                            <td>{{ __('animals.birds-tr8-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr8-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr9-td1') }}</th>
                                            <td>{{ __('animals.birds-tr9-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr9-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr10-td1') }}</th>
                                            <td>{{ __('animals.birds-tr10-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr10-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr11-td1') }}</th>
                                            <td>{{ __('animals.birds-tr11-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr11-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr12-td1') }}</th>
                                            <td>{{ __('animals.birds-tr12-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr12-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr13-td1') }}</th>
                                            <td>{{ __('animals.birds-tr13-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr13-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr14-td1') }}</th>
                                            <td>{{ __('animals.birds-tr14-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr14-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr15-td1') }}</th>
                                            <td>{{ __('animals.birds-tr15-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr15-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr16-td1') }}</th>
                                            <td>{{ __('animals.birds-tr16-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr16-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr17-td1') }}</th>
                                            <td>{{ __('animals.birds-tr17-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr17-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr18-td1') }}</th>
                                            <td>{{ __('animals.birds-tr18-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr18-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr19-td1') }}</th>
                                            <td>{{ __('animals.birds-tr19-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr19-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr20-td1') }}</th>
                                            <td>{{ __('animals.birds-tr20-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr20-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr21-td1') }}</th>
                                            <td>{{ __('animals.birds-tr21-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr21-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr22-td1') }}</th>
                                            <td>{{ __('animals.birds-tr22-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr22-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr23-td1') }}</th>
                                            <td>{{ __('animals.birds-tr23-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr23-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr24-td1') }}</th>
                                            <td>{{ __('animals.birds-tr24-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr24-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr25-td1') }}</th>
                                            <td>{{ __('animals.birds-tr25-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr25-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr26-td1') }}</th>
                                            <td>{{ __('animals.birds-tr26-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr26-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr27-td1') }}</th>
                                            <td>{{ __('animals.birds-tr27-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr27-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr28-td1') }}</th>
                                            <td>{{ __('animals.birds-tr28-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr28-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr29-td1') }}</th>
                                            <td>{{ __('animals.birds-tr29-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr29-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr30-td1') }}</th>
                                            <td>{{ __('animals.birds-tr30-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr30-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr31-td1') }}</th>
                                            <td>{{ __('animals.birds-tr31-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr31-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr32-td1') }}</th>
                                            <td>{{ __('animals.birds-tr32-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr32-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr33-td1') }}</th>
                                            <td>{{ __('animals.birds-tr33-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr33-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr34-td1') }}</th>
                                            <td>{{ __('animals.birds-tr34-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr34-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr35-td1') }}</th>
                                            <td>{{ __('animals.birds-tr35-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr35-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr36-td1') }}</th>
                                            <td>{{ __('animals.birds-tr36-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr36-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr37-td1') }}</th>
                                            <td>{{ __('animals.birds-tr37-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr37-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr38-td1') }}</th>
                                            <td>{{ __('animals.birds-tr38-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr38-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr39-td1') }}</th>
                                            <td>{{ __('animals.birds-tr39-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr39-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr40-td1') }}</th>
                                            <td>{{ __('animals.birds-tr40-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr40-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr41-td1') }}</th>
                                            <td>{{ __('animals.birds-tr41-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr41-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr42-td1') }}</th>
                                            <td>{{ __('animals.birds-tr42-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr42-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr43-td1') }}</th>
                                            <td>{{ __('animals.birds-tr43-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr43-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr44-td1') }}</th>
                                            <td>{{ __('animals.birds-tr44-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr44-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr45-td1') }}</th>
                                            <td>{{ __('animals.birds-tr45-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr45-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr46-td1') }}</th>
                                            <td>{{ __('animals.birds-tr46-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr46-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr47-td1') }}</th>
                                            <td>{{ __('animals.birds-tr47-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr47-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr48-td1') }}</th>
                                            <td>{{ __('animals.birds-tr48-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr48-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr49-td1') }}</th>
                                            <td>{{ __('animals.birds-tr49-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr49-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr50-td1') }}</th>
                                            <td>{{ __('animals.birds-tr50-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr50-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr51-td1') }}</th>
                                            <td>{{ __('animals.birds-tr51-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr51-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr52-td1') }}</th>
                                            <td>{{ __('animals.birds-tr52-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr52-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr53-td1') }}</th>
                                            <td>{{ __('animals.birds-tr53-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr53-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr54-td1') }}</th>
                                            <td>{{ __('animals.birds-tr54-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr54-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr55-td1') }}</th>
                                            <td>{{ __('animals.birds-tr55-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr55-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr56-td1') }}</th>
                                            <td>{{ __('animals.birds-tr56-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr56-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr57-td1') }}</th>
                                            <td>{{ __('animals.birds-tr57-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr57-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr58-td1') }}</th>
                                            <td>{{ __('animals.birds-tr58-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr58-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr59-td1') }}</th>
                                            <td>{{ __('animals.birds-tr59-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr59-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr60-td1') }}</th>
                                            <td>{{ __('animals.birds-tr60-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr60-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr61-td1') }}</th>
                                            <td>{{ __('animals.birds-tr61-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr61-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr62-td1') }}</th>
                                            <td>{{ __('animals.birds-tr62-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr62-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr63-td1') }}</th>
                                            <td>{{ __('animals.birds-tr63-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr63-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr64-td1') }}</th>
                                            <td>{{ __('animals.birds-tr64-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr64-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr65-td1') }}</th>
                                            <td>{{ __('animals.birds-tr65-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr65-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr66-td1') }}</th>
                                            <td>{{ __('animals.birds-tr66-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr66-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr67-td1') }}</th>
                                            <td>{{ __('animals.birds-tr67-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr67-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr68-td1') }}</th>
                                            <td>{{ __('animals.birds-tr68-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr68-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr69-td1') }}</th>
                                            <td>{{ __('animals.birds-tr69-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr69-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr70-td1') }}</th>
                                            <td>{{ __('animals.birds-tr70-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr70-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr71-td1') }}</th>
                                            <td>{{ __('animals.birds-tr71-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr71-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr72-td1') }}</th>
                                            <td>{{ __('animals.birds-tr72-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr72-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr73-td1') }}</th>
                                            <td>{{ __('animals.birds-tr73-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr73-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr74-td1') }}</th>
                                            <td>{{ __('animals.birds-tr74-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr74-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr75-td1') }}</th>
                                            <td>{{ __('animals.birds-tr75-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr75-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr76-td1') }}</th>
                                            <td>{{ __('animals.birds-tr76-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr76-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr77-td1') }}</th>
                                            <td>{{ __('animals.birds-tr77-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr77-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr78-td1') }}</th>
                                            <td>{{ __('animals.birds-tr78-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr78-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr79-td1') }}</th>
                                            <td>{{ __('animals.birds-tr79-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr79-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr80-td1') }}</th>
                                            <td>{{ __('animals.birds-tr80-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr80-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr81-td1') }}</th>
                                            <td>{{ __('animals.birds-tr81-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr81-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr82-td1') }}</th>
                                            <td>{{ __('animals.birds-tr82-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr82-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr83-td1') }}</th>
                                            <td>{{ __('animals.birds-tr83-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr83-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr84-td1') }}</th>
                                            <td>{{ __('animals.birds-tr84-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr84-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr85-td1') }}</th>
                                            <td>{{ __('animals.birds-tr85-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr85-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr86-td1') }}</th>
                                            <td>{{ __('animals.birds-tr86-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr86-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr87-td1') }}</th>
                                            <td>{{ __('animals.birds-tr87-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr87-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr88-td1') }}</th>
                                            <td>{{ __('animals.birds-tr88-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr88-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr89-td1') }}</th>
                                            <td>{{ __('animals.birds-tr89-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr89-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr90-td1') }}</th>
                                            <td>{{ __('animals.birds-tr90-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr90-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr91-td1') }}</th>
                                            <td>{{ __('animals.birds-tr91-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr91-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr92-td1') }}</th>
                                            <td>{{ __('animals.birds-tr92-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr92-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr93-td1') }}</th>
                                            <td>{{ __('animals.birds-tr93-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr93-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.birds-tr94-td1') }}</th>
                                            <td>{{ __('animals.birds-tr94-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr94-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.birds-tr95-td1') }}</th>
                                            <td>{{ __('animals.birds-tr95-td2') }}</td>
                                            <td class="text-center">{{ __('animals.birds-tr95-td3') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h2 class="all-h2">{{ __('animals.tbl-reptiles-h2') }}</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="info">
                                            <th class="text-center">{{ __('animals.tbl-th1') }}</th>
                                            <th class="text-center">{{ __('animals.tbl-th2') }}</th>
                                            <th class="text-center">{{ __('animals.tbl-th3') }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- On cells (`td` or `th`) -->
                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.reptiles-tr1-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr1-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr1-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.reptiles-tr2-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr2-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr2-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.reptiles-tr3-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr3-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr3-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.reptiles-tr4-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr4-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr4-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.reptiles-tr5-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr5-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr5-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.reptiles-tr6-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr6-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr6-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.reptiles-tr7-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr7-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr7-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.reptiles-tr8-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr8-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr8-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.reptiles-tr9-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr9-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr9-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.reptiles-tr10-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr10-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr10-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.reptiles-tr11-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr11-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr11-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.reptiles-tr12-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr12-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr12-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.reptiles-tr13-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr13-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr13-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.reptiles-tr14-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr14-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr14-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.reptiles-tr15-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr15-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr15-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.reptiles-tr16-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr16-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr16-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.reptiles-tr17-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr17-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr17-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.reptiles-tr18-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr18-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr18-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.reptiles-tr19-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr19-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr19-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.reptiles-tr20-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr20-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr20-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.reptiles-tr21-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr21-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr21-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.reptiles-tr22-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr22-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr22-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.reptiles-tr23-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr23-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr23-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.reptiles-tr24-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr24-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr24-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.reptiles-tr25-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr25-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr25-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.reptiles-tr26-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr26-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr26-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.reptiles-tr27-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr27-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr27-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.reptiles-tr28-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr28-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr28-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.reptiles-tr29-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr29-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr29-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.reptiles-tr30-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr30-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr30-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.reptiles-tr31-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr31-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr31-td3') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.reptiles-tr32-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr32-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr32-td3') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.reptiles-tr33-td1') }}</th>
                                            <td>{{ __('animals.reptiles-tr33-td2') }}</td>
                                            <td class="text-center">{{ __('animals.reptiles-tr33-td3') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Remember End Here -->
@endsection
