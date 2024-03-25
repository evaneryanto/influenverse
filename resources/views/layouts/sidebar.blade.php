
<link href="{{ asset('css/dasbhoard.css') }}" rel="stylesheet">
<div class="sidebar">
        <div class="logo">
            <img src="company_logo.png" alt="Influencer">
        </div>
        <ul class="menu">
            <li class="{{ Request::routeIs('influencer.dashboard') ? 'active' : '' }}">
                <a href="{{ route('influencer.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dasboard</span>
                </a>
            </li>
            <li class="{{ Request::routeIs('influencer.profile.edit') ? 'active' : '' }}">
                <a href="{{ route('influencer.profile.edit') }}" >
                <i class="fas fa-user"></i>
                <span>Profile</span>
                </a>
            </li>
                
            <li>
                <a href="#">
                    <i class="fa-solid fa-file"></i>
                    <span>My Project</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-search"></i>
                    <span>Find Project</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-dollar-sign"></i>
                    <span>Balance</span>
                </a>
            </li>
            <li class="keluar">
                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                    @csrf
                    <a onclick="document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Keluar</span>
                    </a>
    
                </form>
            </li>
        </ul>
    </div>