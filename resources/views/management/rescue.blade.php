@extends('layouts.master')

@section('title','- Rescue & Rehabilitation')

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
                        <h2>{{ __('management.rescue-h2') }}</h2>
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
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('management.rescue-th1') }}</th>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('management.rescue-th2') }}</th>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('management.rescue-th3') }}</th>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('management.rescue-th4') }}</th>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('management.rescue-th5') }}</th>
                                            <th class="text-center" colspan="2">{{ __('management.rescue-th6') }}
                                                <tr class="info">
                                                    <th class="text-center" width="200">{{ __('management.rescue-th6-tr-th1') }}</th>
                                                    <th class="text-center" width="200">{{ __('management.rescue-th6-tr-th2') }}</th>
                                                </tr>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- On cells (`td` or `th`) -->
                                        <tr class="active">
                                            <th class="text-center">{{ __('management.rescue-tr1-td1') }}</th>
                                            <td class="text-center">{{ __('management.rescue-tr1-td2') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr1-td3') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr1-td4') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr1-td5') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr1-td6-td1') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr1-td6-td2') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('management.rescue-tr2-td1') }}</th>
                                            <td class="text-center">{{ __('management.rescue-tr2-td2') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr2-td3') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr2-td4') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr2-td5') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr2-td6-td1') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr2-td6-td2') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('management.rescue-tr3-td1') }}</th>
                                            <td class="text-center">{{ __('management.rescue-tr3-td2') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr3-td3') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr3-td4') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr3-td5') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr3-td6-td1') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr3-td6-td2') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('management.rescue-tr4-td1') }}</th>
                                            <td class="text-center">{{ __('management.rescue-tr4-td2') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr4-td3') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr4-td4') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr4-td5') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr4-td6-td1') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr4-td6-td2') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('management.rescue-tr5-td1') }}</th>
                                            <td class="text-center">{{ __('management.rescue-tr5-td2') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr5-td3') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr5-td4') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr5-td5') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr5-td6-td1') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr5-td6-td2') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('management.rescue-tr6-td1') }}</th>
                                            <td class="text-center">{{ __('management.rescue-tr6-td2') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr6-td3') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr6-td4') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr6-td5') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr6-td6-td1') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr6-td6-td2') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('management.rescue-tr7-td1') }}</th>
                                            <td class="text-center">{{ __('management.rescue-tr7-td2') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr7-td3') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr7-td4') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr7-td5') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr7-td6-td1') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr7-td6-td2') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('management.rescue-tr8-td1') }}</th>
                                            <td class="text-center">{{ __('management.rescue-tr8-td2') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr8-td3') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr8-td4') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr8-td5') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr8-td6-td1') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr8-td6-td2') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('management.rescue-tr9-td1') }}</th>
                                            <td class="text-center">{{ __('management.rescue-tr9-td2') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr9-td3') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr9-td4') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr9-td5') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr9-td6-td1') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr9-td6-td2') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('management.rescue-tr10-td1') }}</th>
                                            <td class="text-center">{{ __('management.rescue-tr10-td2') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr10-td3') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr10-td4') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr10-td5') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr10-td6-td1') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr10-td6-td2') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('management.rescue-tr11-td1') }}</th>
                                            <td class="text-center">{{ __('management.rescue-tr11-td2') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr11-td3') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr11-td4') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr11-td5') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr11-td6-td1') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr11-td6-td2') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('management.rescue-tr12-td1') }}</th>
                                            <td class="text-center">{{ __('management.rescue-tr12-td2') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr12-td3') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr12-td4') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr12-td5') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr12-td6-td1') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr12-td6-td2') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('management.rescue-tr13-td1') }}</th>
                                            <td class="text-center">{{ __('management.rescue-tr13-td2') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr13-td3') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr13-td4') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr13-td5') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr13-td6-td1') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr13-td6-td2') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('management.rescue-tr14-td1') }}</th>
                                            <td class="text-center">{{ __('management.rescue-tr14-td2') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr14-td3') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr14-td4') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr14-td5') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr14-td6-td1') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr14-td6-td2') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('management.rescue-tr15-td1') }}</th>
                                            <td class="text-center">{{ __('management.rescue-tr15-td2') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr15-td3') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr15-td4') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr15-td5') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr15-td6-td1') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr15-td6-td2') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('management.rescue-tr16-td1') }}</th>
                                            <td class="text-center">{{ __('management.rescue-tr16-td2') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr16-td3') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr16-td4') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr16-td5') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr16-td6-td1') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr16-td6-td2') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('management.rescue-tr17-td1') }}</th>
                                            <td class="text-center">{{ __('management.rescue-tr17-td2') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr17-td3') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr17-td4') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr17-td5') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr17-td6-td1') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr17-td6-td2') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('management.rescue-tr18-td1') }}</th>
                                            <td class="text-center">{{ __('management.rescue-tr18-td2') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr18-td3') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr18-td4') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr18-td5') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr18-td6-td1') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr18-td6-td2') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('management.rescue-tr19-td1') }}</th>
                                            <td class="text-center">{{ __('management.rescue-tr19-td2') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr19-td3') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr19-td4') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr19-td5') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr19-td6-td1') }}</td>
                                            <td class="text-center">{{ __('management.rescue-tr19-td6-td2') }}</td>
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
