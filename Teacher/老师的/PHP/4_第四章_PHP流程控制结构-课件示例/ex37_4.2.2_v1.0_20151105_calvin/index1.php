﻿<?php
    //使用花括号“{}”将代码块括起来，通常代码块为一条时可以不加花括号
	for( $i = 1;  $i <= 10;  $i++ ) {			//一定不要在这条语句后面加上分号
		echo "这是第<b> $i </b>次循环执行输出的结果<br>";	
	}
	
    //将for语句中第一部分初始化条件提出来，放到for语句前面执行，但for语句中的分号要保留
	$i = 1;
	for( ;  $i <= 10;  $i++ ) {
		echo "这是第<b> $i </b>次循环执行输出的结果<br>";	
	}

    //再将第三部分的增量提出来，放到for语句的执行体最后，但也要将分号保留
	$i = 1;
	for( ;  $i <= 10; ) {
		echo "这是第<b> $i </b>次循环执行输出的结果<br>";
		$i++;	
	}

	/* 再把第二部分条件表达式放到语句体中，在for语句中两个分号是必须存在的，
	   这样就是一个死循环，必须在语句体中有退出的条件，这里使用break退出 */
	$i = 1;
	for( ; ; ) {
		if( $i > 10 )
			break;
		echo "这是第<b> $i </b>次循环执行输出的结果<br>";
		$i++;	
	}
?>
