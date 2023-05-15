@extends('layouts.master')

@section('title','- New Arrivals & Borns')

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
                        <h2>{{ __('animals.arrivals-born-h2') }}</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sponser-area">
                        <div class="media">
                            <h2 class="text-center" style="font-weight: 700; margin-bottom: 30px;">{{ __('animals.arrivals-h2') }}</h2>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="info">
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.arrival-th1') }}</th>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.arrival-th2') }}</th>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.arrival-th3') }}</th>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.arrival-th4') }}</th>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.arrival-th5') }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- On cells (`td` or `th`) -->
                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.arrival-tr1-td1') }}</th>
                                            <td class="text-center">{{ __('animals.arrival-tr1-td2') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr1-td3') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr1-td4') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr1-td5')}}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.arrival-tr2-td1') }}</th>
                                            <td class="text-center">{{ __('animals.arrival-tr2-td2') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr2-td3') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr2-td4') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr2-td5') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.arrival-tr3-td1') }}</th>
                                            <td class="text-center">{{ __('animals.arrival-tr3-td2') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr3-td3') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr3-td4') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr3-td5') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.arrival-tr4-td1') }}</th>
                                            <td class="text-center">{{ __('animals.arrival-tr4-td2') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr4-td3') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr4-td4') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr4-td5') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.arrival-tr5-td1') }}</th>
                                            <td class="text-center">{{ __('animals.arrival-tr5-td2') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr5-td3') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr5-td4') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr5-td5') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.arrival-tr6-td1') }}</th>
                                            <td class="text-center">{{ __('animals.arrival-tr6-td2') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr6-td3') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr6-td4') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr6-td5') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.arrival-tr7-td1') }}</th>
                                            <td class="text-center">{{ __('animals.arrival-tr7-td2') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr7-td3') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr7-td4') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr7-td5') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.arrival-tr8-td1') }}</th>
                                            <td class="text-center">{{ __('animals.arrival-tr8-td2') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr8-td3') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr8-td4') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr8-td5') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.arrival-tr9-td1') }}</th>
                                            <td class="text-center">{{ __('animals.arrival-tr9-td2') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr9-td3') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr9-td4') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr9-td5') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.arrival-tr10-td1') }}</th>
                                            <td class="text-center">{{ __('animals.arrival-tr10-td2') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr10-td3') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr10-td4') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr10-td5') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.arrival-tr11-td1') }}</th>
                                            <td class="text-center">{{ __('animals.arrival-tr11-td2') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr11-td3') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr11-td4') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr11-td5') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.arrival-tr12-td1') }}</th>
                                            <td class="text-center">{{ __('animals.arrival-tr12-td2') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr12-td3') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr12-td4') }}</td>
                                            <td class="text-center">{{ __('animals.arrival-tr12-td5') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sponser-area">
                        <div class="media">
                            <h2 class="text-center" style="font-weight: 700; margin-bottom: 30px;">{{ __('animals.born-h2') }}</h2>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="info">
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.born-th1') }}</th>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.born-th2') }}</th>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.born-th3') }}</th>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.born-th4') }}</th>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.born-th5') }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- On cells (`td` or `th`) -->
                                        <tr class="active">
                                            <th class="text-center" rowspan="2" style="vertical-align: middle">{{ __('animals.born-tr1-td1') }}</th>
                                            <td class="text-center" rowspan="2" style="vertical-align: middle">{{ __('animals.born-tr1-td2') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr1-td3') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr1-td4') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr1-td5') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <td class="text-center">{{ __('animals.born-tr1-br-td3') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr1-br-td4') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr1-br-td5') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center" rowspan="3" style="vertical-align: middle">{{ __('animals.born-tr2-td1') }}</th>
                                            <td class="text-center" rowspan="3" style="vertical-align: middle">{{ __('animals.born-tr2-td2') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr2-td3') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr2-td4') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr2-td5') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <td class="text-center">{{ __('animals.born-tr2-br-td3') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr2-br-td4') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr2-br-td5') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <td class="text-center">{{ __('animals.born-tr2-br1-td3') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr2-br2-td4') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr2-br3-td5') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center" rowspan="4" style="vertical-align: middle">{{ __('animals.born-tr3-td1') }}</th>
                                            <td class="text-center" rowspan="4" style="vertical-align: middle">{{ __('animals.born-tr3-td2') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr3-td3') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr3-td4') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr3-td5') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <td class="text-center">{{ __('animals.born-tr3-br-td3') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr3-br-td4') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr3-br-td5') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <td class="text-center">{{ __('animals.born-tr3-br1-td3') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr3-br1-td4') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr3-br1-td5') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <td class="text-center">{{ __('animals.born-tr3-br2-td3') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr3-br2-td4') }}</td>
                                            <td class="text-center">{{ __('animals.born-tr3-br2-td5') }}</td>
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
