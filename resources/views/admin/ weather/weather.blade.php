@extends('admin.master')
@section('content')
<div class="container-fluid">
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-lg-8 grid-margin stretch-card">
                    <!--weather card-->
                    <form action="{{ route('weather') }}" method="get">
                        @csrf
                        <select name="cityName" class="js-example-disabled-results form-submit" onclick="this.form.submit()">
                            <option style="display: none" >{{$city}}</option>
                            <option value="hoa binh">hoa binh</option>
                            <option value="lai chau">lai chau</option>
                            <option value="Ho Chi Minh">Ho Chi Minh</option>
                            <option value="phu tho">phu tho</option>
                        </select>
                    </form>
                    <div class="card card-weather">
                        <div class="card-body">
                            <div class="weather-date-location">
                                <h3>Friday</h3>
                                <p class="text-gray"> <span class="weather-date">25 March, 2019</span> <span class="weather-location">Sydney, Australia</span> </p>
                            </div>
                            <div class="weather-data d-flex">
                                <div class="mr-auto">
                                    <h4 class="display-3">{{ $temperature }} <span class="symbol">°</span>C</h4>
                                    <p> {{ $weather }} </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="d-flex weakly-weather">
                                <div class="weakly-weather-item">
                                    <p class="mb-0"> Sun </p> <i class="mdi mdi-weather-cloudy"></i>
                                    <p class="mb-0"> 30° </p>
                                </div>
                                <div class="weakly-weather-item">
                                    <p class="mb-1"> Mon </p> <i class="mdi mdi-weather-hail"></i>
                                    <p class="mb-0"> 31° </p>
                                </div>
                                <div class="weakly-weather-item">
                                    <p class="mb-1"> Tue </p> <i class="mdi mdi-weather-partlycloudy"></i>
                                    <p class="mb-0"> 28° </p>
                                </div>
                                <div class="weakly-weather-item">
                                    <p class="mb-1"> Wed </p> <i class="mdi mdi-weather-pouring"></i>
                                    <p class="mb-0"> 30° </p>
                                </div>
                                <div class="weakly-weather-item">
                                    <p class="mb-1"> Thu </p> <i class="mdi mdi-weather-pouring"></i>
                                    <p class="mb-0"> 29° </p>
                                </div>
                                <div class="weakly-weather-item">
                                    <p class="mb-1"> Fri </p> <i class="mdi mdi-weather-snowy-rainy"></i>
                                    <p class="mb-0"> 31° </p>
                                </div>
                                <div class="weakly-weather-item">
                                    <p class="mb-1"> Sat </p> <i class="mdi mdi-weather-snowy"></i>
                                    <p class="mb-0"> 32° </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        if ()
                    </script>
                    <!--weather card ends-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
