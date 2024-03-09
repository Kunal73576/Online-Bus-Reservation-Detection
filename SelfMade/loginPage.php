<?php
require 'function.php';
$conn = db_connect();

if (!$conn)
    die("Connection Failed");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self made</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <!-- Font-awesome -->
    <script src="https://kit.fontawesome.com/d8cfbe84b9.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- css -->
    <?php
    include 'styles.php';
    ?>
</head>

<body>
    <header>
        <nav>
            <div>
                <a href="#" class="nav-item nav-logo">YourWay BUS</a>
            </div>
            <ul>
                <li><a href="#" class="nav-item">Home</a></li>
                <li><a href="#about" class="nav-item">About</a></li>
                <li><a href="#contact" class="nav-item">Contact</a></li>
            </ul>
            <div>
                <a href="#" class="login nav-item" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fas fa-sign-in-alt" style="margin-right: 0.4rem;"></i>Login</a>
                <a href="#pnr-enquiry" class="pnr nav-item">PNR Enquiry</a>
            </div>
        </nav>
    </header>
    <section id="home">
        <div id="route-search-form">
            <h1>Online Bus Reservation System</h1>

            <p class="text-center">Welcome to Online Bus Reservation System. Login now to manage bus tickets and much more. OR, simply scroll down to check the Ticket status using Passenger Name Record (PNR number)</p>

            <center>
                <button class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#loginModal">Administrator Login</button>

            </center>

            <br>
            <center>
                <a href="#pnr-enquiry"><button class="btn btn-primary">Scroll Down <i class="fa fa-arrow-down"></i></button></a>
            </center>

        </div>
    </section>
    <div id="block">
        <section id="info-num">
            <figure>
                <img src="route.svg" alt="Bus Route Icon" width="100px" height="100px">
                <figcaption>
                    <span class="num counter" data-target="<?php echo count($routeData); ?>">999</span>
                    <span class="icon-name">routes</span>
                </figcaption>
            </figure>
            <figure>
                <img src="bus.svg" alt="Bus Icon" width="100px" height="100px">
                <figcaption>
                    <span class="num counter" data-target="<?php echo count($busData); ?>">999</span>
                    <span class="icon-name">bus</span>
                </figcaption>
            </figure>
            <figure>
                <img src="customer.svg" alt="Happy Customer Icon" width="100px" height="100px">
                <figcaption>
                    <span class="num counter" data-target="<?php echo count($customerData); ?>">999</span>
                    <span class="icon-name">happy customers</span>
                </figcaption>
            </figure>
            <figure>
                <img src="ticket.svg" alt="Instant Ticket Icon" width="100px" height="100px">
                <figcaption>
                    <span class="num"><span class="counter" data-target="20">999</span> SEC</span>
                    <span class="icon-name">Instant Tickets</span>
                </figcaption>
            </figure>
        </section> -->
        <section>
            <section id="pnr-enquiry">
                <div id="pnr-form">
                    <h2>PNR ENQUIRY</h2>
                    <form action="<?php echo $_SERVER["REQUEST_URI"]; ?>" method="POST">
                        <div>
                            <input type="text" name="pnr" id="pnr" placeholder="Enter PNR">
                        </div>
                        <button type="submit" name="pnr-search">Submit</button>
                    </form>
                </div>
            </section> -->
            <section id="about">
                <div>
                    <h1>About Us</h1>
                    <h4>Wanna know were it all started?</h4>
                    <p>
                        Lorem ipsum dolor sit amet consecteturadipisicing elit. Perferendis soluta voluptas eaque, numquam veritatis aperiam expedita deleniti, nesciunt cum alias velit. Cupiditate commodi
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus cum nisi ea optio unde aliquam quia reprehenderit atque eum tenetur!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed placeat debitis corporis voluptates modi quibusdam quidem voluptatibus illum, maiores sequi.
                    </p>
                </div>
            </section> -->
            <section id="contact">
                <div id="contact-form">
                    <h1>Contact Us</h1>
                    <form action="">
                        <div>
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name">
                        </div>
                        <div>
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div>
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                        </div>
                        <div></div>
                    </form>
                </div>
            </section>
            <footer>
                <p>
                    <i class="far fa-copyright"></i> <?php echo date('Y'); ?> - Simple Bus Ticket Booking System | Made with &#10084;&#65039; by Mayank Joshi
                </p>
            </footer>
    </div>







</body>

</html>