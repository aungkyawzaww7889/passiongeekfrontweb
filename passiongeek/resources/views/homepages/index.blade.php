
@extends('layouts.adminindex')
@section('content')

        <!-- Start Page Content Area  -->
        <div class="container-fluid">
      
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-12">
                        <a href="{{route('homepages.create')}}" class="btn btn-primary btn-sm rounded-0">Create</a>
                    </div>


                    <div class="col-md-10 mb-2">
                        {{-- <form>
                            <div class="row justify-content-end">
        
                                <div class="col-md-2 col-sm-6 mb-2">
                                   <div class="input-group">
                                        <input type="text" name="filtername" id="filtername" class="form-control form-control-sm rounded-0" placeholder="Search..." />
                                        <button type="submit" id="search-btn" class="btn btn-secondary btn-sm"><i class="fas fa-search"></i></button>
                                   </div>
                                </div>
        
                            </div>
                        </form> --}}
                    </div>

                </div>
            </div>

            <div class="col-md-12">
                <table class="table table-sm table-hover border">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" name="selectalls" id="selectalls" class="form-check-input selectalls" />
                            </th>
                            <th>No</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($homepages as $idx=>$homepage)

                            <tr>
                                <td>
                                    <input type="checkbox" name="singlechecks" class="form-check-input singlechecks" value="{{$homepage->id}}"  />
                                </td>
                                <td>{{++$idx}}</td>
                                <td><a href=""><img src="{{asset($homepage->image)}}" class="rounded-circle me-1 border border-secondary" width="20px" height="20px" alt=""></a></td>
                                {{-- <td>{{$role->user_id}}</td> --}}
                                <td>{{$homepage->title}}</td>
                                <td>{{$homepage->created_at->format('d M Y')}}</td>
                                <td>{{$homepage->updated_at->format('d M Y')}}</td>
                                <td>
                                    <a href="{{route('homepages.edit',$homepage->id)}}" class="text-info"><i class="fas fa-pen"></i></a>
                                    <a href="javascript:void(0);" class="text-danger ms-2 delete-btn" data-idx={{$idx}} ><i class="fas fa-trash-alt"></i></a>

                                    <form id="formdelete-{{$idx}}" action="{{route('homepages.destroy',$homepage->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>

                                </td>
                            </tr>

                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>
        <!-- End Page Content Area  -->


@endsection


@section('css')
@endsection


@section('scripts')

    <script type="text/javascript" >

        $(document).ready(function(){

            //Single Delete

                $('.delete-btn').click(function(){
                    const getidx = $(this).data('idx');
                    // console.log(getidx);

                    if(confirm(`Are you sure! you want to delete ${getidx}`)){

                        $('#formdelete-'+getidx).submit();
                        return true;

                    }else{
                        return false;
                    }
                })

            //Single Delete

            // Bulk Delete 
            $('#selectalls').click(function(){
                $('.singlechecks').prop('checked',$(this).prop('checked'));
            })
            // Bulk Delete 


        });


    </script>

@endsection


        

