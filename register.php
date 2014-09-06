<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 9]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        

        <div class="pragmatic_form">
            <fieldset><h2>Registration Form</h2>
            <form action="#" method="post">
                
                <table>
                    <tr>
                        <td> <label for="name">Name:</label></td>                    
                        <td><input type="text" id="name" name="user_name" required></td>    
                    </tr>

                    <tr>
                        <td><label for="password">Password:</label></td>             
                        <td><input type="password" id="password" name="user_password" required></td>                        
                    </tr>

                    <tr>
                        <td> <label for="cpassword">Password </br>Confirmation:</label></td> 
                        <td><input type="password" id="cpassword" name="user_password" required></td>
                    </tr>

                    <tr>
                        <td><label for="fname">First Name:</label></td>
                        <td><input type="text" id="fname" name="user_fname" required></td>            
                    </tr>

                    <tr>
                        <td><label for="lname">Last Name:</label></td>                        
                        <td><input type="text" id="lname" name="user_lname" required></td>
                    </tr>

                    <tr>
                        <td><label for="mail">Email:</label></td>                        
                        <td><input type="email" id="mail" name="user_email" required></td>
                    </tr>
                    <tr>
                        <td><label for="gender">Gender:</label></td>                        
                        <td><input type="radio" id="male" value="male" name="user_gender">&nbsp;<label for="male">Male</label>&nbsp;
                        <input type="radio" id="female" value="female" name="user_gender">&nbsp;<label for="female">Female</label></td>
                    </tr>

                     <tr>
                        <td><label >Date of birth:</label></td>                        
                        <td>
                            <select id="birth" name="user_birth">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>

                             <select>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>                            
                            </select>

                            <select>
                                <option value="1985">1985</option>
                                <option value="1990">1990</option>
                                <option value="1995">1995</option>
                                <option value="2000">2000</option>
                                <option value="2005">2005</option>
                                <option value="2010">2010</option>
                                <option value="2015">2015</option>
                                <option value="2020">2020</option>
                                <option value="2025">2025</option>
                                <option value="2030">2030</option>
                                <option value="2035">2035</option>
                                <option value="2040">2040</option>                               
                            </select>
                        </td>
                    </tr>

                    
                     <tr>
                        <td colspan="2">
                        <input type="checkbox" id="male" value="agreed" name="user_agreement">&nbsp;<span for="male">I Agree all <a href="#">Trems and use</a> and <a href="#">Privacy Policy</a></span>
                        </td>                       
                    </tr>

                     <tr>
                        <td colspan="2" align="center">
                            <button type="submit">Join</button>
                        </td>                       
                    </tr>

                   
                </table>

            </form>
        </fieldset>
        </div>

        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>-->
        
         <script src="http://code.jquery.com/jquery-1.8.0.js"></script>
         <script src="js/main.js"></script>

        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
