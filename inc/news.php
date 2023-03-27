<div id="blog">
  <div class="blog-heading">
  </div>

  <div class="blog-container">
    <?php
      // Connect to the database
      $conn = mysqli_connect('localhost', 'samgray', 'qhfQpSI1nQ6@qd0v', 'samgray_netmatters');
      
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      
      // SQL query to retrieve all data from the 'news' table
      $sql = "SELECT title, description, author, date, class, tag, image_path FROM news";
      
      // Execute the query and get the result set
      $result = mysqli_query($conn, $sql);
      
      // Loop through the result set and output the HTML for each record
      while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="blog-box">
          <div class="blog-img">
            <img src="<?php echo $row['image_path']; ?>" alt="">
            <a href="#"><?php echo $row['class']; ?></a>
          </div>
          <div class="blog-shadow">
            <div class="blog-text">
              <h3 class="blog-title"><?php echo $row['title']; ?></h3>
              <p><?php echo $row['description']; ?></p>
              <div class="readmore-btn">            
                <a href="#">Read More</a>
              </div>
            </div>
            <div class="logo-date">
              <img src="./img/netmatters-small.png" alt="">
              <span><?php echo $row['author']; ?></span><br>
              <p><?php echo $row['date']; ?></p>
            </div>
          </div>
        </div>
        <?php
      }
      
      // Close the database connection
      mysqli_close($conn);
    ?>
  </div>
</div>