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
        <form action="{{route('user-dashboard')}}" method="POST">
            @csrf
            <div class="col-12 mb-3 m-2">
                <div class="input-group input-group-outline my-3 row">
                    <input type="text" name="search" class="form-control col-8" placeholder="Search place" required>
                    <button class="btn btn-primary ml-2 col-3" type="submit">Search</button>
                </div>
            </div>
        </form>
        @foreach ($places as $place)
            <div class="col-12" id="yyy">
                <div class="card mb-4 ">
                    <div class="d-flex">
                        <div class="icon icon-shape icon-lg bg-gradient-success shadow text-center border-radius-xl mt-n3 ms-4">
                            <i class="fa fa-map opacity-10" aria-hidden="true"></i>
                        </div>
                        <h4 class="mt-3 mb-2 ms-3 ">{{$place->address}}</h4>

                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8"></div>
                            <div class="col-4">
                                <a href="{{route('user-place',$place->id)}}" class="btn btn-dark btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a class="btn btn-success btn-sm"  href="https://api.whatsapp.com/send?text={{ urlencode($place->address) }} {{ urlencode($place->id) }}">
                                    <i class="fa fa-share-alt"></i>
                                </a>
                                <a class="btn btn-primary btn-sm" href="https://www.google.com/maps/search/?api=1&query={{ $place->lat }},{{ $place->lon }}">
                                    <i class="fa fa-map"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
