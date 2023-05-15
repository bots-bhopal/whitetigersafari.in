@extends('layouts.master')

@section('title','- Human-Resources')

@push('css')
    <style>
        header .header-top .header-top-right ul li {
            color: #000000!important;
            font-weight: 600!important;
        }

        header .header-top .header-top-right ul li a{
            color: #000000!important;
            font-weight: 600!important;
        }

        header .main-header ul li.active a {
            color: #000000;
        }

        header .main-header ul li a {
            display: block;
            text-decoration: none;
            font-family: "Architects Daughter", cursive;
            color: #000000;
            font-weight: 600!important;
            padding: 20px 25px;
            font-size: 22px;
            font-weight: 300;
            letter-spacing: 1px;
            transition: all 0.3s;
        }
    </style>
@endpush

@section('content')
    <!-- Breadcumb Area Start Here -->
    <div class="breadcumb-area two"></div>
    <!-- Breadcumb Area End Here -->

    <!-- Remember Start Here -->
    <div class="remember-area faq-area threee gallery-open">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title">
                        <h2>{{ __('management.human-h2') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sponser-area">
                        <div class="media">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="info">
                                            <th class="text-center">{{ __('management.human-th1') }}</th>
                                            <th class="text-center">{{ __('management.human-th2') }}</th>
                                            <th class="text-center">{{ __('management.human-th3') }}</th>
                                            <th class="text-center">{{ __('management.human-th4') }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- On cells (`td` or `th`) -->
                                        <tr class="active">
                                            <td class="text-center">{{ __('management.human-tr1-td1') }}</td>
                                            <td>{{ __('management.human-tr1-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr1-td3') }}</td>
                                            <td>{{ __('management.human-tr1-td4') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <td class="text-center">{{ __('management.human-tr2-td1') }}</td>
                                            <td>{{ __('management.human-tr2-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr2-td3') }}</td>
                                            <td>{{ __('management.human-tr2-td4') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <td class="text-center">{{ __('management.human-tr3-td1') }}</td>
                                            <td>{{ __('management.human-tr3-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr3-td3') }}</td>
                                            <td>{{ __('management.human-tr3-td4') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <td class="text-center">{{ __('management.human-tr4-td1') }}</td>
                                            <td>{{ __('management.human-tr4-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr4-td3') }}</td>
                                            <td >{{ __('management.human-tr4-td4') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <td class="text-center">{{ __('management.human-tr5-td1') }}</td>
                                            <td>{{ __('management.human-tr5-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr5-td3') }}</td>
                                            <td>{{ __('management.human-tr5-td4') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <td class="text-center">{{ __('management.human-tr6-td1') }}</td>
                                            <td>{{ __('management.human-tr6-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr6-td3') }}</td>
                                            <td >{{ __('management.human-tr6-td4') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <td class="text-center">{{ __('management.human-tr7-td1') }}</td>
                                            <td>{{ __('management.human-tr7-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr7-td3') }}</td>
                                            <td>{{ __('management.human-tr7-td4') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <td class="text-center">{{ __('management.human-tr8-td1') }}</td>
                                            <td>{{ __('management.human-tr8-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr8-td3') }}</td>
                                            <td>{{ __('management.human-tr8-td4') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <td class="text-center">{{ __('management.human-tr9-td1') }}</td>
                                            <td>{{ __('management.human-tr9-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr9-td3') }}</td>
                                            <td>{{ __('management.human-tr9-td4') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <td class="text-center">{{ __('management.human-tr10-td1') }}</td>
                                            <td>{{ __('management.human-tr10-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr10-td3') }}</td>
                                            <td>{{ __('management.human-tr10-td4') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <td class="text-center">{{ __('management.human-tr11-td1') }}</td>
                                            <td>{{ __('management.human-tr11-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr11-td3') }}</td>
                                            <td>{{ __('management.human-tr11-td4') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <td class="text-center">{{ __('management.human-tr12-td1') }}</td>
                                            <td>{{ __('management.human-tr12-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr12-td3') }}</td>
                                            <td>
                                                <ol style="padding-left: 20px;">
                                                    <li>{{ __('management.human-tr12-td4-li1') }}</li>
                                                    <li>{{ __('management.human-tr12-td4-li2') }}</li>
                                                    <li>{{ __('management.human-tr12-td4-li3') }}</li>
                                                </ol>
                                            </td>
                                        </tr>

                                        <tr class="active">
                                            <td class="text-center">{{ __('management.human-tr13-td1') }}</td>
                                            <td>{{ __('management.human-tr13-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr13-td3') }}</td>
                                            <td>
                                                <ol style="padding-left: 20px;">
                                                    <li>{{ __('management.human-tr13-td4-li1') }}</li>
                                                    <li>{{ __('management.human-tr13-td4-li2') }}</li>
                                                    <li>{{ __('management.human-tr13-td4-li3') }}</li>
                                                    <li>{{ __('management.human-tr13-td4-li4') }}</li>
                                                    <li>{{ __('management.human-tr13-td4-li5') }}</li>
                                                    <li>{{ __('management.human-tr13-td4-li6') }}</li>
                                                    <li>{{ __('management.human-tr13-td4-li7') }}</li>
                                                    <li>{{ __('management.human-tr13-td4-li8') }}</li>
                                                    <li>{{ __('management.human-tr13-td4-li9') }}</li>
                                                    <li>{{ __('management.human-tr13-td4-li10') }}</li>
                                                </ol>
                                            </td>
                                        </tr>

                                        <tr class="success">
                                            <td class="text-center">{{ __('management.human-tr14-td1') }}</td>
                                            <td>{{ __('management.human-tr14-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr14-td3') }}</td>
                                            <td>
                                                <ol style="padding-left: 20px;">
                                                    <li>{{ __('management.human-tr14-td4-li1') }}</li>
                                                    <li>{{ __('management.human-tr14-td4-li2') }}</li>
                                                    <li>{{ __('management.human-tr14-td4-li3') }}</li>
                                                    <li>{{ __('management.human-tr14-td4-li4') }}</li>
                                                </ol>
                                            </td>
                                        </tr>

                                        <tr class="active">
                                            <td class="text-center">{{ __('management.human-tr15-td1') }}</td>
                                            <td>{{ __('management.human-tr15-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr15-td3') }}</td>
                                            <td>
                                                <ol style="padding-left: 20px;">
                                                    <li>{{ __('management.human-tr15-td4-li1') }}</li>
                                                    <li>{{ __('management.human-tr15-td4-li2') }}</li>
                                                    <li>{{ __('management.human-tr15-td4-li3') }}</li>
                                                    <li>{{ __('management.human-tr15-td4-li4') }}</li>
                                                    <li>{{ __('management.human-tr15-td4-li5') }}</li>
                                                </ol>
                                            </td>
                                        </tr>

                                        <tr class="success">
                                            <td class="text-center">{{ __('management.human-tr16-td1') }}</td>
                                            <td>{{ __('management.human-tr16-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr16-td3') }}</td>
                                            <td>
                                                <ol style="padding-left: 20px;">
                                                    <li>{{ __('management.human-tr16-td4-li1') }}</li>
                                                    <li>{{ __('management.human-tr16-td4-li2') }}</li>
                                                </ol>
                                            </td>
                                        </tr>

                                        <tr class="active">
                                            <td class="text-center">{{ __('management.human-tr17-td1') }}</td>
                                            <td>{{ __('management.human-tr17-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr17-td3') }}</td>
                                            <td>
                                                <ol style="padding-left: 20px;">
                                                    <li>{{ __('management.human-tr17-td4-li1') }}</li>
                                                </ol>
                                            </td>
                                        </tr>

                                        <tr class="success">
                                            <td class="text-center">{{ __('management.human-tr18-td1') }}</td>
                                            <td>{{ __('management.human-tr18-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr18-td3') }}</td>
                                            <td>
                                                <ol style="padding-left: 20px;">
                                                    <li>{{ __('management.human-tr18-td4-li1') }}</li>
                                                    <li>{{ __('management.human-tr18-td4-li2') }}</li>
                                                    <li>{{ __('management.human-tr18-td4-li3') }}</li>
                                                </ol>
                                            </td>
                                        </tr>

                                        <tr class="active">
                                            <td class="text-center">{{ __('management.human-tr19-td1') }}</td>
                                            <td>{{ __('management.human-tr19-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr19-td3') }}</td>
                                            <td >
                                                <ol style="padding-left: 20px;">
                                                    <li>{{ __('management.human-tr19-td4-li1') }}</li>
                                                    <li>{{ __('management.human-tr19-td4-li2') }}</li>
                                                </ol>
                                            </td>
                                        </tr>

                                        <tr class="success">
                                            <td class="text-center">{{ __('management.human-tr20-td1') }}</td>
                                            <td>{{ __('management.human-tr20-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr20-td3') }}</td>
                                            <td>
                                                <ol style="padding-left: 20px;">
                                                    <li>{{ __('management.human-tr20-td4-li1') }}</li>
                                                    <li>{{ __('management.human-tr20-td4-li2') }}</li>
                                                </ol>
                                            </td>
                                        </tr>

                                        <tr class="active">
                                            <td class="text-center">{{ __('management.human-tr21-td1') }}</td>
                                            <td>{{ __('management.human-tr21-td2') }}</td>
                                            <td class="text-center">{{ __('management.human-tr21-td3') }}</td>
                                            <td>
                                                <ol style="padding-left: 20px;">
                                                    <li>{{ __('management.human-tr21-td4-li1') }}</li>
                                                    <li>{{ __('management.human-tr21-td4-li2') }}</li>
                                                </ol>
                                            </td>
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
