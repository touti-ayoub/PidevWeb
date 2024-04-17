<?php

namespace App\Controller;

use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\EmailVerifier;
use App\Security\LoginFormAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class EmailTestController extends AbstractController
{
    /**
     * @Route("/test/email", name="test_email")
     */
    public function testEmail(MailerInterface $mailer): Response
    {
        // Retrieve the DSN from environment variables
        $dsn = $_ENV['MAILER_DSN'];

        // Create a Transport object
        $transport = Transport::fromDsn($dsn);

        // Create a Mailer object
        $mailer = new Mailer($transport);

        // Create an Email object
        $email = (new Email());

        // Set the "From address"
        $email->from('titan.ayoub28@gmail.com');

        // Set the "To address"
        $email->to(
            'ayoub.touti@esprit.tn'
        );


        // Set a "subject"
        $email->subject('A Cool Subject!');

        // Set the plain-text "Body"
        $email->text('The plain text version of the message.');

        // Set HTML "Body"
        $email->html('
            <h1>
            The HTML version of the message.
            </h1>
        ');


        // Sending email with status
        try {
            // Send email
            $mailer->send($email);

            // Display custom successful message
            die('<style> * { font-size: 100px; color: #444; background-color: #4eff73; } </style><pre><h1>&#127881;Email sent successfully!</h1></pre>');
        } catch (TransportExceptionInterface $e) {
            // Display custom error message
            die('<style>* { font-size: 100px; color: #fff; background-color: #ff4e4e; }</style><pre><h1>&#128544;Error!</h1></pre>');

            // Display real errors
            # echo '<pre style="color: red;">', print_r($e, TRUE), '</pre>';
        }
    }
}