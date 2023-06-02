<x-app-layout>
    <section>
        <div class="row">
            <div class="col-md-12">
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <form action="{{route('user-add-places')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="address_address">Address</label>
                <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
                <input type="hidden" name="address_longitude" id="address-longitude" value="0" />

                <input type="hidden" name="lat" id="lat" value="" />
                <input type="hidden" name="lon" id="lon" value="" />
                <div class="row">
                    <div class="col-9 outline-1">
                        <input type="text" id="address-input" name="address_address" class="form-control map-input" required>
                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary">
                            <x-icon name="map-pin" solid />
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <div id="address-map-container" style="width:100%;height:400px; " class="mt-2">
            <div style="width: 100%; height: 100%" id="address-map"></div>
        </div>
        <script>
            let latitu = document.getElementById('address-latitude').value;
            let latinput = document.getElementById('lat');

            let longitu = document.getElementById('address-longitude').value;
            let longinput = document.getElementById('lon');
            if(latitu !== 0)
            {
                latinput.value = latitu;
                longinput.value = longitu;
            }

        </script>

    </section>
</x-app-layout>
