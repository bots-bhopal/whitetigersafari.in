@extends('layouts.master')

@section('title','- Animal Adoption')

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
    <div class="breadcumb-area"></div>
    <!-- Breadcumb Area End Here -->

    <!-- Remember Start Here -->
    <div class="remember-area faq-area threee gallery-open">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title">
                        <h2>{{ __('animals.adoption-h2') }}</h2>
                        <p><span>{{ __('animals.adoption-p1-span') }}</span> {{ __('animals.adoption-p1') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
                    <div class="sponser-area">
                        <div class="media">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="info">
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.adoption-th1') }}</th>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.adoption-th2') }}</th>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.adoption-th3') }}</th>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.adoption-th4') }}</th>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.adoption-th5') }}</th>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.adoption-th6') }}</th>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.adoption-th7') }}</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.adoption-group-a') }}</th>
                                    </tr>

                                    <tbody>
                                        <!-- On cells (`td` or `th`) -->
                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.adoption-group-a-tr1-td1') }}</th>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr1-td2') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr1-td3') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr1-td4') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr1-td5') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr1-td6') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr1-td7') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.adoption-group-a-tr2-td1') }}</th>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr2-td2') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr2-td3') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr2-td4') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr2-td5') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr2-td6') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr2-td7') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.adoption-group-a-tr3-td1') }}</th>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr3-td2') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr3-td3') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr3-td4') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr3-td5') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr3-td6') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr3-td7') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.adoption-group-a-tr4-td1') }}</th>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr4-td2') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr4-td3') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr4-td4') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr4-td5') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr4-td6') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-a-tr4-td7') }}</td>
                                        </tr>

                                    <thead>
                                        <tr>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.adoption-group-b') }}</th>
                                        </tr>
                                    </thead>

                                    <tr class="active">
                                        <th class="text-center">{{ __('animals.adoption-group-b-tr1-td1') }}</th>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr1-td2') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr1-td3') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr1-td4') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr1-td5') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr1-td6') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr1-td7') }}</td>
                                    </tr>

                                    <tr class="success">
                                        <th class="text-center">{{ __('animals.adoption-group-b-tr2-td1') }}</th>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr2-td2') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr2-td3') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr2-td4') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr2-td5') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr2-td6') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr2-td7') }}</td>
                                    </tr>

                                    <tr class="active">
                                        <th class="text-center">{{ __('animals.adoption-group-b-tr3-td1') }}</th>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr3-td2') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr3-td3') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr3-td4') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr3-td5') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr3-td6') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr3-td7') }}</td>
                                    </tr>

                                    <tr class="success">
                                        <th class="text-center">{{ __('animals.adoption-group-b-tr4-td1') }}</th>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr4-td2') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr4-td3') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr4-td4') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr4-td5') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr4-td6') }}</td>
                                        <td class="text-center">{{ __('animals.adoption-group-b-tr4-td7') }}</td>
                                    </tr>

                                    <thead>
                                        <tr>
                                            <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('animals.adoption-group-c') }}</th>
                                        </tr>
                                    </thead>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.adoption-group-c-tr1-td1') }}</th>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr1-td2') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr1-td3') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr1-td4') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr1-td5') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr1-td6') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr1-td7') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.adoption-group-c-tr2-td1') }}</th>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr2-td2') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr2-td3') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr2-td4') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr2-td5') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr2-td6') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr2-td7') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.adoption-group-c-tr3-td1') }}</th>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr3-td2') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr3-td3') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr3-td4') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr3-td5') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr3-td6') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr3-td7') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.adoption-group-c-tr4-td1') }}</th>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr4-td2') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr4-td3') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr4-td4') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr4-td5') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr4-td6') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr4-td7') }}</td>
                                        </tr>

                                        <tr class="active">
                                            <th class="text-center">{{ __('animals.adoption-group-c-tr5-td1') }}</th>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr5-td2') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr5-td3') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr5-td4') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr5-td5') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr5-td6') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr5-td7') }}</td>
                                        </tr>

                                        <tr class="success">
                                            <th class="text-center">{{ __('animals.adoption-group-c-tr6-td1') }}</th>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr6-td2') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr6-td3') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr6-td4') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr6-td5') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr6-td6') }}</td>
                                            <td class="text-center">{{ __('animals.adoption-group-c-tr6-td7') }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="section-title">
                                <p>{{ __('animals.adoption-p1') }}</p>
                            </div>

                            <div class="media-body">
                                <div class="widget" style="font-weight: 500;">
                                    <h2 class="widget-title">{{ __('animals.adoption-title-h2') }}</h2>
                                </div>
                                <ul style="text-align: justify;">
                                    <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" style="margin-right: 5px;"/>{{ __('animals.adoption-li1') }}</li>
                                    <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" style="margin-right: 5px;"/>{{ __('animals.adoption-li2') }}</li>
                                    <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" style="margin-right: 5px;"/>{{ __('animals.adoption-li3') }}</li>
                                    <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" style="margin-right: 5px;"/>{{ __('animals.adoption-li4') }}</li>
                                    <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" style="margin-right: 5px;"/>{{ __('animals.adoption-li5') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Remember End Here -->
@endsection
