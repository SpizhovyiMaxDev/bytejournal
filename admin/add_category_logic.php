<?php
session_start();
require_once __DIR__ . '/../config/database.php';

if (!isset($_SESSION['user-id']) || !isset($_SESSION['user_is_admin'])) {
    header('Location: ' . ROOT_URL . 'signin.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = trim($_POST['title'] ?? '');
    $description = trim($_POST['description'] ?? '');

    if ($title === '') {
        $_SESSION['add-category-error'] = "Enter a category title.";
    } elseif ($description === '') {
        $_SESSION['add-category-error'] = "Enter a category description.";
    }

    if (isset($_SESSION['add-category-error'])) {
        $_SESSION['add-category-data'] = [
            'title' => $title,
            'description' => $description
        ];

        header('Location: ' . ROOT_URL . 'admin/add_category.php');
        exit;
    }

    $stmt = $connection->prepare(
        "INSERT INTO categories (title, description) VALUES (?, ?)"
    );
    $stmt->bind_param("ss", $title, $description);

    if ($stmt->execute()) {
        $_SESSION['add-category-success'] = "Category '{$title}' added successfully!";
        header('Location: ' . ROOT_URL . 'admin/manage_categories.php');
        exit;
    } else {
        $_SESSION['add-category-error'] = "Database error: failed to add category.";
        header('Location: ' . ROOT_URL . 'admin/add_category.php');
        exit;
    }
}

header('Location: ' . ROOT_URL . 'admin/add_category.php');
exit;
?>
