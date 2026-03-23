<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $name = filter_var($_POST["name"] ?? '', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($_POST["email"] ?? '', FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST["message"] ?? '', FILTER_SANITIZE_SPECIAL_CHARS);
    
    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        http_response_code(400);
        echo json_encode(["status" => "error", "message" => "Please fill all required fields."]);
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(["status" => "error", "message" => "Invalid email format."]);
        exit;
    }
    
    // Here you would typically send an email, save to database, etc.
    // For demonstration, we just simulate a successful processing
    
    /* Example Mail sending:
    $to = "your-email@example.com";
    $subject = "New Contact from Portfolio: $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";
    
    if(mail($to, $subject, $body, $headers)) {
        echo json_encode(["status" => "success", "message" => "Message sent successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to send message."]);
    }
    */
    
    // Simulated success response
    echo json_encode(["status" => "success", "message" => "Thank you, $name! Your message has been sent successfully."]);
    
} else {
    http_response_code(405);
    echo json_encode(["status" => "error", "message" => "Method not allowed."]);
}
?>