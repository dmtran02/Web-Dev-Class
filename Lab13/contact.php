<!DOCTYPE html>
<html>
    <head>
        <title>Shiba Inu Adoption Center</title>
        <link rel="stylesheet" type="text/css" href="contact.css">
        <script type="text/javascript" src="myscript.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    </head>
    <div class="background"></div>
    <body>
        <br>
        <div id="title"><span class="redblur">Shiba Inu Adoption Fair Event</span></div>
        <div id="container">
                <div class="newLine" style="height: 15px"></div>
                <br>
                <div id="nav"></div>
                <br>
                <div id="home" class="tab"> <a href="index.php">Home</a></div>
                <div id="facts" class="tab"> <a href="learn.jsp">About Shiba Inu</a></div>
                <div id="dogs" class="tab"> <a href="dogs.jsp">Dogs</a></div>
                <div id="adoptions" class="tab"> <a href="adpotions.jsp">Adopt</a></div>
                <div id="contact" class="tab selected"> <a href="contact.jsp">Contact</a></div>
                <div id="volunteer" class="tab"> <a href="volunteer.jsp">Volunteer</a></div>
                <div id="events" class="tab"> <a href="events.jsp">Events</a></div>
                <div class="tab">
                    <div class="menu">Labs
                        <a href="http://cis-linux2.temple.edu/~tuf49524/Lab1/index.php">Lab 1</a>
                        <a href="http://cis-linux2.temple.edu/~tuf49524/Lab2/index.php">Lab 2</a>
                        <a href="http://cis-linux2.temple.edu/~tuf49524/Lab3/index.php">Lab 3</a>
                        <a href="http://cis-linux2.temple.edu/~tuf49524/Lab4/index.php">Lab 4</a>
                        <a href="http://cis-linux2.temple.edu/~tuf49524/Lab5/contact.php">Lab 5</a>
                        <a href="http://cis-linux2.temple.edu/~tuf49524/Lab6/contact.php">Lab 6</a>
                    </div>
                </div>	

            </div>

        <div class="newLine"></div>
        <div class="content_footer">
            <h3 id="heading1">Send an email to Duc Tran!</h3>
            <div id="content selected content box">
                <form method="post" action="http://www.temple.edu/cgi-bin/mail?tuf49524@temple.edu">
                    <table width=90%>
                        <tr>
                            <td>
                                <div class="comBox">
                                <fieldset>
                                    <legend class="legend">Personal Information</legend>    
                                    Your Name: <br>
                                    <input type="text" name="inputname"><br>
                                    Your Email: <br>
                                    <input type="text" name="inputmail"><br>
                                    Your Gender: <br>
                                    <input type="radio" name="gender" value="male"> Male<br>
                                    <input type="radio" name="gender" value="female"> Female<br>
                                    <input type="radio" name="gender" value="other"> Other<br>
                                    <br>
                                </fieldset>
                                </div>
                            </td>
                            <td>
                                <div class="comBox">
                                <fieldset>
                                    <legend class="legend">Comments</legend>
                                    Comments & Feedback <br>
                                    <textarea class="comResponse"></textarea>
                                </fieldset>
                                </div>
                            </td>
                            <td>
                                <div class="comBox">
                                <fieldset>
                                    <legend class="legend">Favorite Dog Poll</legend>
                                    Please choose one Favorite Dog:
                                    <br>
                                    <input type="radio" name="dogName" value="akira"> Akira<br>
                                    <input type="radio" name="dogName" value="shin"> Shin<br>
                                    <input type="radio" name="dogName" value="liuBei"> Liu Bei<br>
                                </fieldset>
                                </div>
                            </td>
                        </tr>
                        <td>
                            <br><br>
                            <input type="submit" value="Submit">
                            <input type="reset" value="Reset"><br>
                        </td>
                        
                        <td class="right"></td>
                    </table> 
                </form>
            </div>
        </div>
    </body>
</html>