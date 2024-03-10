
    <link href="{{ asset('css/dasbhoard.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    @include('layouts.sidebar')

    <div class="main-content">
    @include('layouts.navigasidasbh')

        <!-- Content below the dashboard -->
        <div class="dashboard-content">
            <h2>Your Dashboard Content Goes Here</h2>
            <p>This is where you can add various widgets, charts, or other elements for your dashboard.</p>
        </div>
    </div>
