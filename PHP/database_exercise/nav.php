<nav>
  <ul>
    <li>
      <a href="index.php">Home</a>
    </li>
    <li>
      <a href="movies.php">Movies List</a>
    </li>
    <li>
      <a href="new-movie.html">New Movie</a>
    </li>
    <?php if (!isset($_SESSION['email'])) : ?>
      <li>
        <a href="login.php">Log In</a>
      </li>
      <li>
        <a href="register.php">Register</a>
      </li>
    <?php endif; ?>

    <?php if (isset($_SESSION['email'])) : ?>
      <li>
        <a href="account.php">Account page</a>
      </li>
    <?php endif; ?>
    <li>
      Amount : <?= $amount; ?>
    </li>
  </ul>
</nav>