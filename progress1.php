var testGiven=0;

var test1=prompt("HAVE YOU GIVEN HTML QUIZ");
if(test1==1){
	testGiven++;
}
else if(test1==0){
}
else{
	alert("VALUE SHOULD BE 0 OR 1");
}
console.log(testGiven);


var test2=prompt("HAVE YOU GIVEN PYTHON QUIZ");
if(test2==1){
	testGiven++;
}
else if(test2==0){
}
else{
	console.log("VALUE SHOULD BE 0 OR 1");
}
console.log(testGiven);


var test3=prompt("HAVE YOU GIVEN DBMS QUIZ");
if(test3==1){
	testGiven++;
}
else if(test3==0){
}
else{
	console.log("VALUE SHOULD BE 0 OR 1");
}
console.log(testGiven);


var test4=prompt("HAVE YOU GIVEN DS QUIZ");
if(test4==1){
	testGiven++;
}
else if(test4==0){
}
else{
	console.log("VALUE SHOULD BE 0 OR 1");
}
console.log(testGiven);


var test5=prompt("HAVE YOU GIVEN CP QUIZ");
if(test5==1){
	testGiven++;
}
else if(test5==0){
}
else{
	console.log("VALUE SHOULD BE 0 OR 1");
}
console.log(testGiven);


var test6=prompt("HAVE YOU GIVEN JAVA QUIZ");
if(test6==1){
	testGiven++;
}
else if(test6==0){
}
else{
	console.log("VALUE SHOULD BE 0 OR 1");
}
console.log(testGiven);


var test7=prompt("HAVE YOU GIVEN SQL QUIZ");
if(test7==1){
	testGiven++;
}
else if(test7==0){
}
else{
	console.log("VALUE SHOULD BE 0 OR 1");
}
console.log(testGiven);


var test8=prompt("HAVE YOU GIVEN CSS QUIZ");
if(test8==1){
	testGiven++;
}
else if(test8==0){
}
else{
	console.log("VALUE SHOULD BE 0 OR 1");
}

document.getElementById("progress1").style.fontSize = "xx-large";
document.getElementById("progress1").style.paddingTop = "40px";
document.getElementById("progress1").innerHTML=testGiven*12.5 +"% Completed";