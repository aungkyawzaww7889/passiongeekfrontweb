
@extends('layouts.adminindex')
@section('content')

        <!-- Start Page Content Area  -->
        <div class="container-fluid">
            <div class="col-md-12">

                <form action="{{route('homepages.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{-- @csrf  --}}
                    <div class="row align-items-end">

                        <div class="col-md-3 form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control form-control-sm rounded-0"/>
                        </div>


                        <div class="col-md-3 form-group">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" class="form-control form-control-sm rounded-0" placeholder="Enter Title Name" />
                        </div>

                        <div class="col-md-3 form-group">
                           
                        </div>

                        <div class="col-md-3">
                            <a href="{{route('homepages.index')}}" class="btn btn-secondary btn-sm rounded-0">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-sm rounded-0 ms-3">Submit</button>
                        </div>

                    </div>
                </form>

            </div>

        </div>
        <!-- End Page Content Area  -->


@endsection


@section('css')
@endsection


@section('scripts')

    <script type="text/javascript" >

        $(document).ready(function(){


        });


    </script>

@endsection


        

