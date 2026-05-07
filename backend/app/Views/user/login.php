<?php
session_start();
require_once '../includes/config.php';

$error = "";

// If already logged in, send to home page
if (isset($_SESSION['username'])) {
    header("Location: /index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT username, password, role FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['role']     = $user['role'];

            // Redirect to home page after login
            header("Location: /index.php");
            exit;
        } else {
            $error = "Incorrect password.";
        }
    } else {
        $error = "User not found.";
    }
}

include '../includes/header.php';
?>

<!-- Fullscreen background wrapper -->
<div style="position: relative; min-height: 100vh; background: url('../assets/images/login-bg.jpg') no-repeat center center; background-size: cover;">

  <!-- Transparent overlay -->
  <div style="position: absolute; top:0; left:0; width:100%; height:100%; background-color: rgba(0,0,0,0);"></div>

<!-- Centered login box -->
<div class="d-flex justify-content-center align-items-center" style="position: relative; z-index: 1; min-height: 100vh;">
  <div class="p-5 rounded" 
       style="background-color: rgba(255,255,255,0.9); max-width: 500px; width: 100%; box-shadow: 0 4px 12px rgba(0,0,0,0.2);">
    <h2 class="text-center" style="color: teal; font-size: 2rem;">Login</h2>

    <?php if ($error): ?>
      <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="POST">
      <input class="form-control mb-3" name="username" placeholder="Username" required style="font-size: 1.1rem; padding: 12px;">
      <input class="form-control mb-3" type="password" name="password" placeholder="Password" required style="font-size: 1.1rem; padding: 12px;">
      <button class="btn w-100" 
              style="background-color: teal; color: #fdf5e6; font-size: 1.2rem; padding: 12px; border-radius: 8px;">
        Login
      </button>
    </form>
  </div>
</div>

</div>

<?php include '../includes/footer.php'; ?>
