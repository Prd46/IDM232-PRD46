<?php 
include_once __DIR__ . '/connection.php';
$page_name = 'Recipes'; // Gives a value if page name is missing
include_once __DIR__ .  "/components/header.php";

   ?>
<?php 
  if (isset($_GET['search'])){
    $search = $_GET['search'];
  } else {
    $search = '';
  }
//Search function looks for words in all fields. 
  $query = 'SELECT *';
  $query .= 'FROM recipes';
  $query .= " WHERE title LIKE '%{$search}%'";
  $query .= " OR prepTime LIKE '%{$search}%'";
  $query .= " OR rating LIKE '%{$search}%'";
  $query .= " OR ingredients LIKE '%{$search}%'";
  $query .= " OR steps LIKE '%{$search}%'";
  $query .= " ORDER BY title";
  $recipes = mysqli_query($db_connection, $query);
  if ($recipes->num_rows == 0){
    $recipes = false;
    }
?>
  <main>
  <?php include_once __DIR__ ."/components/sidebar.php"?>
  <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p>' . $_GET['error'] . '</p>';
          }         
?>

<div class="nonSidebar">

        <form action="<?php echo site_url(); ?>/search.php" method="GET" class="searchForm">
          <input 
            type="text" 
            class="header__search" 
            name="search" 
            id="search" 
            placeholder="What are you hungry for?"
            value="<?php echo $search; ?>">
        </form>
        <!--Structured like the admin search message, but does not list total count-->
        <?php if ($search) {
          echo '<h2>You searched for "' . $search . '"</h2>';
        } ?>
        <?php
        // If no results, echo no results
        if (!$recipes) {
            echo '<p>No results found</p>';
        }
?>

<?php
// If error query param exist, show error message
if (isset($_GET['error'])) {
  echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
}?>


  <?php 
 if ($recipes) {
  include_once __DIR__ . '/components/recipesTable_user.php'; 
  };
  ?>
<?php
    // If we have results, show them
?>
</div>
</div>
  </main>
  <?php include "components/footer.php" ?>