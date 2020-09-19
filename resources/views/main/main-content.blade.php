<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Home page</title>
    <link rel="stylesheet" href="{{ asset('/') }}/front-end/css/home2.css">
    <link rel="icon" type="image/png" href="{{ asset('/') }}/front-end/photo/icon/favicon.ico"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <nav>
        <label class="logo">Northsouth.edu</label>
        <ul>

            <li><a class="active" href="home.html">HOME</a></li>



            <li><a href="rds.html">Rds</a></li>


            <li><a href="#">Profile
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul>
                    <li><a href="Profile(student info).html">Student-info</a></li>
                    <li><a href="id.html">Digital ID</a></li>
                    <li><a href="#">Change
                            <i class="fas fa-caret-right"></i>
                        </a>
                        <ul>
                            <li><a href="Change.html">info</a></li>
                            <li><a href="Change.html">password</a></li>
                            <li><a href="Change.html">Status</a></li>
                        </ul>
                    </li>
                </ul>
            </li>


            <li><a href="Class.html">classes
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul>
                    <li><a href="#">Class 1</a></li>
                    <li><a href="#">Class 2</a></li>
                    <li><a href="#">Class 3</a></li>
                    <li><a href="#">Class 4</a></li>
                    <li><a href="#">Class 5</a></li>
                </ul>
            </li>



            @if(Session::get('studentId'))
                <li><a href="#" onclick="document.getElementById('studentLogoutForm').submit();">Logout</a></li>
                {{ Form::open(['route'=>'student-logout', 'method'=>'post', 'id'=>'studentLogoutForm']) }}
                {{ Form::close() }}
            @endif

        </ul>



    </nav>
    <section></section>
</head>
<body  bgcolor="#1b536e">
<section>
    <div class="box">
    <h2>Welcome to Our Page
    </h2>
    <p><br>O.C.A.

        <br>Version v1.0 approved

        <br>Prepared By:

        <br>Team Members


        <br>SHARIFUL ISLAM SHAWON-1711486642


        <br>Md. ASHIBUL ISLAM KHAN-1631025042


        <br>FARHAD MOHAMMED-1712483642


        <br>TANJIL MAHMUD-1821458042<br>AFTS        </p>
    </div>
</section>
</body>
</html>
