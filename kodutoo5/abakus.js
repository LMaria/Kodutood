window.onload = function () {

    var parl = document.getElementsByClassName("bead");
    for (var i = 0; i < parl.length; i++) {
        parl[i].onclick = vahetaPoolt;


    }


    function vahetaPoolt() {
        if (this.style.cssFloat == "left") {
            this.style.cssFloat = "right";
        } else {
            this.style.cssFloat = "left";
        }
    }
    
    
}
			





