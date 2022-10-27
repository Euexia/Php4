<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
 

    <title>Contactez moi !</title>
</head>
<body>
  <!-- NavBar -->
    <header id="header">
      <nav class="navbar navbar-expand-lg shadow-lg mb-4 bg-light fixed-top">
        <div class="container-fluid">
          <a class="nav-link text-dark fw-bold fs-4" style="margin-right: 10px; margin-left: 10px" href="index.php">Accueil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="A Propos.php">A propos</a>
              <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="portfolio.php">Portfolio</a>
              <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="contact.php">Contact</a>
              <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="A Propos.php">CV</a>
            </div>
          </div>
        </div>
      </nav>
    </header> -->
    <!-- Navbar END -->





		</div>
														
    <div class="office">

		<form id="contactForm" class="contact-form js-contact-form has--loader" method="post" data-js-contactform="">

    <h2>  <strong>  Contactez Nous</strong> </h2>
    <p>Use the form below to get in touch or email us at info@mcbridedesign.com.</p>

    <br>
    <br>

    


    <div id="container">
  <div class="underline">
  </div>
  <div class="icon_wrapper">
  </div>
<form action="#" method="post" id="contact_form">
    <div class="name">
      <label for="name"></label>
      <input type="text" placeholder="NOM" name="nom" id="name_input" required>
    </div>
    <div class="email">
      <label for="email"></label>
      <input type="email" placeholder="EMAIL" name="email" id="email_input" required>
    </div>
    <div class="telephone">
      <label for="name"></label>
      <input type="text" placeholder="TELEPHONE" name="telephone" id="telephone_input" required>
    </div>
    <div class="subject">
      <label for="subject"></label>
      <select placeholder="Subject line" name="subject" id="subject_input" required>
        <option disabled hidden selected>Subject line</option>
        <option>I'd like to start a project</option>
        <option>I'd like to ask a question</option>
        <option>I'd like to make a proposal</option>
      </select>
    </div>
    <div class="message">
      <label for="message"></label>
      <textarea name="message" placeholder="un petit message" id="message_input" cols="30" rows="5" required></textarea>
    </div>
    <div class="submit">
      <input type="submit" value="Send Message" id="form_button" />
    </div>
</form>



 
    <a href="loginadmin.php" target="_blank" > ADMIN</a>


    </form>												
			<footer class="connect-footer">
				<div class="column newsletter">
					<h4 class="tx--body-lead label">Stay Updated</h4>
					
					<div class="signup-field">
						<form action="//mcbridedesign.us3.list-manage.com/subscribe/post?u=ceb2a2bc7b069fc1ea4dd2e54&amp;id=acda54d35e" method="post" target="_blank"><p><input type="text" id="mail" required="" name="EMAIL" placeholder="Sign up for newsletter…" class="subscribe-field">
							<button type="submit" class="subscribe-btn">Sign Up</button><br></p>
					</form>
						<svg class="signup-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M11.2071 0.792908L19.9142 9.50001L11.2071 18.2071L9.79289 16.7929L16.0858 10.5H0V8.50001H16.0858L9.79289 2.20712L11.2071 0.792908Z" fill="#ECF2F7"></path>
					</svg></div>
				</div>

				<div class="column">
					<h4 class="tx--body-lead label">Media</h4>
          <p>Lucie Quintana<br>
          lucie.quintana@gmail.com<br>
          0000000000</p>				
        </div>

				<div class="column social">
					<h4 class="tx--body-lead label">Follow Us</h4>
											<li>
    <a class="no-barba tx--caption first" href="#" title="Facebook" target="_blank">Facebook</a>
      </li>

											<li>
    <a class="no-barba tx--caption" href="#" title="Twitter" target="_blank">Twitter</a>
      </li>

											<li>
    <a class="no-barba tx--caption" href="#" title="Instagram" target="_blank">Instagram</a>
      </li>

											<li>
    <a class="no-barba tx--caption" href="#" title="Linkedin" target="_blank">Linkedin</a>
      </li>

									</div>
			</footer>
		</div>

	
	</div></main>

</div> 

 


<?php
$pdo = new PDO('mysql:host=localhost;dbname=tableur', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
if ($_POST) {
    echo $_POST['nom'];
    echo $_POST['email'];
    echo $_POST['telephone'];
    echo $_POST['message'];
    $pdo->exec("INSERT INTO info (nom, email, telephone, message) VALUES ('$_POST[nom]', '$_POST[email]', '$_POST[telephone]', '$_POST[message]')");
}
?>

</body>

</html>
