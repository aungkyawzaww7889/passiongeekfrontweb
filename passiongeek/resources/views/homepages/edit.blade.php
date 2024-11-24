@extends('layouts.adminindex')
@section('content')

        <!-- Start Page Content Area  -->
        <div class="container-fluid">
            <div class="col-md-12">

                <form action="{{route('homepages.update',$homepages->id)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{-- @csrf  --}}
                    @method("PUT")

                    <div class="row align-items-end">

                        <div class="col-md-3 form-group">

                            <div>
                                <label for="image" class="gallery">
                                    @if($homepages->image)
                                        <img src="{{asset($homepages->image)}}" alt="" class="img-thumbnail mb-2" width="100" height="100" />
                                    @else
                                        <span>Input Image</span>
                                    @endif
    
                                </label>
                            </div>

                            <input type="file" name="image" id="image" class="form-control form-control-sm rounded-0" hidden/>


                        </div>


                        <div class="col-md-3 form-group">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            {{-- <input type="text" name="name" id="name" class="form-control form-control-sm rounded-0" placeholder="Enter Role Name" value="{{$role->name}}"/> --}}
                            <input type="text" name="title" id="title" class="form-control form-control-sm rounded-0" placeholder="Enter Title Name" value="{{old('name',$homepages->title)}}"/>
                        </div>

                        

                        <div class="col-md-3">
                            <a href="{{route('homepages.index')}}" class="btn btn-secondary btn-sm rounded-0">Cancel</a>
                            
                            {{-- <button type="reset" class="btn btn-secondary btn-sm rounded-0">Cancel</button> --}}
                            <button type="submit" class="btn btn-primary btn-sm rounded-0 ms-3">Submit</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>
        <!-- End Page Content Area  -->


@endsection


@section('css')

        <style type="text/css">
    
            .gallery{
                width: 100%;
                background-color: #eee;
                color: #aaa;

                text-align: center;
                padding: 10px;
                cursor: pointer;
            }

            .gallery.removetext span{
                display: none;
            }


            .gallery img{
                width: 100px;
                height: 100px;
                border: 2px dashed #aaa;
                border-radius: 10px;
                object-fit: cover;

                padding: 5px;
                margin: 0 5px;  
            }

        
        </style>

@endsection


@section('scripts')

    <script type="text/javascript" >

        $(document).ready(function(){

            // Start Single Profile Preview

                let previewimages = function(input,output){

                    // console.log(input,output);


                    if(input.files){

                        let totalfiles = input.files.length;
                        // console.log(totalfiles);

                        if(totalfiles > 0){
                            $(output).addClass('removetext');
                        }else{
                            $(output).removeClass('removetext');
                        }


                        for(let x=0; x<totalfiles; x++){
                            // console.log(x);

                            let filereader = new FileReader();
                            filereader.readAsDataURL(input.files[x]);

                            filereader.onload = function(e){
                                $(output).html("");
                                $($.parseHTML("<img>")).attr("src",e.target.result).appendTo(output);
                            }

                        }

                        
                    }

                }


                $('#image').change(function(){
                    previewimages(this,"label.gallery");
                });


            });

        // Start Single Profile Preview



    </script>

@endsection


        

