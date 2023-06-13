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
        <div class="col-12 mb-3">
            <a href="{{route('admin-places')}}" class="btn btn-primary" style="float: right;">Add Place</a>
        </div>
        @foreach ($places as $place)
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
                            <div class="col-6"></div>
                            <div class="col-6">
                                <a href="{{route('admin-place',$place->id)}}" class="btn btn-dark btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <button class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#addActivity{{$place->id}}">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button class="btn btn-success btn-sm"  data-bs-toggle="modal" data-bs-target="#transportModal{{$place->id}}">
                                    <i class="fa fa-plus"></i>
                                </button>
                                <button class="btn btn-danger btn-sm"  data-bs-toggle="modal" data-bs-target="#deleteModal{{$place->id}}">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="transportModal{{$place->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form role="form" class="text-start" action="{{route('admin-add-transport')}}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Transport Service</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="place_id" value="{{$place->id}}" required>
                                <div class="input-group input-group-outline m-3 pr-3">
                                    <select name="mode" class="form-control" required>
                                        <option selected disabled>Select Mode Of Transport</option>
                                        <option value="Cab">Cab</option>
                                        <option value="Commuter Omnibus">Commuter Omnibus</option>
                                        <option value="Bus">Bus</option>
                                        <option value="Train">Train</option>
                                        <option value="Airplane">Airplane</option>
                                    </select>
                                </div>
                                <div class="input-group input-group-outline m-3 pr-3">
                                    <label class="form-label">Name:</label>
                                    <input type="text" name="service" class="form-control" required>
                                </div>
                                <div class="input-group input-group-outline m-3 pr-3">
                                    <label class="form-label">Destination:</label>
                                    <input type="text" name="destination" class="form-control" required>
                                </div>
                                <div class="input-group input-group-outline m-3 pr-3">
                                    <label class="form-label">Departure:</label>
                                    <input type="time" name="departure" class="form-control" required>
                                </div>
                                <div class="input-group input-group-outline m-3 pr-3">
                                    <label class="form-label">Capacity:</label>
                                    <input type="number" name="capacity" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn bg-gradient-dark mb-0" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn bg-gradient-success mb-0">Save service</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="addActivity{{$place->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form role="form" class="text-start" action="{{route('admin-add-activity')}}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Activity To Place</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="place_id" value="{{$place->id}}" required>

                                <div class="input-group input-group-outline m-3 pr-3">
                                    <label class="form-label">Name:</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn bg-gradient-dark mb-0" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn bg-gradient-success mb-0">Save activity</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="deleteModal{{$place->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form role="form" class="text-start" action="{{route('admin-delete-place')}}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete Place</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="place_id" value="{{$place->id}}" required>
                                <p>
                                    You are about to delete {{$place->address}} from places, are you sure
                                    you want to delete?
                                </p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn bg-gradient-dark mb-0" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn bg-gradient-danger mb-0">Yes delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
