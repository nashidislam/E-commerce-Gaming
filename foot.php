</div>

  <!-- Modal -->


      <!-- Modal content-->


<!-- Container (Contact Section) -->
<div id="contact" class="container">

  <br>
  <h3 class="text-center">From The Developers</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Aarohi</a></li>
    <li><a data-toggle="tab" href="#menu1">Nashid</a></li>
    <li><a data-toggle="tab" href="#menu2">Arman</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Data Filter Manager</h2>
      <p>"The best Dad is in the town.."</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Data Category Manager</h2>
      <p>"Guys I am the team leader, not your mom, so get your acts together."</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Data integration and front end dev</h2>
      <p>"I mean, Big Data is fun, then again I could be drunk."</p>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>CopyRight 2018 of Team ANA a school web project <a href="#" data-toggle="tooltip" title=""></a></p>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();

  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
