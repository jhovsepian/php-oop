<!-- Example 1 -->
<?php
if(is_integer(10))
echo "It is an integer";

else'It is not an integer';
	var_dump(is_integer(123));
	var_dump(is_integer(456));	
	var_dump(is_integer(789));
	var_dump(is_integer(987));	
?>

<!-- Example 2 -->
<?php
if(is_object(10))
echo "It is an object";

else'It is not an object';
	var_dump(is_object(fish));
	var_dump(is_object(turtle));	
	var_dump(is_object(dog));
	var_dump(is_object(cat));	
?>

<!-- Example 3 -->
<?php
if(is_double(10))
echo "It is a double";

else'It is not a double';
	var_dump(is_double(22));
	var_dump(is_double(33));	
	var_dump(is_double(44));
	var_dump(is_double(55));	
?>