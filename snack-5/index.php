<?php
$p = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed semper arcu. Nullam ac sem vitae elit ornare scelerisque vel sed odio. Nunc quis purus egestas, pretium lacus eget, vehicula tortor. Nam condimentum, metus id euismod lacinia, lorem purus tempus nisl, at malesuada magna nisi nec nulla. Maecenas fermentum sodales enim et convallis. Pellentesque vitae dolor id orci venenatis accumsan ut id sapien. Nunc ultrices quam sed lacinia egestas. Aliquam elit orci, hendrerit id erat at, porta sodales metus. In fermentum viverra leo. Aliquam erat volutpat. Curabitur vitae sapien orci. Fusce congue lorem magna, nec dapibus nisl venenatis pellentesque. Integer laoreet ut eros vitae pretium. Pellentesque nec nisi eu magna facilisis viverra.';

$array = explode('.',$p);
foreach($array as $el){
    echo '<p>' . $el . '.' .'</p>';
}
?>