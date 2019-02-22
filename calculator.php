<?php
	$num;
	$num1;
	$operator = readline("Enter Operator[M=multiplication, D=division, S=subtraction, A=addition] : ");
	if ($operator == "A"){
	$num = readline("Enter Addend: ");
	$num1 = readline("Enter Addend: ");
	print"Sum :";
	echo $num+$num1;
	}
	elseif ($operator == "S"){
	$num = readline("Enter Minuend: ");
	$num1 = readline("Enter Subtrahend: ");
	print"difference :";
		echo $num-$num1;
	}
	elseif ($operator == "M"){
	$num = readline("Enter Multiplicand: ");
	$num1 = readline("Enter Multiplier: ");
	print"Product :";
		echo $num*$num1;
	}
	elseif ($operator == "D"){
	$num = readline("Enter dividend ");
	$num1 = readline("Enter divisor ");
	print"Equation :";
		echo $num/$num1;
	}
?>