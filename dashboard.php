<?php
if(isset($_POST['s']))
{
$aname = $_POST['aname'];
$companyname = $_POST['companyname'];
$customercount = $_POST['customercount'];
$ordercount = $_POST['ordercount'];
$projectcount = $_POST['projectcount'];
$income = $_POST['income'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Admin Panel</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="dashboard.css?v=<?php echo time(); ?>">
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <!-- sidebar -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"> <span class="brand-text"><?php if(isset($_POST['s'])){ echo $companyname; } else{ echo "Company Name";}?></span></span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active">
                        <span class="las la-igloo"></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="las la-users"></span>
                        <span>Customers</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="las la-clipboard-list"></span>
                        <span>Projects</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="las la-shopping-bag"></span>
                        <span>Orders</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="las la-receipt"></span>
                        <span>Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="las la-user-circle"></span>
                        <span>Accounts</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="las la-tasks"></span>
                        <span>Tasks</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- main content -->
    <div class="main-content">
        <header>
            <div class="header-title">
                <h2>
                    <label for="nav-toggle">
                        <span class="las la-bars"></span>
                    </label>
                    Dashboard
                </h2>
            </div>
            <div class="search-weapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="search here">
            </div>
            <div class="user-wrapper">
                <img src="./user.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4><?php if(isset($_POST['s'])){ echo $aname; } else{ echo "Admin name";}?></h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </header>

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1><?php if(isset($_POST['s'])){ echo $customercount; } else{ echo "00";}?></h1>
                        <span class="card-text">Customers</span>
                    </div>
                    <span class="las la-users card-icon"></span>
                </div>
                <div class="card-single">
                    <div>
                        <h1><?php if(isset($_POST['s'])){ echo $projectcount; } else{ echo "00";}?></h1>
                        <span class="card-text">Projects</span>
                    </div>
                    <span class="las la-clipboard-list card-icon"></span>
                </div>
                <div class="card-single">
                    <div>
                        <h1><?php if(isset($_POST['s'])){ echo $ordercount; } else{ echo "00";}?></h1>
                        <span class="card-text">Orders</span>
                    </div>
                    <span class="las la-shopping-bag card-icon"></span>
                </div>
                <div class="card-single">
                    <div>
                        <h1 class="card-head-alt">&#8377;<?php if(isset($_POST['s'])){ echo $income; } else{ echo "0K";}?></h1>
                        <span class="card-text card-text-alt">Income</span>
                    </div>
                    <span class="las la-wallet card-icon card-icon-alt"></span>
                </div>
            </div>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Projects</h3>
                            <button>See All <span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Project Title</td>
                                            <td>Department</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>UI/UX Design</td>
                                            <td>UI Team</td>
                                            <td><span class="status purple"></span>Review</td>
                                        </tr>
                                        <tr>
                                            <td>Web Development</td>
                                            <td>Frontend Team</td>
                                            <td><span class="status pink"></span>In Progress</td>
                                        </tr>
                                        <tr>
                                            <td>Ushop App</td>
                                            <td>Android Team</td>
                                            <td><span class="status orange"></span>Pending</td>
                                        </tr>
                                        <tr>
                                            <td>UI/UX Design</td>
                                            <td>UI Team</td>
                                            <td><span class="status purple"></span>Review</td>
                                        </tr>
                                        <tr>
                                            <td>Web Development</td>
                                            <td>Frontend Team</td>
                                            <td><span class="status pink"></span>In Progress</td>
                                        </tr>
                                        <tr>
                                            <td>Ushop App</td>
                                            <td>Android Team</td>
                                            <td><span class="status orange"></span>Pending</td>
                                        </tr>
                                        <tr>
                                            <td>UI/UX Design</td>
                                            <td>UI Team</td>
                                            <td><span class="status purple"></span>Review</td>
                                        </tr>
                                        <tr>
                                            <td>Web Development</td>
                                            <td>Frontend Team</td>
                                            <td><span class="status pink"></span>In Progress</td>
                                        </tr>
                                        <tr>
                                            <td>Ushop App</td>
                                            <td>Android Team</td>
                                            <td><span class="status orange"></span>Pending</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>New Customers</h3>
                            <button>See All <span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="./user.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>CEO Expert</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info"> <img src="./user.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>CEO Expert</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info"> <img src="./user.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>CEO Expert</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info"> <img src="./user.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>CEO Expert</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info"> <img src="./user.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>CEO Expert</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    </div>
    </div>
    </div>
    </main>
    </div>
</body>

</html>