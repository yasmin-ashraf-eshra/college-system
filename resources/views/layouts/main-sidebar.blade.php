<div class="wrapper">
    <div class="sidebar">
                <div class="user-info">
                    <img alt="user-img" class="img" src="{{URL::asset('imgs/Grey person.png')}}"><span class="avatar-status profile-status bg-green"></span>
                </div>
        @if (Illuminate\Support\Facades\Auth::check() && Illuminate\Support\Facades\Auth::user()->role)
            <ul>
                <li><a href="{{ url('/' . $page='dashboard') }}">Home</a></li>
                <li><a href="{{ url('/' . $page='user') }}">Students</a></li>
                <li><a href="{{ url('/' . $page='user/create') }}">Create Student</a></li>    
            </ul>
        @endif
        @if (Illuminate\Support\Facades\Auth::check() && !Illuminate\Support\Facades\Auth::user()->role)
            <ul>
                <li><a href="{{ url('/' . $page='dashboard') }}">Home</a></li>
                <li><a href="{{ url('user/' . $page =Illuminate\Support\Facades\Auth::user()->id) }}">Information</a></li>    
            </ul>    
        @endif
    </div>
</div>
