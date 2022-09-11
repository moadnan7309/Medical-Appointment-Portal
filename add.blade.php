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
                                        <h1>Add Doctor</h1>
                                        <br>
                                        <form action="" method="post">
                                            @csrf
                                            Doctor Name : <input type="text" name="pname" class="form-control">
                                            <br>
                                            Email : <input type="email" name="pemail" class="form-control">
                                            <br>
                                            Password : <input type="password" name="ppass" class="form-control">
                                            <br>
                                            Mobile No. : <input type="text" name="pmobile" class="form-control">
                                            <br>
                                            <input type="submit" value="Add" name="submit">
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
