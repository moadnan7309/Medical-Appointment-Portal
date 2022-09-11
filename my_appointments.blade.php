@extends("patient/master")
@section("dynamic")

                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- begin page title -->
                                <div class="">
                                    <div class="page-title">
                                        <h1>Appointment List</h1>
                                        <br>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>Date</td>
                                                <td>Time</td>
                                                <td>Patient Name</td>
                                                <td>Doctor Name</td>
                                                <td>Message</td>
                                            </tr>
                                            @foreach($k as $z)
                                                <tr>
                                                    <td>{{ $z->date }}</td>
                                                    <td>{{ $z->time }}</td>
                                                    <td>{{ $z->patient_name }}</td>
                                                    <td>{{ $z->docter_name }}</td>
                                                    <td>{{ $z->message }}</td>

                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>

                                </div>
                                <!-- end page title -->
                            </div>
                        </div>


                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
@endsection
