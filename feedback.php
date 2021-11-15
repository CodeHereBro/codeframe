<?php 

include 'config/config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-question.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
        integrity="sha512-9BwLAVqqt6oFdXohPLuNHxhx36BVj5uGSGmizkmGkgl3uMSgNalKc/smum+GJU/TTP0jy0+ruwC3xNAk3F759A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/script.js"></script>
    <title>Document</title>
</head>

<body>
    <!-- nav bar -->
    <section class="navbar background">
        <nav>
            <button class="toggleBtn" onclick="menutoggle()"><img src="img/menu.png" class="menu-icon"
                    style="width: 30px; position: absolute; left: 0; top: 20px; margin-left: 20px;"></button>
            <ul class="nav-list" id="MenuItems">
                <li><a href="index.php">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="feedback.php">Feedback</a></li>


            </ul>
        </nav>
        <div class="rightnav">
            <input type="text" name="search" id='search' placeholder="Search" onkeyup="search_filter()">
            <button class="btn btn-sm" onclick="search_filter()">Search</button>
        </div>
        <!-- <button onclick="myFunction()">Toggle dark mode</button> -->
        </nav>
    </section>


    <!-- header -->
    <section class="box" id="down">
        <div class="box-main">
            <h1 class="center-big-text">CodeHub</h1>
            <div class="content">
                <span style="content: \2600; font-size: 40px;">&#9728;</span>
                &nbsp;
                <input type="checkbox" id="tooglenight" class="cbx hidden" />
                <label for="tooglenight" class="switch" onclick="myFunction()"></label>
                &nbsp;&nbsp;&nbsp;
                <span style="content: \1F319; font-size: 35px;">&#9790;</span>
            </div>
        </div>
        <div class="about-short">
            <div class="logo">
                <img src="img/profile.jpg" alt="Krishnendu roy">
                <h2>Hi! I'm
                    <div class="word">
                        <span>K</span>
                        <span>R</span>
                        <span>I</span>
                        <span>S</span>
                        <span>H</span>
                        <span>N</span>
                        <span>E</span>
                        <span>N</span>
                        <span>D</span>
                        <span>U</span>
                        <span>&nbsp;</span>
                        <span>R</span>
                        <span>O</span>
                        <span>Y</span>
                    </div>
                </h2>
            </div>
            </h2>
            <p class="w3-cursive">Welcome to <strong>CodeHub</strong> <strong>Feedback form</strong>,
                Please Share your feedback Here. <br> For Video help you can
                folow my YouTube
                Channel <b><a href="https://www.youtube.com/channel/UCyJXQWe8mwX6EdKwIyHecAA">'Krishnendu Roy'</a></b>
            </p>
            <div class="all-img">
                <a href="https://www.facebook.com/krishnendu.roy.501598/" target="_blank"><img src="img/facebook.png"
                        alt="facebook link"></a>
                <a href="https://www.instagram.com/krishnendu_roy52/" target="_blank"><img src="img/instagram.png"
                        alt="instagram Link"></a>
                <a href="https://www.youtube.com/channel/UCyJXQWe8mwX6EdKwIyHecAA" target="_blank"><img
                        src="img/youtube.png" alt="Youtube Link"></a>
                <a href="https://github.com/CodeHereBro" target="_blank"><img src="img/github.png"
                        alt="github Link"></a>
            </div>
        </div>
    </section>
    <!-- Comments -->
    <div class="comments">
        <div class="wrapper">
            <form action="" method="POST" class="form">
                <div class="row">
                    <div class="input-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your Name" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your Email" required>
                    </div>
                </div>
                <div class="input-group textarea">
                    <label for="comment">Comment</label>
                    <textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
                </div>
                <div class="input-group">
                    <button name="submit" class="btn">Post Comment</button>
                </div>
            </form>
            <div class="prev-comments">
                <?php 
                
                $sql = "SELECT * FROM comments";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
    
                ?>
                <div class="single-item">
                    <h4>
                        <?php echo $row['name']; ?>
                    </h4>
                    <a href="mailto:<?php echo $row['email']; ?>">
                        <?php echo $row['email']; ?>
                    </a>
                    <p>
                        <?php echo $row['comment']; ?>
                    </p>
                </div>
                <?php
    
                    }
                }
                
                ?>
            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/question.js"></script>
</body>

</html>