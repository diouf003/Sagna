@extends('layouts.master')

@section('content')
<h2 style="text-align: left; ">BIENVENUE</h2>
<body class=" antialiased" style="text-align: right;">
        <div class="mt-2 relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center  sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{route('etudiant') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    
                </div>

                

                
            </div>
        </div>
    </body>
@endsection



    

       
