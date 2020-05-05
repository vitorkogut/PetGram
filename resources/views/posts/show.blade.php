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
    <img src="/storage/{{$post->image}}">
   
</div>

@endsection
