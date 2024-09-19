<?php
// Function to calculate age based on date of birth
function calculateAge($dob) {
    $dob = new DateTime($dob); S
    $today = new DateTime();  
    $age = $today->diff($dob); 
    return $age->y;            
}

// Capture user inputs 
$name = "KALANZI CHARLES";           
$dateOfBirth = "2000-01-1";   
$homeAddress = "MATUGGA - KAMPALA"; 

// Calculate the age
$age = calculateAge($dateOfBirth);

// Output the welcome message
echo "Welcome home, $name! <br>";
echo" You are currently $age years old today.<br>";
echo" It's good to have you back at $homeAddress.\n";
?>