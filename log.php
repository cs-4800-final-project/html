Logs page under Construction




<button class="collapsible">Log 2: Feb 19,2019</button>
<div class="content">
  <?php
  	include('logs/day2.php');
  ?>
</div>

<button class="collapsible">Log 1: Feb 18,2019</button>
<div class="content">
  <?php
  	include('logs/day1.php');
  ?>
</div>


<button class="collapsible">Log 0: Feb 1,2019</button>
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
