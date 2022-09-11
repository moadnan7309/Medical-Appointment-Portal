
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
                                        <form action="" method="post">
                                            @csrf

                                            Patient Name:
                                           <select name="pname" id="" class="form-control">
                                               <option value="#">-- Select Patient --</option>
                                               @foreach($patient as $z)
                                                    <option value="{{ $z->name }}">{{ $z->name }}</option>
                                               @endforeach
                                           </select>
                                           <br>

                                           Doctor Name:
                                           <select name="dname" id="" class="form-control">
                                               <option value="#">-- Select Doctor --</option>
                                               @foreach($doctor as $z)
                                                    <option value="{{ $z->name }}">{{ $z->name }}</option>
                                               @endforeach
                                           </select>
                                           <br>
                                            Mobile:
                                            <input type="mobile" name="mobile"  class="form-control"><br>
                                            Date:
                                            <input type="date" name="date"  class="form-control"><br>
                                            Time:
                                            <input type="time" name="time" class="form-control"><br>
                                            Message:
                                            <textarea name="message" id="" cols="30" rows="5" class="form-control">
                                            </textarea><br>
                                            <input type="submit" value="Book">
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


