<?php
require_once '../includes/config.php';

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    if ($username && $email && $password) {
        $hashed = password_hash($password, PASSWORD_DEFAULT);

        // Default role always "user"
        $role = 'user';

        $stmt = $conn->prepare(
            "INSERT INTO users (username, email, password, role)
             VALUES (?, ?, ?, ?)"
        );
        $stmt->bind_param("ssss", $username, $email, $hashed, $role);

        if ($stmt->execute()) {
            header("Location: /auth/login.php");
            exit;
        } else {
            $error = "Registration failed.";
        }
    } else {
        $error = "All fields are required.";
    }
}

include '../includes/header.php';
?>

<!-- Fullscreen background wrapper -->
<div style="position: relative; min-height: 100vh; background: url('../assets/images/register-bg.jpg') no-repeat center center; background-size: cover;">

  <!-- Transparent overlay -->
  <div style="position: absolute; top:0; left:0; width:100%; height:100%; background-color: rgba(0,0,0,0);"></div>

 <!-- Centered register box -->
<div class="d-flex justify-content-center align-items-center" style="position: relative; z-index: 1; min-height: 100vh;">
  <div class="p-5 rounded" 
       style="background-color: rgba(255,255,255,0.9); max-width: 500px; width: 100%; box-shadow: 0 4px 12px rgba(0,0,0,0.2);">
    <h2 class="text-center" style="color: teal; font-size: 2rem;">Register</h2>

    <?php if ($error): ?>
      <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="POST">
      <input class="form-control mb-3" name="username" placeholder="Username" required style="font-size: 1.1rem; padding: 12px;">
      <input class="form-control mb-3" type="email" name="email" placeholder="Email" required style="font-size: 1.1rem; padding: 12px;">
      <input class="form-control mb-3" type="password" name="password" placeholder="Password" required style="font-size: 1.1rem; padding: 12px;">

      <button class="btn w-100" 
              style="background-color: teal; color: #fdf5e6; font-size: 1.2rem; padding: 12px; border-radius: 8px;">
        Register
      </button>
    </form>
  </div>
</div>

</div>

<?php include '../includes/footer.php'; ?>
