<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title style="font-family: Lobster">PetGram</title>
        
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
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
        </style>
    </head>
    
    
    
    <body>
        
     
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" style=" font-family: Lobster; font-size: 80px; color: black">
                   <img src="/svg/logo.svg" height="60px" width="60px"> PetGram 
                </div>
                <div> </div>

                <div class="links">
                    
                    <a>Criado por:</a>
                    <a href="https://www.instagram.com/vitor_kogut/">Kogut</a>
                    <a>&</a>
                    <a href="https://www.instagram.com/allan.com2l/">Allan</a>
                </div>
            </div>
        </div>
    </body>
</html>
