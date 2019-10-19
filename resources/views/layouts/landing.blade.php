@include('inc.head')
    <div id="app" class="container-fluid">
        <!-- left side landing page -->
        <div class="row pad-0">
            <div class="col-6 bg-blue">

            </div>
            <!-- right side landing page  -->
            <div class="col-6 landing-form">
                <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/layouts/app') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
            

        </div>
        
    </div>
@include('inc.foot')
