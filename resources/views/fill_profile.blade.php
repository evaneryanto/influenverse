<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <form method="POST" action="{{ route('fill_profile') }}">
            @csrf
            <label for="birth_date">Birth Date:</label><br>
            <input type="date" id="birth_date" name="birth_date" @if(!is_null($influencer)) value="{{ $influencer->birth_date }}" @endif required><br>
            <label for="is_married">Married status:</label><br>
            <select id="is_married" name="is_married" required><br>
                @if (!is_null($influencer))
                <option selected value="{{ $influencer->is_married }}">{{$influencer->is_married ? 'Married' : 'Not Married'}}</option>
                <option value="1">Married</option>
                <option value="0">Not Married</option>
                @else
                <option selected>Select Married Status</option>
                <option value="1">Married</option>
                <option value="0">Not Married</option>
                @endif
            </select>
            <label for="phone_number">Phone number:</label><br>
            <input type="text" id="phone_number" name="phone_number" required @if(!is_null($influencer)) value="{{ $influencer->phone_number }}" @endif><br>
            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address" required @if(!is_null($influencer)) value="{{ $influencer->address }}" @endif><br>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required><br>
                @if (!is_null($influencer))
                <option selected value="{{ $influencer->gender }}">{{$influencer->gender}}</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                @else
                <option selected>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                @endif
            </select>
            <label for="province_id">Province:</label>
            <select id="province" name="province_id" required><br>
                <option selected>Select Province</option>
                @foreach ($provinces as $province)
                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                @endforeach
            </select>
            <label for="about_me">About me:</label>
            <textarea id="about_me" name="about_me" rows="4" cols="50" @if(!is_null($influencer)) value="{{ $influencer->about_me }}" @endif></textarea><br>
            <input hidden value="{{ $user_id}}" for="user_id" name="user_id">
            <button type="submit" class="btn btn-primary">submit</button>
        </form>
        <img @if(!is_null($influencer)) src="{{ asset($influencer->profile_picture_path) }}" @endif alt="Image">
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    console.log("hello");
    $('#province').on('change', function () {
                var province_id = this.value;
                console.log(province_id);
                $("#city").html('');
                $.ajax({
                    url: "{{ route('fetchCities') }}",
                    type: "POST",
                    data: {
                        province_id: province_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        console.log(result);
                        $('#city').html('<option selected>Select City</option>');
                        $.each(result.cities, function (key, value) {
                            $("#city").append('<option value="' + value
                                .city_id + '">' + value.city_name + '</option>');
                        });
                    },
                    error: function(error) {
                    console.log(error);
                  }
                });
            });
  
</script> --}}
</body>
</html>

    



