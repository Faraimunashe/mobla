<x-app-layout>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQh7KTeGZ23hjCfYKv_-GCCMit31Fu1xw&libraries=places"></script>
    <script>
        function getCurrentLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert('Geolocation is not supported by this browser.');
            }
        }

        function showPosition(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            document.getElementById('latitude').value = latitude;
            document.getElementById('longitude').value = longitude;

            document.getElementById('hospitalForm').submit();
        }
    </script>

<h2>Nearest Airport:</h2>
    <form id="hospitalForm" method="GET" action="/nearest-airport">
        <input type="hidden" name="latitude" id="latitude">
        <input type="hidden" name="longitude" id="longitude">
        <button type="button" class="btn btn-primary" onclick="getCurrentLocation()">Get Current Location</button>
    </form>

    @isset($airports)
        <div class="row">
            @foreach ($airports as $airport)
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h4 class="card-title">{{ $airport['name'] }}</h4>
                                <strong>Address:</strong> {{ $airport['vicinity'] }}<br>
                                <strong>Rating:</strong> {{ $airport['rating'] ?? 'N/A' }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endisset
</x-app-layout>

