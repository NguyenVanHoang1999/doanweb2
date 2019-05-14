<?php
  include_once "csdl.php";
  $result = select("select * from theloai");
  if ($result->num_rows > 0) {
						echo '<li class="nav-item dropdown">
								   <a class="nav-link" style="padding:0.5em 0em" href="#" id="navbarDropdown"><b><i class="fas fa-laptop"></i>LapTop</b></a>
								   <div class="dropdown-content" >';
								  
        
					while($row = $result->fetch_assoc()) {
						

						echo '<a class="dropdown-item"href="index.php?tl='.$row["matheloai"].'">'.$row["tentheloai"].'</a>
								   <div class="dropdown-divider"></div>';
							  
					}
					echo '
						</div>
								</li>';
	} 
				
	else {
		echo "";
	}
?>