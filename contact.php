<?php
require_once __DIR__ . '/partials/header.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/phpmailer/src/Exception.php';
require __DIR__ . '/phpmailer/src/PHPMailer.php';
require __DIR__ . '/phpmailer/src/SMTP.php';

$message_sent = false;
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name && $email && $subject && $message) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host = "smtp.gmail.com";
                $mail->SMTPAuth = true;
                $mail->Username = "max.spizhovyi@gmail.com";
                $mail->Password = "kpzufwqlzideapet"; 
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom("max.spizhovyi@gmail.com", "Contact Form");
                $mail->addAddress("max.spizhovyi@gmail.com");

                $mail->isHTML(true);
                $mail->Subject = "New Contact Form Message: $subject";
                $mail->Body = "
                    <h2>New Contact Form Message</h2>
                    <p><strong>Name:</strong> {$name}</p>
                    <p><strong>Email:</strong> {$email}</p>
                    <p><strong>Subject:</strong> {$subject}</p>
                    <p><strong>Message:</strong><br>{$message}</p>
                ";

                $mail->send();
                $message_sent = true;

            } catch (Exception $e) {
                $error_message = "Mailer error: " . $mail->ErrorInfo;
            }

        } else {
            $error_message = "Invalid email address.";
        }

    } else {
        $error_message = "Please fill out all fields.";
    }
}

?>

<section class="contact_main">
    <div class="container">
        <div class="contact_grid">
        <div class="contact_info">
                <h2>Developer Contact Info</h2>
                <p>Have a question about my project, coding journey, or want to collaborate? I'm always excited to connect with fellow students, instructors, or anyone passionate about tech.</p>

                <div class="contact_item">
                    <div class="contact_item-icon">
                        <i class="uil uil-envelope"></i>
                    </div>
                    <div class="contact_item-content">
                        <h4>Email Me</h4>
                        <p>max.spizhovyi@gmail.com</p>
                        <p class="contact_note">Fastest way to reach me — I check my inbox daily.</p>
                    </div>
                </div>

                <div class="contact_item">
                    <div class="contact_item-icon">
                        <i class="uil uil-phone"></i>
                    </div>
                    <div class="contact_item-content">
                        <h4>Call or Text</h4>
                        <p>+1 (778) 214-9938</p>
                        <p class="contact_note">Feel free to text anytime — calls welcomed during daytime.</p>
                    </div>
                </div>

                <div class="contact_item">
                    <div class="contact_item-icon">
                        <i class="uil uil-map-marker"></i>
                    </div>
                    <div class="contact_item-content">
                        <h4>Where I Study</h4>
                        <p>Okanagan College – Kelowna Campus</p>
                        <p>1000 K. L. O. Road</p>
                        <p>Kelowna, BC V1Y 4X8</p>
                        <p class="contact_note">You can usually find me coding in the lab, building projects, or grabbing coffee in the cafeteria.</p>
                    </div>
                </div>

                <div class="contact_item">
                    <div class="contact_item-icon">
                        <i class="uil uil-clock"></i>
                    </div>
                    <div class="contact_item-content">
                        <h4>Availability</h4>
                        <p>Monday – Friday: 9:00 AM – 6:00 PM</p>
                        <p>Saturday: 10:00 AM – 4:00 PM</p>
                        <p class="contact_note">Working on this project as part of my Computer Information Systems program.</p>
                    </div>
                </div>

                <div class="contact_socials">
                    <h4>Connect With Me</h4>
                    <p class="contact_note">Let’s grow, learn, and build cool projects together.</p>
                </div>
            </div>

            <div class="contact_form-container">
                <h2>Send Us a Message</h2>
                
                <?php if ($message_sent): ?>
                    <div class="alert_message success">
                        <p>Thank you! Your message has been sent successfully. We'll get back to you soon.</p>
                    </div>
                <?php endif; ?>

                <?php if ($error_message): ?>
                    <div class="alert_message error">
                        <p><?= htmlspecialchars($error_message) ?></p>
                    </div>
                <?php endif; ?>

                <form action="<?= ROOT_URL ?>contact.php" method="POST" class="contact_form">
                    <div class="form_control">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" id="name" placeholder="John Doe" required value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
                    </div>

                    <div class="form_control">
                        <label for="email">Your Email</label>
                        <input type="email" name="email" id="email" placeholder="john@example.com" required value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                    </div>

                    <div class="form_control">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" placeholder="How can we help?" required value="<?= htmlspecialchars($_POST['subject'] ?? '') ?>">
                    </div>

                    <div class="form_control">
                        <label for="message">Your Message</label>
                        <textarea name="message" id="message" rows="6" placeholder="Tell us what's on your mind..." required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                    </div>

                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/partials/footer.php';
?>
