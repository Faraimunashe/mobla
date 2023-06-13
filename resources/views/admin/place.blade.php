<x-app-layout>
    <div class="row mt-4">
        <div class="col-md-12 mb-3">
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('error')}}
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
        </div>
            <div class="col-12">
                <div class="card mb-4 ">
                    <div class="d-flex">
                        <div class="icon icon-shape icon-lg bg-gradient-success shadow text-center border-radius-xl mt-n3 ms-4">
                            <i class="fa fa-map opacity-10" aria-hidden="true"></i>
                        </div>
                        <h4 class="mt-3 mb-2 ms-3 ">{{$place->address}}</h4>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <h5 class="card-title">Activities</h5>
                                <ul class="list-group list-group-flush">
                                    @foreach ($activities as $activity)
                                        <li class="list-group-item">{{$activity->name}}</li>
                                    @endforeach
                                    @if ($activities->isEmpty())
                                        <span class="badge bg-secondary">No activities found!</span>
                                    @endif
                                </ul>
                            </div>
                            <div class="col-12 mb-3">
                                <h5 class="card-title">Transport Services</h5>
                                <div class="list-group">
                                    @foreach ($transports as $transport)
                                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">{{$transport->service}}</h5>
                                                <small>capacity: {{$transport->capacity}}</small>
                                            </div>
                                            <p class="mb-1">Travels to {{$transport->destination}}</p>
                                            <small>{{$transport->departure}}</small>
                                        </a>
                                    @endforeach
                                    @if ($transports->isEmpty())
                                        <span class="badge bg-secondary">No transport services found!</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <form action="{{route('nearest-service')}}" method="post" class="col-3">
                                @csrf
                                <input type="hidden" name="place_id" value="{{$place->id}}" required>
                                <input type="hidden" name="service" value="hospital" required>
                                <button type="submit" class="btn btn-secondary">Hospitals</button>
                            </form>
                            <form action="{{route('nearest-service')}}" method="post" class="col-3">
                                @csrf
                                <input type="hidden" name="place_id" value="{{$place->id}}" required>
                                <input type="hidden" name="service" value="police" required>
                                <button type="submit" class="btn btn-secondary">Police</button>
                            </form>
                            <form action="{{route('nearest-service')}}" method="post" class="col-3">
                                @csrf
                                <input type="hidden" name="place_id" value="{{$place->id}}" required>
                                <input type="hidden" name="service" value="airport" required>
                                <button type="submit" class="btn btn-secondary">Airport</button>
                            </form>
                            <form action="{{route('nearest-service')}}" method="post" class="col-3">
                                @csrf
                                <input type="hidden" name="place_id" value="{{$place->id}}" required>
                                <input type="hidden" name="service" value="railway" required>
                                <button type="submit" class="btn btn-secondary">Railway</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</x-app-layout>
