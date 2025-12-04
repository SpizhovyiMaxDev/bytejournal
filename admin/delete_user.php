<?php
session_start();
require_once __DIR__ . '/../config/database.php';

if (!isset($_SESSION['user-id']) || !isset($_SESSION['user_is_admin'])) {
    header('Location: ' . ROOT_URL . 'signin.php');
    exit;
}

if (!isset($_GET['id']) || !ctype_digit($_GET['id'])) {
    header('Location: ' . ROOT_URL . 'admin/manage_users.php');
    exit;
}

$id = (int) $_GET['id'];

if ($id === (int) $_SESSION['user-id']) {
    $_SESSION['delete-user-error'] = "You cannot delete your own account.";
    header('Location: ' . ROOT_URL . 'admin/manage_users.php');
    exit;
}

$stmt = $connection->prepare("SELECT firstname, lastname, avatar FROM users WHERE id = ? LIMIT 1");
$stmt->bind_param("i", $id);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

if (!$user) {
    $_SESSION['delete-user-error'] = "User not found.";
    header('Location: ' . ROOT_URL . 'admin/manage_users.php');
    exit;
}

$avatar_path = __DIR__ . '/../images/' . $user['avatar'];
if (is_file($avatar_path)) {
    unlink($avatar_path);
}

$stmt = $connection->prepare("SELECT thumbnail FROM posts WHERE author_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$thumbs = $stmt->get_result();

while ($thumb = $thumbs->fetch_assoc()) {
    $thumb_path = __DIR__ . '/../images/' . $thumb['thumbnail'];
    if (is_file($thumb_path)) {
        unlink($thumb_path);
    }
}

$stmt = $connection->prepare("DELETE FROM users WHERE id = ? LIMIT 1");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    $_SESSION['delete-user-success'] = "{$user['firstname']} {$user['lastname']} deleted successfully.";
} else {
    $_SESSION['delete-user-error'] = "Failed to delete user.";
}

header('Location: ' . ROOT_URL . 'admin/manage_users.php');
exit;
?>
