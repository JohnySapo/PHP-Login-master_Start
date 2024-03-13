<!-- 
-- Student Name: Johny Ramos
-- Course: T054 - Computer System Management
-- Module: Web Application
-- Lecturer: Robert Smith
-->

<?php 
    if(isset($_POST['submit'])) {
        require ("../src/cleaner.php");

        $cleaner = new cleaner();

        try {
            require_once ("../src/DBconnect.php");

            $new_reg = array(
                "email"     => $cleaner -> cleanData($_POST['email']),
                "firstname" => $cleaner -> cleanData($_POST['firstname']),
                "lastname"  => $cleaner -> cleanData($_POST['lastname']),
                "age"       => $cleaner -> cleanData($_POST['age']),
                "password"  => $cleaner -> cleanData($_POST['password']),
            );

            $sql = sprintf( "INSERT INTO %s (%s) VALUES (%s)", "registration",
            implode(", ", array_keys($new_reg)), ":" . implode(", :", array_keys($new_reg)));

            $statement = $connection -> prepare($sql);
            $statement -> execute($new_reg);
        } catch(PDOException $pdoex) {
            echo $sql . "<br>". $pdoex -> getMessage();
        }
    }
?>

<?php 
    include ("../template/header.php");

    if(isset($_POST['submit']) && $statement) {
        echo $new_reg['firstname']. ' has been registered';
        header("location:index.php");
        exit; 
    }
?>

<div class="form-control p-5">
    <form method="POST" class="">
        <h2 class="form-signin-heading">Sign Up</h2>
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" name="firstname" id="firstname" class="form-control mt-2" required />
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" name="lastname" id="lastname" class="form-control mt-2" required />
        <label for="email" class="form-label">Email Address</label>
        <input type="email" name="email" id="email" class="form-control mt-2" required />
        <label for="age" class="form-label">Age</label>
        <input type="text" name="age" id="age" class="form-control mt-2" />
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control mt-2" />
        <input type="submit" name="submit" id="submit" value="Submit" class="btn form-control mt-2 btn-primary" />
    </form>
</div>

<?php include ("../template/footer.php");?>