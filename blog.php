<?php
require_once __DIR__ . '/partials/header.php';

$posts_stmt = $connection->prepare("SELECT * FROM posts ORDER BY date_time DESC");
$posts_stmt->execute();
$posts = $posts_stmt->get_result();
?>


<section class="search_bar">
    <form class="container search_bar-container" action="<?= ROOT_URL ?>search.php" method="GET">
        <div>
            <i class="uil uil-search"></i>
            <input type="search" name="search" placeholder="Search">
        </div>
        <button type="submit" name="submit" class="btn">GO</button>
    </form>
</section>


<section class="category_buttons">
    <div class="container category_button-container">
        <?php
        $cat_stmt = $connection->prepare("SELECT id, title FROM categories");
        $cat_stmt->execute();
        $categories = $cat_stmt->get_result();
        ?>

        <?php while ($category = $categories->fetch_assoc()) : ?>
        <a class="category_button"
           href="<?= ROOT_URL ?>category_posts.php?id=<?= $category['id'] ?>">
            <?= htmlspecialchars($category['title']) ?>
        </a>
        <?php endwhile; ?>
    </div>
</section>


<section class="posts">

        <?php if ($posts->num_rows === 0): ?>
            <div class="alert_message error lg">
                <p>No posts found for this category</p>
            </div>
        <?php else: ?>

    <div class="container posts_container">

            <?php while ($post = $posts->fetch_assoc()) : ?>
                <a class="post" href="<?= ROOT_URL ?>post.php?id=<?= $post['id'] ?>">
                    <div class="post_thumbnail">
                        <img src="<?= ROOT_URL . 'images/' . htmlspecialchars($post['thumbnail']) ?>">
                    </div>

                    <div class="post_info">
                        <?php
                        $cat_stmt = $connection->prepare("SELECT id, title FROM categories WHERE id = ?");
                        $cat_stmt->bind_param("i", $post['category_id']);
                        $cat_stmt->execute();
                        $category = $cat_stmt->get_result()->fetch_assoc();
                        ?>

                        <span class="category_button">
                            <?= htmlspecialchars($category['title']) ?>
                        </span>

                        <h3 class="post_title">
                            <?= htmlspecialchars($post['title']) ?>
                        </h3>

                        <p class="post_body">
                            <?= htmlspecialchars(substr($post['body'], 0, 90)) ?>...
                        </p>

                        <?php
                        $auth_stmt = $connection->prepare("SELECT firstname, lastname, avatar FROM users WHERE id = ?");
                        $auth_stmt->bind_param("i", $post['author_id']);
                        $auth_stmt->execute();
                        $author = $auth_stmt->get_result()->fetch_assoc();

                        $timestamp = strtotime($post['date_time']);
                        $formattedDate = date("M d, Y - H:i", $timestamp);
                        ?>

                        <div class="post_author">
                            <div class="post_author-avatar">
                                <img src="<?= ROOT_URL . 'images/' . htmlspecialchars($author['avatar']) ?>">
                            </div>

                            <div class="post_author-info">
                                <h5>By: <?= htmlspecialchars($author['firstname'] . ' ' . $author['lastname']) ?></h5>
                                <small><?= $formattedDate ?></small>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endwhile; ?>

        <?php endif; ?>

    </div>
</section>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
