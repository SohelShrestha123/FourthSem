<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver</title>
    <link rel="stylesheet" href="user.css?v=<?php echo time(); ?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

</head>
<body>
    <nav>
        <div class="logo">
            <i class="fa-solid fa-bars menu"></i>
            <span class="logo-name">Subyatra</span>
        </div>

        <div class="sidebar">
            <div class="logo">
                <i class="fa-solid fa-bars menu"></i>
                <span class="logo-name">Hamro Bus Sewa</span>
            </div>

            <div class="sidebar-content">
                <ul class="lists">
                    <li class="list">
                        <a href="#" class="nav-link">
                            <i class="fa-solid fa-gauge icon"></i>
                            <span class="link">Dashboard</span>
                        </a>
                    </li>

                    <li class="list">
                        <a href="busform.php" class="nav-link">
                        <i class="fa-solid fa-plus icon"></i>
                            <span class="link">Add Bus Details</span>
                        </a>
                    </li>

                    <li class="list">
                        <a href="#" class="nav-link">
                        <i class="fa-regular fa-clock icon"></i>
                            <span class="link">History</span>
                        </a>
                    </li>

                    

                    <li class="list">
                        <a href="#" class="nav-link">
                            <i class="fa-solid fa-circle-question icon"></i>
                            <span class="link">Helps</span>
                        </a>
                    </li>

                    <li class="list">
                        <a href="#" class="nav-link">
                            <i class="fa-solid fa-gear icon"></i>
                            <span class="link">Setting</span>
                        </a>
                    </li>
                </ul>
                <div class="bottom">
                    <li class="list">
                        <a href="#" class="nav-link">
                            <i class='bx bx-log-out-circle icon'></i>
                            <span class="link">Log out</span>
                        </a>
                    </li>

                </div>
            </div>
        </div>
    </nav>
   
</body>
</html>