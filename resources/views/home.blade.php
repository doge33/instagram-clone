@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/profile.png" alt="" style="width: 10rem" class="rounded-circle" />
        </div>
        <div class="col-9 pt-5" >
            <div><h1>{{$user->username}}</h1></div>
            <div class=" d-flex">
                <div class="pr-4"><strong>153</strong> posts</div>
                <div class="pr-4"><strong>23k</strong> followers</div>
                <div class="pr-4"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">conyrabbit.org</div>
            <div>My name is Cony. I'm a bunny. My best pal is Brown the bear.</div>
            <div><a href="#">www.conyrabbit.org</a></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img class="w-100" src="https://instagram.fykz1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/146186219_100207852085711_8704519049381769281_n.jpg?_nc_ht=instagram.fykz1-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=YIgbPKWrn-0AX_w0ARd&tp=1&oh=971cfbdf36ed91c73992355fc50c99cc&oe=6047CD80" alt="" />
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.fykz1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/145829497_923288355146895_9185979962484277691_n.jpg?_nc_ht=instagram.fykz1-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=-ofxyPEBfBYAX-lw7TR&tp=1&oh=e51c325edd1ce9208882067f760d7690&oe=604622C9" alt=""/>
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.fykz1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/128740156_717794165524969_3202359170685003985_n.jpg?_nc_ht=instagram.fykz1-2.fna.fbcdn.net&_nc_cat=101&_nc_ohc=c2U4J5xjsuYAX-8Sl58&tp=1&oh=96fe45fb58b7ad58de03e797f17cfcb2&oe=6046069E" alt=""/>
        </div>

    </div>
</div>
@endsection
