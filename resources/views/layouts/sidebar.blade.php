
<link href="{{ asset('css/dasbhoard.css') }}" rel="stylesheet">
<div class="sidebar">
        <div class="logo">
            <img src="company_logo.png" alt="Influencer">
        </div>
        <ul class="menu">
            <li class="active">
                <a href="{{ route('dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dasboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('profile.edit') }}" >
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
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" id="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Keluar</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>