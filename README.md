# ByteJournal — Simple Social Media Platform

A fully functional **social blogging platform** built using **PHP**, **MySQL**, and custom MVC-style architecture.  
Users can register, create posts, like posts, comment, follow other users, explore a personalized feed, and manage content through an integrated admin panel.

This project was developed as part of **Project 4: Simple Social Media Platform**, satisfying all core requirements and advanced features (Follow System + Likes & Comments).

<a href="https://bytejournal.42web.io/">View Demo</a>

---

## 🚀 Features

### ✅ Core Functionality

- User registration and authentication
- User profiles with avatar + bio
- Create, edit, and delete posts
- Public feed with all posts sorted by newest
- Session-based navigation (Login, Logout, Profile)
- Category filtering and author information

---

### ⭐ Advanced Features (A‑Grade Requirements)

#### 1. Follow System

- Follow/unfollow users
- Personalized feed with followed users' posts
- Follow/Unfollow button on profile pages
- Follower/following counters

#### 2. Likes & Comments

- Like/unlike posts
- Dynamic like counter
- Comment under posts
- Comments show avatar, author name, timestamp
- Secure server-side validation

---

## 🛠️ Administrator Panel

- Secure admin-only control panel
- Manage posts, categories, and users
- CRUD operations for all entities
- Review/delete inappropriate content
- Dashboard analytics

---

## 📦 Installation

### 1. Clone the repository

```bash
git clone https://github.com/SpizhovyiMaxDev/blog-app.git
```

### 2. Move the project into XAMPP

```
C:/xampp/htdocs/blog-app/
```

### 3. Create database

- Open phpMyAdmin
- Create database: `blog_app`
- Import `database/blog_app.sql`

### 4. Configure environment

Edit `config/database.php`:

```php
$connection = new mysqli("localhost", "root", "", "blog_app");
```

### 5. Run locally

Start Apache & MySQL in XAMPP:

```
http://localhost/blog-app/
```

---

## 🧱 Project Structure

```
Directory structure:
└── spizhovyimaxdev-blog-app/
    ├── README.md
    ├── about.php
    ├── blog.php
    ├── category_posts.php
    ├── contact.php
    ├── index.php
    ├── logout.php
    ├── post.php
    ├── profile.php
    ├── search.php
    ├── services.php
    ├── signin.php
    ├── signin_logic.php
    ├── signup.php
    ├── signup_logic.php
    ├── admin/
    │   ├── add_category.php
    │   ├── add_category_logic.php
    │   ├── add_post.php
    │   ├── add_post_logic.php
    │   ├── add_user.php
    │   ├── add_user_logic.php
    │   ├── delete_category.php
    │   ├── delete_post.php
    │   ├── delete_user.php
    │   ├── edit-category-logic.php
    │   ├── edit_category.php
    │   ├── edit_post.php
    │   ├── edit_post_logic.php
    │   ├── edit_user.php
    │   ├── edit_user_logic.php
    │   ├── index.php
    │   ├── manage_categories.php
    │   ├── manage_users.php
    │   ├── config/
    │   │   └── database.php
    │   └── partials/
    │       └── header.php
    ├── config/
    │   └── database.php
    ├── css/
    │   └── style.css
    ├── database/
    │   └── blog_app.sql
    ├── js/
    │   └── main.js
    ├── partials/
    │   ├── footer.php
    │   └── header.php
    └── phpmailer/
        └── src/
            └── Exception.php
```

---

## 🧪 Requirements Implemented

### ✔ Required (Core)

- Authentication
- Post creation
- Public feed
- User sessions
- Post deletion
- Profile pages

### ✔ Advanced (for A‑grade)

- Follow System
- Likes
- Comments

---

## 🔧 Technologies Used

- **PHP (Procedural + MVC‑style modules)**
- **MySQL**
- **HTML5 / CSS3**
- **JavaScript**
- **XAMPP / Apache**

---

## 📄 License

Open for educational and portfolio use.

---

## 👤 Author

**Max Spizhovyi**  
GitHub: https://github.com/SpizhovyiMaxDev
