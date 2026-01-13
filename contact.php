<?php
// Contact form handler
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = filter_var(trim($_POST['subject']), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);
    
    // Validation
    $errors = [];
    
    if (empty($name)) {
        $errors[] = 'Name is required';
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Valid email is required';
    }
    
    if (empty($subject)) {
        $errors[] = 'Subject is required';
    }
    
    if (empty($message)) {
        $errors[] = 'Message is required';
    }
    
    if (empty($errors)) {
        // Email configuration
        $to = 'your.email@example.com'; // Replace with your email
        $email_subject = 'Portfolio Contact: ' . $subject;
        
        // Email body
        $email_body = "
        <html>
        <head>
            <title>New Contact Form Submission</title>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; text-align: center; }
                .content { background: #f9f9f9; padding: 30px; }
                .field { margin-bottom: 20px; }
                .label { font-weight: bold; color: #555; }
                .value { background: white; padding: 10px; border-left: 4px solid #667eea; margin-top: 5px; }
                .footer { text-align: center; padding: 20px; color: #666; font-size: 14px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>New Contact Form Submission</h2>
                </div>
                <div class='content'>
                    <div class='field'>
                        <div class='label'>Name:</div>
                        <div class='value'>" . htmlspecialchars($name) . "</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Email:</div>
                        <div class='value'>" . htmlspecialchars($email) . "</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Subject:</div>
                        <div class='value'>" . htmlspecialchars($subject) . "</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Message:</div>
                        <div class='value'>" . nl2br(htmlspecialchars($message)) . "</div>
                    </div>
                </div>
                <div class='footer'>
                    <p>This message was sent from your portfolio contact form.</p>
                    <p>Sent on: " . date('F j, Y, g:i a') . "</p>
                </div>
            </div>
        </body>
        </html>
        ";
        
        // Email headers
        $headers = [
            'MIME-Version: 1.0',
            'Content-type: text/html; charset=UTF-8',
            'From: ' . $name . ' <' . $email . '>',
            'Reply-To: ' . $email,
            'X-Mailer: PHP/' . phpversion()
        ];
        
        // Send email
        if (mail($to, $email_subject, $email_body, implode("\r\n", $headers))) {
            $response = [
                'status' => 'success',
                'message' => 'Thank you! Your message has been sent successfully. I\'ll get back to you soon.'
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Sorry, there was an error sending your message. Please try again later.'
            ];
        }
        
        // Log the contact attempt (optional)
        $log_entry = date('Y-m-d H:i:s') . " - Contact from: $name ($email) - Subject: $subject\n";
        file_put_contents('contact_log.txt', $log_entry, FILE_APPEND | LOCK_EX);
        
    } else {
        $response = [
            'status' => 'error',
            'message' => 'Please fix the following errors: ' . implode(', ', $errors)
        ];
    }
    
    // Return JSON response for AJAX requests
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
    
    // For regular form submissions, redirect back with message
    session_start();
    $_SESSION['contact_message'] = $response;
    header('Location: index.php#contact');
    exit;
}

// If accessed directly, redirect to home
header('Location: index.php');
exit;
?>