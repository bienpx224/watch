window.server_url = "http://localhost/watch";
// window.server_url = "";
function backTicket(){
	if ('referrer' in document) {
        if(window.location.href == document.referrer || document.referrer == ""){
            window.location = server_url+'/';
        }else window.location = document.referrer;
    } else {
        window.history.back();
    }
}