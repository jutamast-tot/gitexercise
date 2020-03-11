<html>
<title>multiple</title>
<p> 
<script>

  function funcMulti(){
	var num_ = document.getElementById("number").value;
	var result = num_ *3;
	document.getElementById("resulT").innerHTML= result;
  }
  function funcconvert(){
	var num1_ = document.getElementById("temp").value;
        var result = num1_ *3;
        document.getElementById("resulK").innerHTML= result;

  }

  function funcdiv(){
        var num2_ = document.getElementById("numdiv").value;
        var result = num2_/2;
        document.getElementById("resuld").innerHTML= result;

  }

</script>
   
<body>
<h5>multiple of 3</h5>  
  <label>จำนวน:</label>
<input type="text" name="number" id="number"/>
 <label>บาท</label> 
<div id="resulT"></div>
<input type="submit" value="Submit" onclick="funcMulti();">

<h5>convert c to k</h5>
  <label>องศาเซลเซียส:</label>
<input type="text" name="temp" id="temp"/>
 <label>เคลวิน</label>
<div id="resulK"></div>
<input type="submit" value="Submit" onclick="funcconvert();">


<h5>division of  2</h5>
  <label>num division</label>
<input type="text" name="numdiv" id="numdiv"/>
<div id="resuld"></div>
<input type="submit" value="Submit" onclick="funcdiv();">

</body>
</html>
