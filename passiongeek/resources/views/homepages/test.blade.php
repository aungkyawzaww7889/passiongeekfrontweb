
@extends('layouts.adminindex')
@section('content')

        <!-- Start Page Content Area  -->
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-lg-6">
                    <a href="{{route('homepages.create')}}" class="btn btn-primary btn-sm mb-2">create</a>
                    {{-- <a href="{{route('homepages.edit',$homepage->id)}}" class="btn btn-success btn-sm mb-2">Edit</a> --}}
                    <h1>
                        @foreach($homepages as $idx=>$homepage) 

                            @if($homepage->image)
                                {{$homepage['title']}}
                            @endif 
                           
                        @endforeach
                    </h1>
                </div>
                <div class="col-lg-6 form-group">
                    <form action="{{route('homepages.update',$homepage->id)}}" method="">
                        <div>
                            <label for="image" class="gallery">
                                
                                @if($homepage->image)
                                    <img src="{{$homepage['image']}}" alt="" class="img-thumbnail" />
                                @endif
                            
                            </label>
                        </div>
                        
                        <input type="file" name="image" id="image" class="form-control form-control-sm rounded-0" hidden/>
                        <button>Change</button>
                    </form>
                </div>
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
                width: 400px;
                height: 300px;
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

        

