<x-app-layout>
    <section>
        <div class="row">
            <div class="col-md-6 mb-3">
                <a href="{{route('user-places')}}">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2 text-xl-right">
                                    <x-icon name="map-pin" solid />
                                </div>
                                <div class="col-8">
                                    <h3 class="card-title">
                                        DISCOVER PLACES
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-3">
                <a href="{{route('user-transport')}}">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2 text-xl-right">
                                    <x-icon name="rectangle-group" solid />
                                </div>
                                <div class="col-8">
                                    <h3 class="card-title">
                                        CHECK TRANSPORT
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-3">
                <a href="{{route('user-emergency')}}">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2 text-xl-right">
                                    <x-icon name="exclamation-triangle" solid />
                                </div>
                                <div class="col-8">
                                    <h3 class="card-title">
                                        EMERGENCY SERVICES
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-3">
                <a href="">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2 text-xl-right">
                                    <x-icon name="share" solid />
                                </div>
                                <div class="col-8">
                                    <h3 class="card-title">
                                        SHARE PLACES
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
