<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact-form</title>
    <link rel="stylesheet" href="../css/contact.css" />
</head>

<body>
    <div class="contact-container">
        <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
            <div class="contact-left-title">
                <h2>Get in touch</h2>
                <hr />
            </div>
            <input type="hidden" name="access_key" value="ACCESS_KEY" />
            <input type="text" name="name" placeholder="Your Name" class="contact-inputs" required />
            <input type="email" name="email" placeholder="Your Email" class="contact-inputs" required />
            <textarea name="message" placeholder="Your Message" class="contact-inputs"></textarea>
            <button type="submit">
                Submit <img src="assets/arrow_icon.png" alt="arrow_icon" />
            </button>
        </form>
        <div class="contact-right">
        <div class="gmap-canvas">
        <iframe width="100%" height="520" id="gmap-canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.4387167081622!2d2.456647!3d48.849844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e672ab4cd3351f%3A0xbae1370d9f27e135!2sPhoneplus!5e0!3m2!1sfr!2sfr!4v1722515242974!5m2!1sfr!2sfr" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
        </div>
    </div>
</body>

</html>
<!-- <h2 class="tm-text-primary mb-5">Contact Page</h2>
<form id="contact-form" action="" method="POST" class="tm-contact-form mx-auto">
    <div class="form-group">
        <input type="text" name="name" class="form-control rounded-0" placeholder="Name" required />
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
    </div>
    <div class="form-group">
        <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Message" required=></textarea>
    </div>

    <div class="form-group tm-text-right">
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
</form>

<ul class="tm-contacts">
    <li>
        <a href="#" class="tm-text-gray">
            <i class="fas fa-envelope"></i>
            Email: info-meta-shop@company.com
        </a>
    </li>
    <li>
        <a href="#" class="tm-text-gray">
            <i class="fas fa-phone"></i>
            Tel: 010-020-0340
        </a>
    </li>
    <li>
        <a href="#" class="tm-text-gray">
            <i class="fas fa-globe"></i>
            URL: www.meta-shop.com
        </a>
    </li>
</ul>
<!-- Map -->
<div class="mapouter mb-4">
    <div class="gmap-canvas">
        <iframe width="100%" height="520" id="gmap-canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.4387167081622!2d2.456647!3d48.849844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e672ab4cd3351f%3A0xbae1370d9f27e135!2sPhoneplus!5e0!3m2!1sfr!2sfr!4v1722515242974!5m2!1sfr!2sfr" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
</div> -->