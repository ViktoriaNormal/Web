<?php
include 'header.php';
?>
<body>
    <div class="prev_content">
        <div class="preview_text">
            <h1 class="ask_me">Ask me</h1>
            <p class="text">Lorem ipsum dolor sit amet consectetur. 
                Non volutpat ultrices tempus ac massa neque. 
                Dolor a luctus ut id in metus nibh dignissim.
            </p>
            <img src="images/rectangle_line.png" alt="rectangle_line" class="rect_line">
        </div>
        <div class="image">
            <img class="city" src="images/city.png" alt="city">
        </div>
    </div>

    <div class="main_content">
        <div class="form">
            <form action="home.php" method="POST" class="form_inside">
                <div class="form_content">
                    <p class="form_field">Full name</p>
                    <input type="text" class="data_field" id="username" placeholder="Enter your full name" name="name" <?php if (isset($_GET['N'])) {echo 'value='.$_GET["N"];}?> required>
                    <br>
                    <p class="form_field">E-mail</p>
                    <input type="email" class="data_field" id="email" placeholder="Enter your email" name="email" <?php if (isset($_GET['E'])) {echo 'value='.$_GET["E"];}?> required>
                    <br>
                    <p class="form_field">Comment</p>
                    <textarea class="data_field" id="comment" placeholder="Enter your comment" rows="3" cols="25" name="comment"></textarea>
                    <br>
                    <p class="type">Type of appeal</p>
                    <div class="selection">
                        <select id="appeal" name="select">
                            <option class="select" value="offer">offer</option>
                            <option class="select" value="complaint">complaint</option>
                        </select>
                    </div>
                    <label for="data_process">I agree with data processing</label>
                        <div class="check">
                            <input type="checkbox" id="data_process">
                        </div>
                    <p class="about_us">Where did you hear about us?</p>
                    <div class="internet">
                        <p><input type="radio" id="inter" name="radio" value="inter" <?php if(isset($_GET['S']) and $_GET['S'] == 'inter'){ echo 'checked';}?>>Internet</p>
                    </div>
                    <div class="friends">
                        <p><input type="radio" id="frien" name="radio" value="frien" <?php if(isset($_GET['S']) and $_GET['S'] == 'frien'){ echo 'checked';}?>>Friends</p>
                    </div>
                    <input type="file" name="file">
                    <button class="send">Send</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>