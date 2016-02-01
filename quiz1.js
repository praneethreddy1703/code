function val(){

  var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("get","quiz.php",true);

	 xmlhttp.onreadystatechange = function () 
	 {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
     {
     	var result = xmlhttp.responseText;
      document.getElementById("test").innerHTML = result;
    }
  }
  xmlhttp.send();


}
function checkAnswer(){
  choices= document.getElementsByName("choices");
  for(var i=0; i<choices.length; i += 1){
    if(choices[i].checked)
      choice = choices[i].value;
  }
  alert(choice);
  var a = new XMLHttpRequest();
  var data="answ="+choice;
  a.open("post","quiz.php",true);
  a.setRequestHeader("Content-type", "application/x-www-form-urlencoded");  
  a.onreadystatechange = function () 
   {
    if (a.readyState == 4 && a.status == 200)
     {
      var result = a.responseText;
      document.getElementById("test").innerHTML = result;
    }
  }
  a.send(data);


}

	