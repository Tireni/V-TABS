$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = 'vtabsagency@gmail.com';
$subject = 'New form submission';
$body = "Name: $name\nEmail: $email\nMessage: $message";
$headers = "From: $email";

// Send the email
mail($to, $subject, $body, $headers);
