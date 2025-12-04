<?php
require_once __DIR__ . '/partials/header.php';


if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: ' . ROOT_URL . 'blog.php');
    exit;
}

$id = intval($_GET['id']);


$stmt = $connection->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$post = $stmt->get_result()->fetch_assoc();

if (!$post) {
    header('Location: ' . ROOT_URL . 'blog.php');
    exit;
}


$auth_stmt = $connection->prepare("SELECT firstname, lastname, avatar FROM users WHERE id = ?");
$auth_stmt->bind_param("i", $post['author_id']);
$auth_stmt->execute();
$author = $auth_stmt->get_result()->fetch_assoc();


$cat_stmt = $connection->prepare("SELECT title FROM categories WHERE id = ?");
$cat_stmt->bind_param("i", $post['category_id']);
$cat_stmt->execute();
$category = $cat_stmt->get_result()->fetch_assoc();

$postDateTime = new DateTime($post['date_time']);
$formattedDate = $postDateTime->format("F j, Y");
$formattedTime = $postDateTime->format("g:i A");
?>

<section class="singlepost">
    <div class="container singlepost_container">
        <h2><?= htmlspecialchars($post['title']) ?></h2>

        <div class="post_author">
            <div class="post_author-avatar">
            <a href="<?= ROOT_URL ?>profile.php?id=<?= $post['author_id'] ?>">
        <img src="<?= ROOT_URL . 'images/' . htmlspecialchars($author['avatar']) ?>">
    </a>
            </div>
            <div class="post_author-info">
            <h5>
    By:
    <a href="<?= ROOT_URL ?>profile.php?id=<?= $post['author_id'] ?>">
        <?= htmlspecialchars($author['firstname'] . ' ' . $author['lastname']) ?>
    </a>
</h5>

                <small>Posted on <?= $formattedDate ?> at <?= $formattedTime ?></small>
            </div>
        </div>

        <div class="singlepost_thumbnail">
            <img src="<?= ROOT_URL . 'images/' . htmlspecialchars($post['thumbnail']) ?>">
        </div>

        <div class="post_info">
            <a href="<?= ROOT_URL ?>category_posts.php?id=<?= $post['category_id'] ?>" 
               class="category_button">
               <?= htmlspecialchars($category['title']) ?>
            </a>

            <p class="post_body">
                <?= nl2br(htmlspecialchars($post['body'])) ?>
            </p>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
