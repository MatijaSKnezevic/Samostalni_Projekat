<div class="container">

  <div class="row">
  <div class="col-sm-6">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link text-dark"  style="margin-right:30px;" href="index.php?page=home"><b>tinyempire</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="index.php?page=home">Home</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link text-dark" href="index.php?page=shop">Shop</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="index.php?page=about">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="index.php?page=contact">Contact</a>
    </li>
    <?php if(isset($_SESSION['korisnikLog'])):?>
    <li class="nav-item"><a class="nav-link text-dark" href="models/korisnici/logout.php">Log Out</a></li>
    <li class="nav-item"><a class="nav-link text-dark" href="index.php?page=korisnik">Korisnik</a></li>
    
    <?php elseif(isset($_SESSION['admin'])): ?>
    <li class="nav-item"><a class="nav-link text-dark" href="models/korisnici/logout.php">Log Out</a></li>
    <li class="nav-item"><a class="nav-link text-dark" href="index.php?page=admin">Admin Panel</a></li>
    
    
					<?php else: ?>
    <li class="nav-item"><a class="nav-link text-dark" href="index.php?page=logIn">Sing In</a></li>
    
    <li class="nav-item"><a class="nav-link text-dark" href="index.php?page=shopUser">New User</a></li>
					<?php endif; ?>
   
    </ul>
    </div>
    <div class="col-sm-6">
    <ul class="nav justify-content-end" >
    <a class="nav-link" href="index.php?page=shopUser"><svg width="18px" height="20px" viewBox="0 0 18 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
    <title>user (3)</title>
    <desc>Created with Sketch.</desc>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="shop1" transform="translate(-1487.000000, -33.000000)" fill="#000000" fill-rule="nonzero">
            <g id="user-(3)" transform="translate(1487.000000, 33.000000)">
                <path d="M8.75235507,9.98423913 C5.99974638,9.98423913 3.76021739,7.74474638 3.76021739,4.99210145 C3.76021739,2.23945652 5.99974638,0 8.75235507,0 C11.5049638,0 13.7444928,2.23949275 13.7444928,4.99213768 C13.7444928,7.74478261 11.5049638,9.98423913 8.75235507,9.98423913 L8.75235507,9.98423913 Z M8.75235507,1.24804348 C6.68775362,1.24804348 5.00826087,2.9275 5.00826087,4.99213768 C5.00826087,7.05677536 6.68771739,8.73623188 8.75235507,8.73623188 C10.8169928,8.73623188 12.4964493,7.05673913 12.4964493,4.99213768 C12.4964493,2.92753623 10.8169565,1.24804348 8.75235507,1.24804348 Z" id="Shape"></path>
                <path d="M16.864529,19.9684783 L0.640144928,19.9684783 C0.295217391,19.9684783 0.0161231884,19.6893841 0.0161231884,19.3444565 L0.0161231884,15.0488768 C0.0161231884,14.4041304 0.345797101,13.7984058 0.875978261,13.4668841 C5.56217391,10.5436232 11.9467754,10.5442391 16.6281159,13.4662681 C17.1588768,13.7983696 17.488587,14.4041304 17.488587,15.0488406 L17.488587,19.3444203 C17.488587,19.6893841 17.2094928,19.9684783 16.864529,19.9684783 L16.864529,19.9684783 Z M1.26416667,18.720471 L16.2405435,18.720471 L16.2405435,15.0488768 C16.2405435,14.8313406 16.1357246,14.6302174 15.9669203,14.5248188 C11.6822826,11.8502174 5.82543478,11.8483696 1.53721014,14.5254348 C1.36902174,14.6302536 1.26416667,14.8313406 1.26416667,15.048913 L1.26416667,18.720471 Z" id="Shape"></path>
            </g>
        </g>
    </g>
</svg></a>
    <a class="nav-link" href="index.php?page=shopBag"><svg width="18px" height="20px" viewBox="0 0 18 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
    <title>shopping-bag (1)</title>
    <desc>Created with Sketch.</desc>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="shop1" transform="translate(-1528.000000, -33.000000)" fill="#000000" fill-rule="nonzero">
            <g id="shopping-bag-(1)" transform="translate(1528.000000, 33.000000)">
                <path d="M17.3068237,19.3426514 L15.7867432,4.86709594 C15.7548523,4.56405641 15.4994202,4.33395387 15.1947021,4.33395387 L12.3376465,4.33395387 L12.3376465,3.68255617 C12.3376465,1.6520691 10.6855774,-1.11022302e-15 8.65509031,-1.11022302e-15 C6.6244507,-1.11022302e-15 4.9723816,1.6520691 4.9723816,3.68255617 L4.9723816,4.33395387 L2.11532594,4.33395387 C1.81060789,4.33395387 1.55517578,4.56405641 1.52328492,4.86709594 L0.00320434375,19.3426514 C-0.0143432813,19.5103455 0.040130625,19.6777344 0.152893047,19.8031616 C0.265808125,19.9284363 0.426635742,20 0.595245352,20 L16.7146301,20 C16.8833923,20 17.04422,19.9284363 17.1569824,19.8031616 C17.27005,19.6777344 17.3243713,19.5103455 17.3068237,19.3426514 Z M6.1628723,3.68255617 C6.1628723,2.30850219 7.28088379,1.1904907 8.65509031,1.1904907 C10.0291443,1.1904907 11.1471558,2.30850219 11.1471558,3.68255617 L11.1471558,4.33395387 L6.1628723,4.33395387 L6.1628723,3.68255617 Z M1.25625609,18.8095093 L2.65136719,5.52444457 L4.9723816,5.52444457 L4.9723816,6.83624266 C4.9723816,7.16491699 5.23895266,7.43148805 5.56762695,7.43148805 C5.89630125,7.43148805 6.1628723,7.16491699 6.1628723,6.83624266 L6.1628723,5.52444457 L11.1471558,5.52444457 L11.1471558,6.83624266 C11.1471558,7.16491699 11.4137268,7.43148805 11.7424011,7.43148805 C12.0710754,7.43148805 12.3376465,7.16491699 12.3376465,6.83624266 L12.3376465,5.52444457 L14.6586609,5.52444457 L16.053772,18.8095093 L1.25625609,18.8095093 Z" id="Shape"></path>
            </g>
        </g>
    </g>
</svg></a>
<a href="models/korisnici/logout.php">

<svg width="7px" height="2px" viewBox="0 0 7 2" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
    <title>minus</title>
    <desc>Created with Sketch.</desc>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
        <g id="cart" transform="translate(-1513.000000, -413.000000)" stroke="#000000">
            <g id="minus" transform="translate(1513.000000, 413.000000)">
                <line x1="3.5" y1="-1.5" x2="3.5" y2="3.5" id="Line" transform="translate(3.500000, 1.000000) rotate(-90.000000) translate(-3.500000, -1.000000) "></line>
            </g>
        </g>
    </g>
</svg>

</a>

    </ul>
    </div>
    
  </div>
  </div>