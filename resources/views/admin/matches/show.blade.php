<x-layout>
    <x-navbar></x-navbar>

    <div class="container">
        <div class="card mb-3">
            <div class="card-body d-flex justify-content-around align-items-center">
                <div class="homeHeader">
                    <img src="{{url('/')}}/uploads/{{$game->teamHomeLogo}}" alt="">
                    <h3>{{$game->teamHome}}</h3>
                </div>
                <div class="content">
                    <div class="cup d-flex justify-content-around align-items-center">
                        <p>{{$game->compitation}}</p>
                        <p>{{$game->stage}}</p>
                    </div>
                    <p>{{$game->stidum}}</p>
                    <p>{{$game->matchTime}}</p>
                </div>
                <div class="homeHeader">
                    <img src="{{url('/')}}/uploads/{{$game->teamAwayLogo}}" alt="">
                    <h3>{{$game->teamAway}}</h3>
                </div>

            </div>
          </div>
    </div>

</x-layout>
