<x-app-layout>
    <section>
        <div class="row">
            @foreach ($transports as $bus)
                <div class="col-md-6 mb-3">
                    <a href="#">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">{{$bus->operator}}</h3>
                                <div class="row">
                                    <div class="col-2 text-xl-right">
                                        <img src="{{asset('images')}}/{{$bus->image}}" height="100" width="150" alt="" class="">
                                    </div>
                                    <div class="col-8 ml-5 pl-5">
                                        <div class="row">
                                            <div class="col-4 label "></div>
                                            <div class="col-8"><small><strong>{{$bus->from}} - {{$bus->to}}</strong></small></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 label "></div>
                                            <div class="col-8"><small><b>Departure:</b> {{$bus->departure}}</small></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 label "></div>
                                            <div class="col-8"><small> <b> Attendant:</b> {{$bus->phone}}</small></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 label "></div>
                                            <div class="col-8"><small> <b> Capacity:</b> {{$bus->capacity}}</small></div>
                                        </div>
                                    </div>
                                    <div class="col-2">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
</x-app-layout>
