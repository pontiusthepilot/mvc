function setup() {
  $('#postComment').click() {
    
  	if ($("#comment").val() != '') {
		$('#posComment').append('<li>' + $("#comment").val() + '</li>');
		$("#comment").val('');
  	}
  }
}

// Example case. 
document.body.innerHTML = `
<ul id='commentList'>
</ul>
<form>
  <input type='text' id='comment'/>
  <input type='button' id='postComment' value='Post'/>
</form>`;

setup();

$("#comment").val("test");
$("#postComment").click();
console.log(document.body.innerHTML);