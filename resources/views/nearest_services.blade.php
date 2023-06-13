<x-app-layout>

    @isset($services)
        <h2>Nearest {{$serviceName}}:</h2>
        <div class="row">
            @foreach ($services as $service)
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h4 class="card-title">{{ $service['name'] }}</h4>
                                @isset($service['vicinity'])
                                    <strong>Address:</strong> {{ $service['vicinity'] }}<br>
                                @endisset
                                <strong>Rating:</strong> {{ $service['rating'] ?? 'N/A' }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if (is_null($services))
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-dark-blue" role="alert">
                        There are no near {{$serviceName}}s in a radius of 10km.
                    </div>
                </div>
            </div>
        @endif
    @endisset
</x-app-layout>

