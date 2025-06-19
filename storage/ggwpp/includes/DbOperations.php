<?php
require_once 'DbConnect.php';

class DbOperations {
    private $con;

    function __construct() {
        $db = new DbConnect();
        $this->con = $db->connect();
    }

    public function createUser($username, $password, $email) {
        if ($this->isUserExist($username, $email)) {
            return 0; // User already exists
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->con->prepare("INSERT INTO users (name, email, password, is_verified, is_deleted) VALUES (?, ?, ?, 0, 0)");
            $stmt->bind_param("sss", $username, $email, $hashed_password);

            if ($stmt->execute()) {
                return 1; // User created successfully
            } else {
                return 2; // Error occurred while creating user
            }
        }
    }

    private function isUserExist($username, $email) {
        $stmt = $this->con->prepare("SELECT id FROM users WHERE (name = ? OR email = ?) AND is_deleted = 0");
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }

    public function saveVerificationToken($email, $token) {
        $stmt = $this->con->prepare("UPDATE users SET verification_token = ?, verification_token_expiry = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE email = ?");
        $stmt->bind_param("ss", $token, $email);
        $stmt->execute();
    }

    public function verifyEmail($token) {
        $stmt = $this->con->prepare("SELECT email FROM users WHERE verification_token = ? AND verification_token_expiry > NOW()");
        $stmt->bind_param("s", $token);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->fetch();

        if ($email) {
            $stmt->close();
            $stmt = $this->con->prepare("UPDATE users SET is_verified = 1, verification_token = NULL, verification_token_expiry = NULL WHERE email = ?");
            $stmt->bind_param("s", $email);
            if ($stmt->execute()) {
                return 1; // Verified successfully
            } else {
                return 0; // Verification failed
            }
        } else {
            return 0; // Invalid or expired token
        }
    }

    public function deleteUser($email) {
        $stmt = $this->con->prepare("UPDATE users SET is_deleted = 1 WHERE email = ?");
        $stmt->bind_param("s", $email);
        return $stmt->execute();
    }
}
?>
