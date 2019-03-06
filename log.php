
<h2>Week 3: Mar 4 - Mar 8</h2>
<button class="collapsible">Log 13: Mar 6, 2019</button>
<div class="content">
  <?php
    include('logs/day13.php');
  ?>
</div>
<button class="collapsible">Log 12: Mar 5, 2019</button>
<div class="content">
  <?php
    include('logs/day12.php');
  ?>
</div>
<button class="collapsible">Log 11: Mar 4, 2019</button>
<div class="content">
  <?php
  	include('logs/day11.php');
  ?>
</div>
<h2>Week 2: Feb 25 - Mar 1 </h2>
<button class="collapsible">Log 10: Mar 1, 2019</button>
<div class="content">
  <?php
  	include('logs/day10.php');
  ?>
</div>

<button class="collapsible">Log 9: Feb 28, 2019</button>
<div class="content">
  <?php
  	include('logs/day9.php');
  ?>
</div>

<button class="collapsible">Log 8: Feb 27, 2019</button>
<div class="content">
  <?php
  	include('logs/day8.php');
  ?>
</div>

<button class="collapsible">Log 7: Feb 26, 2019</button>
<div class="content">
  <?php
  	include('logs/day7.php');
  ?>
</div>

<button class="collapsible">Log 6: Feb 25, 2019</button>
<div class="content">
  <?php
  	include('logs/day6.php');
  ?>
</div>

<h2>Week 1: Feb 18 - Feb 22 </h2>
<button class="collapsible">Log 5: Feb 22, 2019</button>
<div class="content">
  <?php
  	include('logs/day5.php');
  ?>
</div>

<button class="collapsible">Log 4: Feb 21, 2019</button>
<div class="content">
  <?php
  	include('logs/day4.php');
  ?>
</div>

<button class="collapsible">Log 3: Feb 20, 2019</button>
<div class="content">
  <?php
  	include('logs/day3.php');
  ?>
</div>

<button class="collapsible">Log 2: Feb 19, 2019</button>
<div class="content">
  <?php
  	include('logs/day2.php');
  ?>
</div>

<button class="collapsible">Log 1: Feb 18, 2019</button>
<div class="content">
  <?php
  	include('logs/day1.php');
  ?>
</div>

<h2>Week 0: Feb 1 </h2>
<button class="collapsible">Log 0: Feb 1, 2019</button>
<div class="content">
  <?php
  	include('logs/day0.php');
  ?>
</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
