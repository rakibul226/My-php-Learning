<html>
    <body>
        
    
    <style>
        table{
            border: 1px solid black;
        }
    </style>

<?php
        if(isset($_SESSION['button'])){
            $name = $_SESSION['name'];
            $email = $_SESSION['email'];
            $password = $_SESSION['password'];
            $date = $_SESSION['date_of_birth'];
            $gender = $_SESSION['gender'];
            $blood_group = $_SESSION['blood_group'];
            $degree = $_SESSION['degree'];
        }




            //echo"Usename : ";
             //echo $_REQUEST['user_name'];
            //<br>
        if(isset($_REQUEST['button'])){
              $name = $_REQUEST['name'];
              $email = $_REQUEST['email'];
              $password = $_REQUEST['password'];
              $date = $_REQUEST['date_of_birth'];
              $gender = $_REQUEST['gender'];
              $blood_group = $_REQUEST['blood_group'];
              $degree = $_REQUEST['degree'];
        }

        

    ?>

    <form action="e_dashboard.php" method="POST">

       <table   align="center" width="50%" >
             <tr>
                <td colspan="2">Xcompany
                 </td><td>
                 <a href="a_public_home.php">Home</a>
                 <a href="c_login.php">login</a>
                <a href="b_Registration.php">Registration</a>
                </td>
        


           <tr>
               <td width="100px"></td>
               <td> 
    
        
               <fieldset>
                   <legend>REGISTRATION</legend>
            
                        Name
                         <input type="text"name="name"value=""> <br><br><hr>

                        Email
                         <input type="text"name="email"value=""> <br><br>

                         User Name
                         <input type="text"name="name"value=""> <br><br>

                         Password
                         <input type="password"name="password"value=""> <br><br>

                         Confirm Password
                         <input type="password"name="confirm_password"value=""> <br><br>
            

                        <fieldset>
                          <legend>Gender </legend>
                            <input type="radio"name="gender"value="male">Male
                            <input type="radio"name="gender"value="female">Female
                            <input type="radio"name="gender"value="other">Other <br><br>
                        </fieldset>

                         <fieldset>
                          <legend> Date Of Birth</legend>
                            <input type="date"name="date_of_birth"value=""><br><br>
                        </fieldset><br>
           
           
            
                          <input type="submit" value="submit">
                          <input type="reset" name="" value="Reset"/>
            
            </fieldset>

             </tr>

             <tr>
                <td colspan="5"><center>Copyright @2017</center> </td>
             </tr>
         </table>
    </form>

        <?php
        
        

        if(isset($_REQUEST['submit'])){
            $name = $_REQUEST['name'];
            $email = $_SESSION['email'];
            $password =$_SESSION['password'];
            $date = $_SESSION['date_of_birth'];
            $gender = $_SESSION['gender'];
            $blood_group = $_SESSION['blood_group'];
            $degree = $_SESSION['degree'];
            
        }
        
        ?>

    </body>
</html>

