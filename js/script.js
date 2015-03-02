
	
// add_member function
function add_contact() {
	// initialisation
	var url = 'add_contact.php';
	var method = 'POST';
	var params = 'first_name='+document.getElementById('first_name').value;
	params += '&last_name='+document.getElementById('last_name').value;
	params += '&phone_number='+document.getElementById('phone_number').value;
	var container_id = 'list_container' ;
	var loading_text = '<img src="images/ajax_loader.gif">' ;
	// call ajax function
	ajax (url, method, params, container_id, loading_text) ;
}

// delete_member function
function delete_contact(id) {
	if (confirm('Are you sur to delete this contact ?')) {
		// initialisation
		var url = 'delete_contact.php';
		var method = 'POST';
		var params = 'id='+id;
		var container_id = 'list_container' ;
		var loading_text = '<img src="images/ajax_loader.gif">' ;
		// call ajax function
		ajax (url, method, params, container_id, loading_text) ;
	}
}

// ajax : basic function for using ajax easily
function ajax (url, method, params, container_id, loading_text) {
    try { // For: chrome, firefox, safari, opera, yandex, ...
    	xhr = new XMLHttpRequest();
    } catch(e) {
	    try{ // for: IE6+
	    	xhr = new ActiveXObject("Microsoft.XMLHTTP");
	    } catch(e1) { // if not supported or disabled
		    alert("Not supported!");
		}
	}
	xhr.onreadystatechange = function() {
						       if(xhr.readyState == 4) { // when result is ready
							       document.getElementById(container_id).innerHTML = xhr.responseText;
							   } else { // waiting for result 
							       document.getElementById(container_id).innerHTML = loading_text;
							   }
						   	}
	xhr.open(method, url, true);
	xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xhr.send(params);
}