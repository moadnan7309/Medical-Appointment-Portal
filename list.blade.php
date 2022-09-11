@extends("admin/master")
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
                                        <h1>Doctor List</h1>
                                        <br>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>Doctor Name</td>
                                                <td>Email</td>
                                                <td>Mobile</td>
                                                <td></td>
                                            </tr>
                                            @foreach($k as $z)
                                                <tr>
                                                    <td>{{ $z->name }}</td>
                                                    <td>{{ $z->email }}</td>
                                                    <td>{{ $z->mobile }}</td>
                                                    <td>
                                                        <a href="#" class="btn btn-danger">Delete</a>
                                                    </td>
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
