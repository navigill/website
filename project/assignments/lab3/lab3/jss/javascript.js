
$(function() {

	var test = $("#userName").val("default text");
	$("p").hide();
	
	
	
	$("#button").click(function ()
	{
		$("p").slideDown(500);
	});
	
});







function changeUserName() {
                var userName = document.getElementById("username").value;
                document.getElementById("name").innerHTML = userName;
				document.getElementById("username").value="";
            }
			
