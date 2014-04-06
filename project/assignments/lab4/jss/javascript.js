var counter = 0;
$(function() {

	var test = $("#userName").val("default text");
	$("p").hide();
	
	
	
	$("#button").click(function ()
	{
		$("p").slideDown(500);
	});
	
	setInterval(timerTick, 1000);
	
	
});

function timerTick()
{
	counter= counter+1; 
	 $("#timer").text(counter);
	 
	if(counter>=30)
	{
	 	$("#timer").text("You cannot answer the question!");
	    $("h2").hide();
	    
	}
	
}
$(function() {

	var test = $("#userName").val("default text");
	$("p").hide();
	
	
	
	$("#button").click(function ()
	{
		$("p").slideDown(500);
	});
	
});
setInterval (tickTime,3000);	





function changeUserName() {
                var userName = document.getElementById("username").value;
                document.getElementById("name").innerHTML = userName;
				document.getElementById("username").value="";
            }
			
