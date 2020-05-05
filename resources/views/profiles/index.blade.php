@extends('layouts.app')


<style>
            fade{
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;

                background: linear-gradient(135deg, #61a1a1, #aaaaaa);
                margin: 0;
                background-size: 400% 400%;
                animation: BackgroundGradient 10s ease infinite;

            }


            @keyframes BackgroundGradient{
                0%{background-position: 0% 50%;}
                50%{background-position: 100% 50%;}
                100%{background-position: 0% 50%;}
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .caixa_texto{
                padding: 15px;
                background: lightblue;
                background-clip: border-box;
            }

        </style>





@section('content')

<div class="container">
    <div class="row">
            <img src="https://www.petlove.com.br/dicas/wp-content/uploads/2020/01/Gato_chorando-1280x720.jpg" class="rounded-circle" style="width: 250px; height: 250px">

            <div class="pt-1 pl-4">
                <div class="d-flex justify-content-between align-baseline">
                    <a style="font-size: 40"> <strong> {{$user->username}}</strong></a>
                    <a href="/p/create">Post Novo</a>
                </div>
                <h3 class="pt-4"> <strong>Dono: </strong> {{ $user->username }}</h3>
                <h4 style="font-size: 20px">Seguidores: <strong>0</strong></h4>
                <h4 style="font-size: 20px">Seguindo: <strong>0</strong></h4>
                <h4 style="font-size: 20px">Posts: <strong> {{$user->posts->count()}} </strong></h4>

            </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class="rounded w-100">
                </a>
            </div>
        @endforeach



    </div>


</div>

@endsection
