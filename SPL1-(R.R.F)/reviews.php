<?php
// Update the details below with your MySQL details
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'rrf';
try {
    $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
} catch (PDOException $exception) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to database!');
}


// Page ID needs to exist, this is used to determine which reviews are for which page.
if (isset($_GET['restaurantid'])) {
    if (isset($_POST['username'], $_POST['rating'], $_POST['review'])) {
        // Insert a new review (user submitted form)
        $stmt = $pdo->prepare('INSERT INTO reviews (restaurantid, username, review, rating, submitdate) VALUES (?,?,?,?,NOW())');
        $stmt->execute([$_GET['restaurantid'], $_POST['username'], $_POST['review'], $_POST['rating']]);
        exit('Your review has been submitted!');
    }
    require_once 'dbConfig.php';
    // Get all reviews by the Page ID ordered by the submit date
    $stmt = $pdo->prepare("SELECT * FROM reviews, restaurant, user WHERE restaurantid = ? AND reviews.restaurantid = restaurant.restaurantid AND restaurant.status = 1 AND restaurant.restaurantname = '$row[restaurantname]' AND user.username = reviews.username ORDER BY submitdate DESC");
    $stmt->execute([$_GET['restaurantid']]);
    $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Get the overall rating and total amount of reviews
    $stmt = $pdo->prepare('SELECT AVG(rating) AS overall_rating, COUNT(*) AS total_reviews FROM reviews WHERE restaurantid = ?');
    $stmt->execute([$_GET['restaurantid']]);
    $reviews_info = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    exit('No');
}
?>

<div class="overall_rating">
    <span class="num"><?=number_format($reviews_info['overall_rating'], 1)?></span>
    <span class="stars"><?=str_repeat('&#9733;', round($reviews_info['overall_rating']))?></span>
    <span class="total"><?=$reviews_info['total_reviews']?> reviews</span>
</div>
<a href="#" class="write_review_btn">Write Review</a>
<div class="write_review">
    <form>
        <input name="username" type="text" placeholder="Your Name" required>
        <input name="rating" type="number" min="1" max="5" placeholder="Rating (1-5)" required>
        <textarea name="review" placeholder="Write your review here..." required></textarea>
        <button type="submit">Submit Review</button>
    </form>
</div>
<?php foreach ($reviews as $review): ?>
<div class="review">
    <h3 class="username"><?=htmlspecialchars($review['username'], ENT_QUOTES)?></h3>
    <div>
        <span class="rating"><?=str_repeat('&#9733;', $review['rating'])?></span>
        <span class="date"><?=($review['submitdate'])?></span>
    </div>
    <p class="content"><?=htmlspecialchars($review['review'], ENT_QUOTES)?></p>
</div>
<?php endforeach ?>