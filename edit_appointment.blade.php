
@extends("admin/master")
@section("dynamic")

                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 ">
                                <!-- begin page title -->
                                <div class="d-block ">
                                    <div class="page-title ">
                                        <h1>Book Appointment</h1>
                                        <br>
                                        <form action="{{ asset('admin/appointment/update') }}" method="post">
                                            @csrf

                                            Patient Name:
                                            <input type="text" name="pname" value="{{ $k->patient_name }}" class="form-control">
                                           <br>

                                           Doctor Name:
                                           <input type="text" name="dname" value="{{ $k->docter_name }}" class="form-control">

                                           <br>

                                           Patient Mobile No.:
                                           <input type="text" name="mobile" value="{{ $k->mobile }}" class="form-control">

                                           <br>

                                            Date:
                                            <input type="text" name="date"  class="form-control" value="{{ $k->date }}"><br>
                                            Time:
                                            <input type="text" name="time" class="form-control" value="{{ $k->time }}"><br>
                                            Message:
                                           <input type="text" name="message" class="form-control" value="{{ $k->message }}">
                                            </textarea><br>

                                            <input type="hidden" name="id" value="{{ $k->id }}">
                                            <input type="submit" value="Update Appointment">
                                        </form>

                                        @if(isset($msg))
                                            {{ $msg }}
                                        @endif
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


