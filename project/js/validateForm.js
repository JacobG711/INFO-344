

function validateSearch() {
	if(!($("#searchBox").val().match('/[a-zA-Z]+/'))) {
		$("#searchBox").addClass("bg-danger");
		alert("Please Enter a Valid Name");
		return false;
	} else return true;
}