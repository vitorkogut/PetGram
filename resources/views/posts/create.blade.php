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
    <form action="/p" enctype="multipart/form-data" method="post">
        
        @csrf
        
        
        
        <div class="offset-2">
            <h1>Novo Post</h1>
        </div>
        
        <div class="row pt-5">
        <div class="col-8 offset-2">
            
            
            
            <div class="form-group row">
                <label for="caption" class="col-md-4 col-form-label ">Descrição</label>

                
                    <input id="caption" 
                           type="text" 
                           name="caption"
                           class="form-control @error('caption') is-invalid @enderror" 
                           value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                        @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        /span>
                        @enderror
                
            </div>
            
            <div class="row">
                <label for="image" class="col-md-4 col-form-label ">Imagem</label>
                <input type="file" class="form-control-file" id="image" name="image">
                
                @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    /span>
                @enderror      
            </div>
            
            <div class="row pt-5">
                <button class="btn btn-primary">Postar</button>
            </div>
            
            
        </div>      
    </div>
        
    </form>
</div>

@endsection
