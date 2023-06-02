<x-app-layout>
    <section>
        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="card card-primary">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Hospital Services</h4>
                        </div>
                    </div>
                    {{-- <div class="card-heading">
                      <h3 class="card-title">Panel title</h3>
                    </div> --}}
                    <div class="card-body">
                      <a href="{{route('user-hospital')}}">List Nearest</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="card card-primary">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-secondary shadow-secondary border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Police Station</h4>
                        </div>
                    </div>
                    {{-- <div class="card-heading">
                      <h3 class="card-title">Panel title</h3>
                    </div> --}}
                    <div class="card-body">
                        <a href="{{route('user-police')}}">List Nearest</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="card card-primary">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Airport Services</h4>
                        </div>
                    </div>
                    {{-- <div class="card-heading">
                      <h3 class="card-title">Panel title</h3>
                    </div> --}}
                    <div class="card-body">
                        <a href="{{route('user-airport')}}">List Nearest</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="card card-primary">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-danger shadow-danger border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Railway Services</h4>
                        </div>
                    </div>
                    {{-- <div class="card-heading">
                      <h3 class="card-title">Panel title</h3>
                    </div> --}}
                    <div class="card-body">
                        <a href="{{route('user-railway')}}">List Nearest</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
