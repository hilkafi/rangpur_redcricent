<!-- need to remove -->

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-university"></i>
        <p>
        Unit/Upazila Team
        <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" style="display: none;">
        @foreach(upazilas() as $key => $value )
        <li class="nav-item">
            <a href="{{url('controll_panel/upazila_volunteers/'.$key)}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>{{$value}}</p>
            </a>
        </li>
        @endforeach
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>
        Members
        <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
            <a href="{{url('controll_panel/executive-committee/')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Executive Committe</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('controll_panel/life-member/')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Life Member</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('controll_panel/youth-executive/')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Youth Executive Comt.</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('controll_panel/rcy_volunteers/')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>RCY Volunteer</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="{{ url('controll_panel/volunteer') }}" class="nav-link">
        <i class="nav-icon fas fa-hands-helping"></i>
        <p>Volunteers</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('controll_panel/slider') }}" class="nav-link">
        <i class="nav-icon fas fa-images"></i>
        <p>Slider</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('controll_panel/blog') }}" class="nav-link">
        <i class="nav-icon fas fa-blog"></i>
        <p>Blog</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('controll_panel/project') }}" class="nav-link">
        <i class="nav-icon fas fa-project-diagram"></i>
        <p>Project</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('controll_panel/office-staff') }}" class="nav-link">
        <i class="nav-icon fas fa-address-book"></i>
        <p>OfficeStaffs</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('controll_panel/page') }}" class="nav-link">
        <i class="nav-icon fas fa-file-alt"></i>
        <p>Page</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('controll_panel/speech') }}" class="nav-link">
        <i class="nav-icon fas fa-comment-dots"></i>
        <p>Speech</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('controll_panel/donate_us') }}" class="nav-link">
        <i class="nav-icon fas fa-plus"></i>
        <p>Donate Us</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ url('controll_panel/donate_get_blood') }}" class="nav-link">
        <i class="nav-icon fas fa-plus"></i>
        <p>Donate/Get Blood</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ url('controll_panel/messages') }}" class="nav-link">
        <i class="nav-icon fas fa-envelope-open-text"></i>
        <p>Messages</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('controll_panel/category') }}" class="nav-link">
        <i class="nav-icon fas fa-align-left"></i>
        <p>Category</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ url('controll_panel/sub-category') }}" class="nav-link">
        <i class="nav-icon fas fa-align-center"></i>
        <p>Sub-Category</p>
    </a>
</li>