<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khaana- Homely flavours</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!--cdn font-awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!--custom css file link-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!--fa is font awesome which is a library of icons-->
    
    <!--header section starts-->
    <header>
        <a href="#" class="logo"><i class="fas fa-solid fa-utensils"></i> FoodRush</a>

        <nav class="navbar">
            <a class="active" href="#home">home</a>
            <a href="#dishes">dishes</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#review">review</a>
            <a href="#order">order</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>

        <!-- <div>
            <button id="register">Register</button>
        </div> -->

    </header>
    <!--header section ends-->



    <!--search form-->
    <form action="" id="search-form">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>


    <!-- home section starts here -->

    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper wrapper">

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>Dal Khichdi</h3>
                        <p>a healthy, light, comforting dish made with rice and moong lentils</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/dal-khichadi.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>Khaman Dhokla</h3>
                        <p>a savoury sponge dish, all-time favourite Gujarati food served with peppy green chutney</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                    <img src="images/khaman_dhokla.jpg">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>Chole Bhature</h3>
                        <p>a spicy chickpea curry that is served with leavened fried bread</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                    <img src="images/chole-bhature.jpg">
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- home section ends here -->

    <!-- dishes section starts here -->
    <section class="dishes" id="dishes">

        <h3 class="sub-heading">our dishes</h3>
        <h1 class="heading">popular dishes</h1>

        <div class="box-container">

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/khaman_dhokla.jpg" alt="">
            <h3>khaman dhokla</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>Rs.90</span>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/dal-khichadi.jpg" alt="">
            <h3>dal khichdi</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>Rs.70</span>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/idli_sambhar.jpg" alt="">
            <h3>idli sambhar</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>Rs.65</span>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/chole-bhature.jpg" alt="">
            <h3>chole bhature</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <span>Rs.150</span>
            <a href="#" class="btn">add to cart</a>
        </div>

        </div>
    </section>
    <!-- dishes section ends here -->

    <!-- about section starts here-->
    <section class="about" id="about">

        <h3 class="sub-heading">about us</h3>
        <h1 class="heading">why choose us?</h1>

        <div class="row">

            <div class="image">
                <img src="images/location-icon.png" alt="">
            </div>

            <div class="content">
                <h3>best homely food in the country</h3>
                <p>Khaana is a food ordering website from where customers can order tasty Indian food with homely flavours even if they are away from home. Our aim is to provide delicious and healthy food 24/7 to our customers at an affordable price so people away from home can afford it easily and save their valuable time for other activities. We provide good food service with free home delivery and easy pay on delivery facility.</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
                <a href="#" class="btn">learn more</a>
            </div>
        </div>

    </section>
    <!-- about section ends here-->

    <!-- menu section starts here-->
    <section class="menu" id="menu">

        <h3 class="sub-heading">our menu</h3>
        <h1 class="heading">today's speciality</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/chai_paratha.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>chai paratha</h3>
                    <p>1 cup chai and 2 parathas.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">Rs.50</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/dal-khichadi.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>dal khichdi</h3>
                    <p>Super healthy and nutritious dal khichdi (500g).</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">Rs.70</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/paneer-rice-paratha.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>paneer, rice, roti</h3>
                    <p>250g paneer, 1 bowl rice and 2 rotis.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">Rs.175</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/pavbhaji.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>pav bhaji</h3>
                    <p>4 pav and 150g bhaji.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">Rs.90</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/gobhi-sabzi.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>gobhi sabzi and roti</h3>
                    <p>200g gobhi curry with 3 rotis.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">Rs.120</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/khaman_dhokla.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>khaman dhokla</h3>
                    <p>6 pc dhokla served with coriander chutney.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">Rs.90</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/idli_sambhar.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>idli sambhar</h3>
                    <p>4 idlis and 250g sambhar.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">Rs.65</span>
                </div>
            </div>

            
            <div class="box">
                <div class="image">
                    <img src="images/curd-potato-curry.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Curd-potato curry with roti</h3>
                    <p>200g curd potato curry with 3 rotis.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">Rs.100</span>
                </div>
            </div>

        </div>

    </section>
    <!-- menu section ends here-->

    <!-- review section starts here -->
    <section class="review" id="review">

        <h3 class="sub-heading">customer's review</h3>
        <h1 class="heading">what they say</h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/Review1.jpg" alt="">
                        <div class="user-info">
                            <h3>Dev Sharma</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>I really love the food of Khaana. Their food has a classic Indian taste. The services are also
                        very good. Prices are also affordable.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/Review2.jpg" alt="">
                        <div class="user-info">
                            <h3>Neha Khandal</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Super yummy food. Just love their flavours! The packaging of food is very good and hygienic.
                        Khaana is the best platform to order indian food.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/Review3.jpg" alt="">
                        <div class="user-info">
                            <h3>Yuvraj Rathore</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>I live away from home but still I get to eat food that tastes just like my mom made it for me.
                        Thanks to Khaana!</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/Review4.jpg" alt="">
                        <div class="user-info">
                            <h3>Rita Shah</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>I never knew Khichdi could be so tasty until I ordered Dal Khichdi from Khaana. They have so many
                        amazing options for healthy as well as indian street food.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/Review5.jpg" alt="">
                        <div class="user-info">
                            <h3>Kabir Mathur</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>I am their regular customer. Their food just feels like home. Whenever I'm busy, I just order
                        food from Khaana. Their free home delivery service is just cherry on the cake!</p>
                </div>

            </div>

        </div>

    </section> 
    <!-- review section ends here -->

    <!-- order section starts here -->
    <section class="order" id="order">

        <h3 class="sub-heading">order now</h3>
        <h1 class="heading">free and fast</h1>

        <form action="" method="post">

            <div class="inputbox">
                <div class="input">
                    <span>your name</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="input">
                    <span>your number</span>
                    <input type="number" placeholder="enter your number" name="contactNo">
                </div>
            </div>
            <div class="inputbox">
                <div class="input">
                    <span>your order</span>
                    <input type="text" placeholder="enter food name" name="orderName">
                </div>
                <div class="input">
                    <span>additional food</span>
                    <input type="test" placeholder="extra with food" name="additional">
                </div>
            </div>
            <div class="inputbox">
                <div class="input">
                    <span>how much</span>
                    <input type="number" placeholder="how many orders" name="quantity">
                </div>
                <div class="input">
                    <span>date and time</span>
                    <input type="datetime-local" name="date">
                </div>
            </div>
            <div class="inputbox">
                <div class="input">
                    <span>your address</span>
                    <textarea name="address" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="input">
                    <span>your message</span>
                    <textarea name="message" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
                </div>
            </div>

            <input type="submit" name="submit" value="order now" class="btn" onclick="showAlert()">

        </form>

        <!-- DATABASE CONNECTIVITY -->

        <?php
            if (isset($_POST['submit'])){
                $conn= mysqli_connect('localhost', 'root', '', 'khaana');

                if(!empty($_POST['name']) && !empty($_POST['contactNo']) && !empty($_POST['orderName']) && !empty($_POST['quantity']) && !empty($_POST['date']) && !empty($_POST['address'])){
                    $name=$_POST['name'];
                    $contactNo=$_POST['contactNo'];
                    $orderName=$_POST['orderName'];
                    $additional=$_POST['additional'];
                    $quantity=$_POST['quantity'];
                    $date=$_POST['date'];
                    $address=$_POST['address'];
                    $message=$_POST['message'];

                    $insert="insert into orders(id, name, contactNo, orderName, additional, quantity, date, address, message) values('','$name', '$contactNo', '$orderName', '$additional','$quantity','$date','$address','$message')";
                    $run=mysqli_query($conn , $insert);

                    if($run){
                        echo "<p style=color:#27ae60>ORDER PLACED SUCCESSFULLY</p>";
                    }
                    else{
                        echo "<p style=color:red>ERROR</p>";
                    }
                }
                else{
                    echo "<p style=color:red>PLEASE ENTER YOUR DETAILS CORRECTLY</p>";
                }
            }
        ?>

    </section>
    <!-- order section ends here -->

    <!-- footer section starts here -->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>locations</h3>
                <a href="#">Jaipur</a>
                <a href="#">Delhi</a>
                <a href="#">Pune</a>
                <a href="#">Bengaluru</a>
                <a href="#">Chennai</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">dishes</a>
                <a href="#">about</a>
                <a href="#">menu</a>
                <a href="#">review</a>
                <a href="#">order</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#">+987-654-3210</a>
                <a href="#">+999-888-7777</a>
                <a href="#">khaana_main@gmail.com</a>
                <a href="#">homelyflavours@gmail.com</a>
                <a href="#">jaipur, india - 302021</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">linkedin</a>
            </div>

        </div>

        <div class="credit"> copyright @ 2023 by <span>Team BCA</span> </div>

    </section>
    <!-- footer section ends here -->

    

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!--custom js file-->
    <script src="script.js"></script>
    </body>
</html>