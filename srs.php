SRS Page Under Construction.

<button class="collapsible">Introduction</button>
<div class="content">
  <?php
    include('srs/intro.php');
  ?>
</div>
<button class="collapsible">Project Overview</button>
<div class="content">
  <?php
    include('srs/overview.php');
  ?>
</div>
<button class="collapsible">Hardware Specification</button>
<div class="content">
  <?php
    include('srs/hardware.php');
  ?>
</div>
<button class="collapsible">Maintenance Planning</button>
<div class="content">
  <?php
    include('srs/maintenance.php');
  ?>
</div>
<button class="collapsible">Functionality</button>
<div class="content">
  <?php
    include('srs/function.php');
  ?>
</div>
<button class="collapsible">Logging, Security, and More</button>
<div class="content">
  <?php
    include('srs/logging.php');
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