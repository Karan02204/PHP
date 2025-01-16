<?php 
//constants
const name = "karan";
const age = 20;
const y = null;
const b= true;
echo name."\n";
var_dump(name);
var_dump(age);
var_dump(y);
var_dump(b);

define("course",["PHP","java","HTML","Javascript"]); // define is used to create array
echo course[0]."\n"; // for terminal - next line - \n and for browser use <br>
echo course[1]."\n";
echo course[2]."\n";
echo course[3]."\n";
?>
