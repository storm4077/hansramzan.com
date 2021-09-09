//NAVBAR SHRINK
function openNav() {
	document.getElementById("nav_menu").style.height = "100%";
//	document.body.style['overflow'] = 'hidden';
}

function closeNav() {
	document.getElementById("nav_menu").style.height = "0%";
//	document.body.style['overflow'] = 'auto';
}

 function showHideDiv(ele) {
                var srcElement = document.getElementById(ele);
                if (srcElement != null) {
                    if (srcElement.style.display == "block") {
                        srcElement.style.display = 'none';
                    }
                    else {
                        srcElement.style.display = 'block';
                    }
                    return false;
                }
            }