<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    @include('layouts.sidebar')

     <div class="main-content">
     @include('layouts.navigasidasbh')
 
        
        <!-- Content below the dashboard -->
    <div class="Content"> 
        <div class="container">
        <div class="profile-container">
            <div class="profile-header">
                <img src="https://cdn-icons-png.freepik.com/512/3135/3135715.png" alt="Avatar">
            
            </div>
            <div class="profile-username">
                <h1>{{'@'.$user['username']}}</h1>
                <p>{{$user['role']}}</p>
                <p>Member since {{$user['year_created']}}</p>
            </div>
            <div class="profile-bio">
                <h1>About me</h1>
                <p>Ullamco veniam culpa excepteur id duis aliquip
                enim esse veniam, Phasellus venenatis arim
                purus, nec tempor leo ultrices ut</p>
            </div>
            <div class="profile-actions">
                <h2>Profile Link</h2>
                <a href="">https://www.influenverse.com/{{'@'.$user['username']}}</a>
            </div>
        </div>
        <div class="bar-container">
        <ul class="bar-list">
            <li class="bar-item"><a href="#">Bio</a></li>
            <li class="bar-item"><a href="#">Portofolio</a></li>
            <li class="bar-item active"><a href="#">Rate Card</a></li>
            <li class="bar-item"><a href="#">Review</a></li>
        </ul>
        <ul class="bar-list">
            <li class="bar-item active"><a href="#">Instagram</a></li>
            <li class="bar-item"><a href="#">Tiktok</a></li>
            <li class="bar-item"><a href="#">Youtube</a></li>
            <li class="bar-item"><a href="#">Other</a></li>
        </ul>
        <div class="bar-container-ig">
      
        <ul class="bar-list">
            <li class="bar-item-ig"><a href="#"><img src="logo.png" alt="">Instagram Video Post</Video></a>
            <p>IDR.123.456/Content</p></li>
            <li class="bar-item-ig"><a href="#">Instagram Story</a>
            <p>IDR.123.456/Content</p></li>
        </ul>
        <ul class="bar-list">
            <li class="bar-item-ig"><a href="#">Instagram Post</a>
            <p>IDR.123.456/Content</p></li>
            <li class="bar-item-ig"><a href="#">Add New Rate Card</a>
            </li>
        </ul>
        
    </div>
    </div> 
    </div>
        </div> 
   
    </div>
    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    {{-- @include('profile.partials.update-profile-information-form') --}}
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    {{-- @include('profile.partials.update-password-form') --}}
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div> -->

