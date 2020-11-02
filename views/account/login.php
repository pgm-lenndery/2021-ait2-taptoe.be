<?php 
    require_once '../../models/User.php';
    
    if (isset($_POST['login'])) {
        $user = User::getByEmail($_POST['email']);
        
        // print_r($user);
        print_r($user['password']);
        
        if (isset($user['email'])) {
            if (password_verify($_POST['password'], $user['password'])) {
                $_SESSION['user_id'] = $user['user_id'];
                echo 'succes';
                header('location: ../');
            }
            else {
                echo 'Dit account bestaat niet of je inloggegevens zijn verkeerd';
            }
        } else {
            echo 'Dit account bestaat niet of je inloggegevens zijn verkeerd';
        }
    }
?>


<div class="container">
    <div class="row row--wide">
        <div class="col-12 col-md-4">
            <form method="POST" data-form="accountLogin" class="input">
                <label class="input__group">
                    <input type="email" name="email" placeholder="verhuur@haegepoorters.be">
                    <span>Email</span>
                </label>
                <label class="input__group">
                    <input type="password" name="password" placeholder="verhuur@haegepoorters.be">
                    <span>Wachtwoord</span>
                </label>
                <input class="btn" type="submit" name="login" value="Aanmelden">
            </form>
        </div>
        <div class="col-12 col-md d-flex justify-content-center flex-column">
            <h2 class="display-3 color--main font-weight--600 mb-4">
                meld je aan<br> om te beginnen
            </h2>
            <p class="d-flex align-items-center">Heb je nog geen account? <a class="btn btn--grey ml-3" href="account">registreren</a></p>
        </div>
    </div>     
</div>