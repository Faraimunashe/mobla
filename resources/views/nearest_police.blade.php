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

<h2>Nearest Police Station:</h2>
    <form id="hospitalForm" method="GET" action="/nearest-police">
        <input type="hidden" name="latitude" id="latitude">
        <input type="hidden" name="longitude" id="longitude">
        <button type="button" class="btn btn-primary" onclick="getCurrentLocation()">Get Current Location</button>
    </form>

    @isset($polices)
        <div class="row">
            @foreach ($polices as $police)
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h4 class="card-title">{{ $police['name'] }}</h4>
                                <strong>Address:</strong> {{ $police['vicinity'] }}<br>
                                <strong>Rating:</strong> {{ $police['rating'] ?? 'N/A' }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endisset
</x-app-layout>

