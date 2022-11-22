<?php
if (!isset($recipes)) {
    echo '$users variable is not defined. Please check the code.';
}
?>
<table class="min-w-full divide-y divide-gray-300">
  <thead class="bg-gray-50">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Prep Time</th>
      <th scope="col">Rating</th>
      <th scope="col">Ingredients</th>
      <th scope="col">Steps</th>
    </tr>
  </thead>
  <tbody class="divide-y divide-gray-200 bg-white">
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($recipes)) {
        echo "
          <tr>
            <td>{$recipe['id']}</td>
            <td>{$recipe['image_path']}</td>
            <td>{$recipe['title']}</td>
            <td>{$recipe['prepTime']}</td>
            <td>{$recipe['rating']}</td>
            <td>{$recipe['ingredients']}</td>
            <td>{$recipe['steps']}</td>
          </tr>";
    }
?>
  </tbody>
</table>