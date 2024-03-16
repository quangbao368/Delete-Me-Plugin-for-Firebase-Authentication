<?php

// Replace with your Firebase project credentials (keep these secure!)
$firebaseProjectId = 'PROJECT ID';
$firebaseClientEmail = 'Email';
$firebasePrivateKey = 'API KEY';

add_action( 'delete_user', 'delete_user_from_firebase' );

function delete_user_from_firebase( $user_id ) {

  // Include Firebase Admin SDK
  require 'vendor/autoload.php';

  $firebase = new \Kreait\Firebase\Firebase([
    'projectId' => $firebaseProjectId,
    'clientEmail' => $firebaseClientEmail,
    'privateKey' => $firebasePrivateKey,
  ]);

  // Get Auth instance
  $auth = $firebase->auth();

  // Delete user based on ID (assuming user ID matches Firebase UID)
  $auth->deleteUser($user_id);
}

?>