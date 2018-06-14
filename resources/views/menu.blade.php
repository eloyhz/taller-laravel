<?php
$actual = \Route::current()->getName();
?>

<nav class="navbar navbar-expand navbar-dark bg-dark">
                <ul class="nav navbar-nav">

                    <?php if ($actual === "Inicio") : ?>
                        <li class="nav-item active">
                    <?php else: ?>
                        <li class="nav-item">
                    <?php endif ?>
                            <a class="nav-link" href="{{ route('Inicio') }}">Inicio<span class="sr-only">(current)</span></a>
                    </li>

                @guest
                
                @else
                    <?php if ($actual === "alumnos.index") : ?>
                        <li class="nav-item active">
                    <?php else: ?>
                        <li class="nav-item">
                    <?php endif ?>
                        <a class="nav-link" href="{{ route('alumnos.index') }}">Alumnos</a>
                    </li>

                    @guest

                    @else 
                        @if(Auth::user()->esProfesor())
                            <?php if ($actual === "profesores.index") : ?>
                                <li class="nav-item active">
                            <?php else: ?>
                                <li class="nav-item">
                            <?php endif ?>
                                <a class="nav-link" href="{{ route('profesores.index') }}">Profesores</a>
                            </li>
                        @endif
                    @endguest                    
                @endguest
                    
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>

            </nav>
