@extends('layouts.master')

@section('title','- Training Programme')

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

    @if (session('locale') == 'en')
        <!-- Remember Start Here -->
        <div class="remember-area faq-area threee gallery-open">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>{{ __('corner.training-h2') }}</h2>
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
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('corner.training-th1') }}</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('corner.training-th2') }}</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('corner.training-th3') }}</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('corner.training-th4') }}</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('corner.training-th5') }}</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <!-- On cells (`td` or `th`) -->
                                            <tr class="active">
                                                <th class="text-center" rowspan="2">{{ __('corner.training-tr1-td1') }}</th>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr1-td2') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr1-td3') }}</td>
                                                <td class="text-center">{{ __('corner.training-tr1-td4') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr1-td5') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr1-br-td4') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">{{ __('corner.training-tr2-td1') }}</th>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr2-td2') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr2-td3') }}</td>
                                                <td class="text-center">{{ __('corner.training-tr2-td4') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr2-td5') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr2-br-td4') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">{{ __('corner.training-tr3-td1') }}</th>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr3-td2') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr3-td3') }}</td>
                                                <td class="text-center">{{ __('corner.training-tr3-td4') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr3-td5') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr3-br-td4') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">{{ __('corner.training-tr4-td1') }}</th>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr4-td2') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr4-td3') }}</td>
                                                <td class="text-center">{{ __('corner.training-tr4-td4') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr4-td5') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr4-br-td4') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">{{ __('corner.training-tr5-td1') }}</th>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr5-td2') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr5-td3') }}</td>
                                                <td class="text-center">{{ __('corner.training-tr5-td4') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr5-td5') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr5-br-td4') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="info">
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('corner.training-th1') }}</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('corner.training-th2') }}</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('corner.training-th3') }}</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('corner.training-th4') }}</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('corner.training-th5') }}</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <!-- On cells (`td` or `th`) -->
                                            <tr class="active">
                                                <th class="text-center" rowspan="2">{{ __('corner.training-tr6-td1') }}</th>
                                                <td class="text-center">{{ __('corner.training-tr6-td2') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr6-td3') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr6-td4') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr6-td5') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr6-br-td1') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="5">{{ __('corner.training-tr7-td1') }}</th>
                                                <td class="text-center">{{ __('corner.training-tr7-td2') }}</td>
                                                <td class="text-center" rowspan="5">{{ __('corner.training-tr7-td3') }}</td>
                                                <td class="text-center" rowspan="5">{{ __('corner.training-tr7-td4') }}</td>
                                                <td class="text-center" rowspan="5">{{ __('corner.training-tr7-td5') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr7-br1-td1') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr7-br2-td1') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr7-br3-td1') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr7-br4-td1') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">{{ __('corner.training-tr8-td1') }}</th>
                                                <td class="text-center">{{ __('corner.training-tr8-td2') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr8-td3') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr8-td4') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr8-td5') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr8-br-td1') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">{{ __('corner.training-tr9-td1') }}</th>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr9-td2') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr9-td3') }}</td>
                                                <td class="text-center">{{ __('corner.training-tr9-td4') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr9-t5') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr9-br-td4') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">{{ __('corner.training-tr10-td1') }}</th>
                                                <td class="text-center">{{ __('corner.training-tr10-td2') }}</td>
                                                <td class="text-center">{{ __('corner.training-tr10-td3') }}</td>
                                                <td class="text-center">{{ __('corner.training-tr10-td4') }}</td>
                                                <td class="text-center">{{ __('corner.training-tr10-td5') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">{{ __('corner.training-tr11-td1') }}</th>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr11-td2') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr11-td3') }}</td>
                                                <td class="text-center">{{ __('corner.training-tr11-td4') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr11-td5') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr11-br-td4') }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="info">
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('corner.training-th1') }}</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('corner.training-th2') }}</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('corner.training-th3') }}</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('corner.training-th4') }}</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">{{ __('corner.training-th5') }}</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <!-- On cells (`td` or `th`) -->
                                            <tr class="active">
                                                <th class="text-center" rowspan="3">{{ __('corner.training-tr12-td1') }}</th>
                                                <td class="text-center">{{ __('corner.training-tr12-td2') }}</td>
                                                <td class="text-center" rowspan="3">{{ __('corner.training-tr12-td3') }}</td>
                                                <td class="text-center" rowspan="3">{{ __('corner.training-tr12-td4') }}</td>
                                                <td class="text-center" rowspan="3">{{ __('corner.training-tr12-td5') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr12-br1-td1') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr12-br2-td1') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">{{ __('corner.training-tr13-td1') }}</th>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr13-td2') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr13-td3') }}</td>
                                                <td class="text-center">{{ __('corner.training-tr13-td4') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr13-td5') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr13-br-td4') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="5">{{ __('corner.training-tr14-td1') }}</th>
                                                <td class="text-center">{{ __('corner.training-tr14-td2') }}</td>
                                                <td class="text-center" rowspan="5">{{ __('corner.training-tr14-td3') }}</td>
                                                <td class="text-center" rowspan="5">{{ __('corner.training-tr14-td4') }}</td>
                                                <td class="text-center" rowspan="5">{{ __('corner.training-tr14-td5') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr14-br1-td1') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr14-br2-td1') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr14-br3-td1') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr14-br3-td1') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">{{ __('corner.training-tr15-td1') }}</th>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr15-td2') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr15-td3') }}</td>
                                                <td class="text-center">{{ __('corner.training-tr15-td4') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr15-td5') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr15-br-td4') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">{{ __('corner.training-tr16-td1') }}</th>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr16-td2') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr16-td3') }}</td>
                                                <td class="text-center">{{ __('corner.training-tr16-td4') }}</td>
                                                <td class="text-center" rowspan="2">{{ __('corner.training-tr16-td5') }}</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">{{ __('corner.training-tr16-br-td4') }}</td>
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
    @endif

    @if (session('locale') == 'hi')
        <!-- Remember Start Here -->
        <div class="remember-area faq-area threee gallery-open">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>प्रशिक्षण कार्यक्रम</h2>
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
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">क्रमांक</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">चिड़ियाघर कर्मियों का नाम और पदनाम</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">प्रशिक्षण की विषय वस्तु</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">प्रशिक्षण की अवधि</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">उस संस्थान का नाम जहां प्रशिक्षण में भाग लिया</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <!-- On cells (`td` or `th`) -->
                                            <tr class="active">
                                                <th class="text-center" rowspan="2">01</th>
                                                <td class="text-center" rowspan="2">Mr. Sunil Bhujwa (Asst. Animal Keeper)</td>
                                                <td class="text-center" rowspan="2">Zoo Keeper Training</td>
                                                <td class="text-center">02 days</td>
                                                <td class="text-center" rowspan="2">Gandhi Zoological Park, Gwalior (M.P.)</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">(05 to 06 Nov. 2017)</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">02</th>
                                                <td class="text-center" rowspan="2">Mr. Sitaram Pal  (Asst. Animal Keeper)</td>
                                                <td class="text-center" rowspan="2">Zoo Keeper Training</td>
                                                <td class="text-center">02 days</td>
                                                <td class="text-center" rowspan="2">Gandhi Zoological Park, Gwalior (M.P.)</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">(05 to 06 Nov. 2017)</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">03</th>
                                                <td class="text-center" rowspan="2">Dr. Rajesh Tomar (Veterinary Officer)</td>
                                                <td class="text-center" rowspan="2">Field Course interventions in wild animal health</td>
                                                <td class="text-center">20 days</td>
                                                <td class="text-center" rowspan="2">At Sariska Tiger Reserve by WII, ZSL and Edinburgh University</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">(03 to 22 Feb.2018)</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">04</th>
                                                <td class="text-center" rowspan="2">Mr. Manish Dwivedi (Animal Keeper)</td>
                                                <td class="text-center" rowspan="2">Zoo Keeper Training</td>
                                                <td class="text-center">07 days</td>
                                                <td class="text-center" rowspan="2">Sakkar bagh Zoo, Junagadh</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">(19 to 25 Feb.2018)</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">05</th>
                                                <td class="text-center" rowspan="2">Mr. Vijay Naamdev  (Asst. Animal Keeper)</td>
                                                <td class="text-center" rowspan="2">Zoo Keeper Training</td>
                                                <td class="text-center">07 days</td>
                                                <td class="text-center" rowspan="2">Gandhi Zoological Park, Gwalior (M.P.)</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">(19 to 25 Feb.2018)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="info">
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">क्रमांक</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">चिड़ियाघर कर्मियों का नाम और पदनाम</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">प्रशिक्षण की विषय वस्तु</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">प्रशिक्षण की अवधि</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">उस संस्थान का नाम जहां प्रशिक्षण में भाग लिया</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <!-- On cells (`td` or `th`) -->
                                            <tr class="active">
                                                <th class="text-center" rowspan="2">01</th>
                                                <td class="text-center">Mr. Ghanshyam Tiwari</td>
                                                <td class="text-center" rowspan="2">Tourism and Hospitality Training</td>
                                                <td class="text-center" rowspan="2">06 Days (16/04/2018 to 21/04/2018)</td>
                                                <td class="text-center" rowspan="2">MP Ecotourism Development Board, Bhopal (M.P.)</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Mr. Kamal Singh</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="5">02</th>
                                                <td class="text-center">Mr. Sanjay Raykhere (Director Zoo)</td>
                                                <td class="text-center" rowspan="5">Regional Wildlife Rescue Squad Workshop</td>
                                                <td class="text-center" rowspan="5">03 Days (12/06/2018 to 14/06/2018)</td>
                                                <td class="text-center" rowspan="5">Pachmadi (Madhya Pradesh)</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Dr. Rajesh Tomar (Veterinary Officer)</td>
                                            </tr>
                                            <tr class="active">
                                                <td class="text-center">Mr. Kaleem Khan (Animal Keeper)</td>
                                            </tr>
                                            <tr class="active">
                                                <td class="text-center">Mr. Satendra Pratap Singh (Animal Keeper)</td>
                                            </tr>
                                            <tr class="active">
                                                <td class="text-center">Mr. Ranjit Patel (Driver)</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">03</th>
                                                <td class="text-center">Mr. Kaleem Khan (Animal Keeper)</td>
                                                <td class="text-center" rowspan="2">Advancing Bear Care Workshop</td>
                                                <td class="text-center" rowspan="2">04 Days (03/12/2018 to 06/12/2018)</td>
                                                <td class="text-center" rowspan="2">SOS Agra (Uttar Pradesh)</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Mr. Suraj Yadav (Asst. Animal Keeper)</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">04</th>
                                                <td class="text-center" rowspan="2">Dr. Rajesh Tomar (Veterinary Officer)</td>
                                                <td class="text-center" rowspan="2">Physical and Chemical Capture of wildlife (Zimbabwe)</td>
                                                <td class="text-center">15 days</td>
                                                <td class="text-center" rowspan="2">At Mallilangwe Game Reserve, Zimbabwe</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">(03/02/2019 to 22 /02/2019)</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">05</th>
                                                <td class="text-center">Mr. Vishnukant Mishra (Animal Keeper)</td>
                                                <td class="text-center">Zoo Keeper training programme on regional basis</td>
                                                <td class="text-center">07 days (04 to 10 March 2019)</td>
                                                <td class="text-center">Shyama Prasad Mukherjee Zoological Garden, Surat (Gujarat)</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">06</th>
                                                <td class="text-center" rowspan="2">Mr. Sanjay Raykhere (Director Zoo)</td>
                                                <td class="text-center" rowspan="2">Middle management officials training programme</td>
                                                <td class="text-center">02 days</td>
                                                <td class="text-center" rowspan="2">CZA, New Delhi</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">(15/03/2019 to 16/03/ 2019)</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="info">
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">क्रमांक</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">चिड़ियाघर कर्मियों का नाम और पदनाम</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">प्रशिक्षण की विषय वस्तु</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">प्रशिक्षण की अवधि</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">उस संस्थान का नाम जहां प्रशिक्षण में भाग लिया</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <!-- On cells (`td` or `th`) -->
                                            <tr class="active">
                                                <th class="text-center" rowspan="3">01</th>
                                                <td class="text-center">Dr. Rajesh Tomar (Veterinary Officer)</td>
                                                <td class="text-center" rowspan="3">Exposure visit to see the rearing and management of new born Lion cubs</td>
                                                <td class="text-center" rowspan="3">02 Days (30/08/2019 to 31/08/2019)</td>
                                                <td class="text-center" rowspan="3">Sakkar Bagh Zoological Park, Junagadh, Gujarat</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Mr. Lokesh Dubey (Animal Keeper)</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Mr. Suraj Yadav ( Asst. Animal Keeoer)</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">02</th>
                                                <td class="text-center" rowspan="2">Dr. Rajesh Tomar (Veterinary Officer)</td>
                                                <td class="text-center" rowspan="2">Finger Print Developing and lifting techniques)</td>
                                                <td class="text-center">01 day</td>
                                                <td class="text-center" rowspan="2">At Bhopal</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">(03/02/2019 to 22 /02/2019)</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="5">03</th>
                                                <td class="text-center">Mr. Sanjay Raykhere (Director Zoo)</td>
                                                <td class="text-center" rowspan="5">Regional Wildlife Rescue Squad Workshop</td>
                                                <td class="text-center" rowspan="5">02 Days (26/09/2019 to 27/09/2019)</td>
                                                <td class="text-center" rowspan="5">Pench Tiger Reserve (Madhya Pradesh)</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Dr. Rajesh Tomar (Veterinary Officer)</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Mr. Kaleem Khan (Rescue squad member)</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Mr. Sitaram Pal (Rescue squad member)</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Mr. Vibhuti Narayan Shukla (Driver, Rescue Squad)</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">04</th>
                                                <td class="text-center" rowspan="2">Dr. Rajesh Tomar (Veterinary Officer)</td>
                                                <td class="text-center" rowspan="2">Interaction programme between wildlife veterinarian and Faulty of SWFH</td>
                                                <td class="text-center">01 day</td>
                                                <td class="text-center" rowspan="2">SWFH, Jabalpur (M.P.)</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">(13/09/2019)</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="2">05</th>
                                                <td class="text-center" rowspan="2">Dr. Rajesh Tomar (Veterinary Officer)</td>
                                                <td class="text-center" rowspan="2">Management of Human elephant Conflict</td>
                                                <td class="text-center">01 day</td>
                                                <td class="text-center" rowspan="2">Sanjay Dubri Tiger Reserve (M.P.)</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">(18/12/2019)</td>
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
    @endif

@endsection
