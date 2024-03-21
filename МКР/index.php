<?php
include 'logic.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="subpixel-antialiased font-Montserrat">
<nav class="sticky top-0 h-20 bg-[#243c5a] p-5 sm:px-24 xl:px-64">
  <div class="mx-auto flex justify-between items-center">
    <a href="#" class="uppercase text-white text-xl xl:text-3xl font-bold whitespace-no-wrap font-Montserrat leading-normal tracking-tighter"> <?php
$year = current_year();
echo  $year;
?></a>
  </div>
</nav>
<main>
  <section class="bg-white -mt-12 py-16">
    <div class="flex items-center justify-center min-h-screen grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1">
    <?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "modul_SQL";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$showMore = isset($_GET['houses']) ? $_GET['houses'] : 6;
$sql = "SELECT * FROM news LIMIT $showMore";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $house = new House(
            $row["title"],
            $row["description"],
            $row["image_url"]
        );
        echo $house->renderHTML();
    }
    $sql_count = "SELECT COUNT(*) as count FROM news";
    $result_count = $conn->query($sql_count);
    $row_count = $result_count->fetch_assoc();
    $total_houses = $row_count['count'];
    if ($showMore >= $total_houses) {
        echo "<div class=\"flex justify-end mt-4 mr-6\">";
        echo "<button class=\"bg-red-500 text-white font-bold py-2 px-4 rounded cursor-not-allowed\">No More Houses</button>";
        echo "</div>";
    } else {
        echo "<div class=\"flex justify-end mt-4 mr-6\">";
        echo "<a href=\"?houses=" . ($showMore + 6) . "\" class=\"bg-green-500 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded\">Show More</a>";
        echo "         Current value of \$showMore: $showMore";
        echo "</div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
    </div>
  </section>
<section class="bg-white -mt-12 py-16">
    <form class="px-6 pb-12 max-w-2xl mx-auto" method="post" action="">
        <div class="flex items-center border-b border-b-2 border-gray-400 py-10">
            <input class="appearance-none bg-transparent border-none w-full placeholder-gray-700 mr-3 py-1 leading-tight text-2xl focus:outline-none"
                   type="email" placeholder="Email Address" aria-label="Email Address" name="email" required>
        </div>
        <div class="py-5">
            <button type="submit" class="bg-green-500 px-8 py-5 rounded-lg text-white">Send</button>
        </div>
    </form>
</section>
</main>
<footer class="bg-gray-900 h-16">
<a class="weatherwidget-io" href="https://forecast7.com/uk/50d6226d25/rivne/" data-label_1="RIVNE" data-label_2="ПОГОДА" data-font="Times New Roman" data-icons="Climacons" data-days="5" data-theme="white_leather">RIVNE ПОГОДА</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</footer>
</body>
</html>
