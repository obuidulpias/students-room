<html>
<nav>
    <label class="logo">Northsouth.edu</label>
    <ul>

        <li><a class="active" href="{{ Route('main-content') }}">HOME</a></li>



        <li><a href="{{ Route('rds-content') }}">RDS</a></li>

        <li><a href="{{ route('student-info') }}">STUDENT INFO</a></li>
        <li><a href="{{ Route('id-card') }}">DIGITAL ID</a></li>




        <li><a >CLASSESS
                <i class="fas fa-caret-down"></i>
            </a>
            <ul>
                <li><a href="#">Class 1</a></li>

            </ul>
        </li>



        @if(Session::get('studentId'))
            <li><a href="#" onclick="document.getElementById('studentLogoutForm').submit();">LOGOUT</a></li>
            {{ Form::open(['route'=>'student-logout', 'method'=>'post', 'id'=>'studentLogoutForm']) }}
            {{ Form::close() }}
        @endif

    </ul>
</nav>
</html>




