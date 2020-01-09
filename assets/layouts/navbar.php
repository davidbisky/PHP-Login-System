    <?php if (!isset($_SESSION['id'])) { ?>

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-3">

        <?php } else { ?>

            <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm p-3">


            <?php } ?>


            <div class="container">
                <a class="navbar-brand" href="../home">
                    Login System
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="../welcome">Welcome</a>
                        </li>

                        <?php if (!isset($_SESSION['id'])) { ?>

                            <li class="nav-item">
                                <a class="nav-link" href="../contact">Contact Us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="../login">Login</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="../register">Signup</a>
                            </li>
                            

                        <?php } else { ?>

                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard">Dashboard</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="../home">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="../contact">Contact Us</a>
                            </li>

                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" id="imgdropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="navbar-img" src="../assets/uploads/users/<?php echo $_SESSION['profile_image'] ?>">
                                    <span class="caret"></span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="imgdropdown">
                                    <a class="dropdown-item" href="../profile">Profile</a>
                                    <a class="dropdown-item" href="../profile/edit">Edit Profile</a>
                                    <a class="dropdown-item" href="../logout">Logout</a>
                                </div>
                            </div>

                        <?php } ?>





                    </ul>
                </div>
            </div>
            </nav>