
<section class="md:w-full bg-black p-3 z-20 fixed">
    {{-- start header  --}}
    <div class="md:flex md:justify-between md:items-center border-gray-800 border-t-0 border-y-2 p-4">
        <div class="logo flex justify-between items-center">

            <span>
                <a href="javascript:void(0);"> <img src="{{asset('assets/img/PassionGeek.png')}}" alt=""></a>
            </span>

            <span class="text-2xl cursor-pointer mx-4 text-rose-800 md:hidden">
                <i class="fas fa-bars togglemenus" onclick="togglemenu(this)"></i>
            </span>
        </div>

        <div>
            <ul class="w-full bg-black text-white md:text-white opacity-0 absolute left-0 px-3 py-5 md:w-auto md:opacity-100 md:flex md:items-center md:pl-0 md:py-0 md:static transition-all duration-500">
                <li class="px-4 mb-3"><a href="javascript:void(0);" class="hover:text-rose-800">Home</a></li>
                <li class="px-4 mb-3"><a href="javascript:void(0);" class="hover:text-rose-800">About</a></li>
                <li class="px-4 mb-3"><a href="javascript:void(0);" class="hover:text-rose-800">Contact</a></li>
                <li class="px-4 mb-3"><a href="javascript:void(0);" class="hover:text-rose-800">Carriers</a></li>
                <li class="px-4 mb-3"><a href="javascript:void(0);" class="hover:text-rose-800">Blog</a></li>
                <li class="px-4 mb-3"><a href="javascript:void(0);" class="hover:text-rose-800">Contact</a></li>
            </ul>
        </div>
    </div>
    {{-- end header  --}}
</section>

<section class="md:w-full bg-black p-3 py-7">
    {{-- start content  --}}
    <div class="p-4 flex items-center">
        <div class="w-2/4">
            {{-- <span class="text-white md:text-[5rem] font-bold uppercase">Simple <span class="text-rose-600">Solution</span> For Complex <span class="text-rose-600">Problem</span></span> --}}
            <span class="text-white md:text-[5rem] font-bold uppercase">
                {{-- Simple <span class="text-rose-600">Solution</span> For Complex <span class="text-rose-600">Problem</span> --}}
                @foreach($firstpages as $firstpage)
                    <span class="text-rose-600">{{$firstpage}}</span>
                @endforeach
            </span>

        </div>
        <div class="w-2/4 flex justify-center items-center">
            <img src="{{asset('assets/img/market.png')}}" class="w-[70%]" alt="">
        </div>
    </div>
    {{-- end content  --}}
</section>



