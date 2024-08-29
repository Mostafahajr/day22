
<x-layout>
    <x-navbar></x-navbar>
    <div class="container-fluid p-5 ">

        <div class="header d-flex justify-content-around align-items-center my-5">
            <h3>Matches</h3>
            <a href="{{route('matches.create')}}">
                <button class="btn btn-primary">Add Match</button>
            </a>

        </div>

        <table class="table table-striped w-75 m-auto text-center">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Home</th>
                <th scope="col">Away</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($matches as $match )
                <tr>
                    <th scope="row">{{$match->id}}</th>
                    <td>{{$match->teamHome}}</td>
                    <td>{{$match->teamAway}}</td>
                    <td class="d-flex justify-content-center align-items-center">
                        <form action="{{route('matches.destroy',$match->id)}}" method="post" class="mx-3">
                            @csrf
                            @method("delete")
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>

                        <a href="{{route('matches.edit',$match)}}" class="mx-3">
                            <button class="btn btn-warning">Update</button>
                        </a>
                        <a href="{{route('matches.show',$match->id)}}">
                            <button class="btn btn-primary">view</button>
                        </a>
                    </td>
                </tr>
                @endforeach


            </tbody>
          </table>


    </div>
    </x-layout>

