<x-layout>
    <x-navbar></x-navbar>
    <div class="row">
        <div class="col-sm-12 col-md-10">
            @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error )

                    <li>{{$error}}</li>
                    @endforeach
                  </ul>

                </div>
            @endif




            <form class="row g-3 w-50 m-auto bg-white rounded p-3" action="{{route('matches.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                  <label for="team-home" class="form-label">Team Home</label>
                  <input type="text" class="form-control" id="team-home" name="teamHome">
                </div>

                <div class="col-12">
                  <label for="team-home-logo" class="form-label">Logo Home</label>
                  <input type="file" class="form-control" id="team-home-logo" name="homeLogo" >
                </div>
                <div class="col-12">
                    <label for="team-away" class="form-label">Team Away</label>
                      <input type="text" class="form-control" id="team-away" name="teamAway" >
                    </div>
                <div class="col-12">
                  <label for="logo-away" class="form-label">Logo Away</label>
                  <input type="file" class="form-control" id="logo-away" name="awayLogo">
                </div>
                <div class="col-md-12">
                  <label for="matchStidume" class="form-label">Stidume</label>
                  <input type="text" class="form-control" id="matchStidume" name="stidume">
                </div>
                <div class="col-sm-12 col-md-12">
                  <label for="match-date" class="form-label">Match date</label>
                  <input type="date" class="form-control" name="date" id="match-date" name="matchDate" >
                </div>

                <div class="col-sm-12 col-md-6">

                        <label class="form-label" for="matchCompitation">
                          Compitation
                        </label>
                        <input class="form-control" type="text" id="matchCompitation"  name="comptition" >

                </div>
                <div class="col-sm-12 col-md-6">

                          <label class="form-label" for="matchCompitation">
                            Stage
                          </label>
                      <input class="form-co ntrol" type="text" id="matchCompitation"  name="stage" >

                  </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Add Match</button>
                </div>
              </form>


        </div>
    </div>
   </x-layout>
