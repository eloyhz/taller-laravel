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

                    <?php if ($actual === "alumnos.index") : ?>
                        <li class="nav-item active">
                    <?php else: ?>
                        <li class="nav-item">
                    <?php endif ?>
                        <a class="nav-link" href="{{ route('alumnos.index') }}">Alumnos</a>
                    </li>

                    <?php if ($actual === "profesores.index") : ?>
                        <li class="nav-item active">
                    <?php else: ?>
                        <li class="nav-item">
                    <?php endif ?>
                        <a class="nav-link" href="{{ route('profesores.index') }}">Profesores</a>
                    </li>
                </ul>
            </nav>
