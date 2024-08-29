<x-layout>
    <x-navbar></x-navbar>

        <div class="row">
            <div class="col-sm-12 col-md-10">
                @if($errors)
                    <div class="alert alert-danger">
                        @foreach ($errors as $error )
                        {{$error}}
                        @endforeach
                    </div>
                @endif


                <form class="row g-3 w-50 m-auto bg-white rounded p-3" action="{{route('matches.update',$data)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-12">
                      <label for="team-home" class="form-label">Team Home</label>
                      <input type="text" class="form-control" id="team-home" name="teamHome" value="{{$data->teamHome}}">
                    </div>

                    <div class="col-12">
                      <label for="team-home-logo" class="form-label">Logo Home</label>
                      <input type="file" class="form-control" id="team-home-logo" name="homeLogo" value="{{$data->teamHomeLogo}}">
                    </div>
                    <div class="col-12">
                        <label for="team-away" class="form-label">Team Away</label>
                          <input type="text" class="form-control" id="team-away" name="teamAway" value="{{$data->teamAway}}">
                        </div>
                    <div class="col-12">
                      <label for="logo-away" class="form-label">Logo Away</label>
                      <input type="file" class="form-control" id="logo-away" name="awayLogo"  value="{{$data->teamHomeLogo}}">
                    </div>
                    <div class="col-md-12">
                      <label for="matchStidume" class="form-label">Stidume</label>
                      <input type="text" class="form-control" id="matchStidume" name="stidume" value="{{$data->stidume}}">
                    </div>
                    <div class="col-sm-12 col-md-12">
                      <label for="match-date" class="form-label">Match date</label>
                      <input type="date" class="form-control" name="date" id="match-date" name="matchDate" value="{{$data->matchTime}}">
                    </div>

                    <div class="col-sm-12 col-md-6">

                            <label class="form-label" for="matchCompitation">
                              Compitation
                            </label>
                            <input class="form-control" type="text" id="matchCompitation"  name="comptition" value="{{$data->compitation}}">

                    </div>
                    <div class="col-sm-12 col-md-6">

                              <label class="form-label" for="matchCompitation">
                                Stage
                              </label>
                          <input class="form-control" type="text" id="matchCompitation"  name="stage" value="{{$data->stage}}">

                      </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Update Match</button>
                    </div>
                  </form>


            </div>
        </div>


</x-layout>
