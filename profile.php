<?php
require 'partials/header.php';
require 'config/database.php';

if (!isset($_GET['id'])) {
    header('Location: ' . ROOT_URL . 'blog.php');
    exit;
}

$user_id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

// Fetch user
$user_query = "SELECT username, avatar FROM users WHERE id = $user_id";
$user_result = mysqli_query($connection, $user_query);

if (mysqli_num_rows($user_result) != 1) {
    echo "<h2 style='text-align:center;color:white;margin-top:50px;'>User not found</h2>";
    require 'partials/footer.php';
    exit;
}

$user = mysqli_fetch_assoc($user_result);

// Fetch posts
$posts_query = "
    SELECT posts.id, posts.title, categories.title AS category_title
    FROM posts
    LEFT JOIN categories ON posts.category_id = categories.id
    WHERE posts.author_id = $user_id
    ORDER BY posts.date_time DESC
";
$posts_result = mysqli_query($connection, $posts_query);
?>

<section class="profile-header">
    <div class="container profile-header-container">
        <div class="profile-avatar">
            <img src="<?= ROOT_URL . 'images/' . ($user['avatar'] ?? 'user.jpg') ?>" alt="User Avatar">
        </div>
        <h2 class="profile-username"><?= htmlspecialchars($user['username']) ?></h2>
    </div>
</section>

<section class="dashboard profile-dashboard-wrapper">
    
    <div class="container dashboard_container">

        <main>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (mysqli_num_rows($posts_result) > 0): ?>
                        <?php while ($post = mysqli_fetch_assoc($posts_result)) : ?>
                            <tr>
                                <td>
                                    <a href="<?= ROOT_URL ?>post.php?id=<?= $post['id'] ?>">
                                        <?= htmlspecialchars($post['title']) ?>
                                    </a>
                                </td>
                                <td><?= htmlspecialchars($post['category_title']) ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="2">This user has not created any posts.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </main>

    </div>
</section>

<?php require 'partials/footer.php'; ?>
