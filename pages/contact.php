<?php
require_once '../config/config.php';
require_once '../inc/header.php';
?>
<link rel="stylesheet" href="../css/contact.css" />


<div class="contact-container">
    <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
        <div class="contact-left-title">
            <h2>Contactez nous</h2>
            <hr />
        </div>
        <input type="hidden" name="access_key" value="ACCESS_KEY" />
        <input type="text" name="name" placeholder="Your Name" class="contact-inputs" required />
        <input type="email" name="email" placeholder="Your Email" class="contact-inputs" required />
        <textarea name="message" placeholder="Your Message" class="contact-inputs"></textarea>
        <button type="submit">
            Envoyer
        </button>
    </form>
    <div class="contact-right">
        <div class="gmap-canvas">
            <iframe width="100%" height="520" id="gmap-canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.4387167081622!2d2.456647!3d48.849844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e672ab4cd3351f%3A0xbae1370d9f27e135!2sPhoneplus!5e0!3m2!1sfr!2sfr!4v1722515242974!5m2!1sfr!2sfr" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>
</div>