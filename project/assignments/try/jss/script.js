var sec = 0;  //declare global variable called sec and assign 0
var mins = 0;  //declare global variable called mins and assign 0
var hour = 0;  //declare global variable called hour and assign 0
function changestat(){   //declare a function called changestat()
var a=document.getElementById('butn').value;  //take the value by id called 'butn' and store that in a variable called 'a'
if(a=='Start'){  //declare if block if a is equal to 'Start'
document.getElementById('butn').value='Pause';  //change the value of 'butn' from 'Start' to 'Pause'
}  //end of if block
else if(a=='Pause'){  //declare else if block if a is equal to 'Pause'
document.getElementById('butn').value='Start';  //change the value of 'butn' from 'Pause' to 'Start'
} //end of else if block
stopwatch();  //call the function called stopwatch()
}  //end of changestat() function 
function stopwatch(){ //declare a function called stopwatch()
var x=document.getElementById('butn').value; //take the value by id called 'butn' and store that in a variable called 'x'
if (x=='Pause'){  //declare if block if x is equal to 'Pause'
   sec++;  //keep adding '1' to the value of sec variable
  if (sec == 60) {  //declare if block if sec is equal to '60'
   sec = 0;  //set the value of sec to '0'
   mins = mins + 1;   //add '1' to current value of mins
}  //end of if block
  else {  //start of else block
   mins = mins;  //the value of mins remains same
}  //end of else block
  if (mins == 60) {  //declare if block if mins is equal to '60'
   mins = 0;   //set the value of mins to '0'
   hour += 1;   //add '1' to current value of hours
}  //end of if block
if (sec<=9) { //declare if block if sec is less than or equal to '9'
sec = "0" + sec;   //here we add 0 in front of the number  eg: 01
}  //end of if block
 var stwa=document.getElementById('stwa'); //take the element by id called 'stwa' and store that in a variable called 'stwa'

 stwa.value= ((hour<=9) ? "0"+hour : hour) + " : " + ((mins<=9) ? "0" + mins : mins) + " : " + sec;  //set the value in stwa text field  eg:00:02:01

SD=window.setTimeout("stopwatch();", 1000);  //this line will refresh the value of stwa textfield every second
}  //end of if block
}  //end of stopwatch() function
function reset(){   //declare a function called reset()
var stwa=document.getElementById('stwa');  //take the element by id called 'stwa' and store that in a variable called 'stwa'
sec = 0;  //set the value of sec to '0'
mins = 0; //set the value of mins to '0'
hour = 0;  //set the value of hour to '0'
stwa.value='00 : 00 : 00';  //display 00:00:00 in text field
changestat();  //call the function called changestat()
}  //end of reset() function