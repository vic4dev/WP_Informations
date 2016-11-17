document.querySelector("#Bouton").onclick = function() {
    if (window.getComputedStyle(document.querySelector('#tonDiv')).display == 'none') {
        document.querySelector("#tonDiv").style.display = "block";
    } else {
        document.querySelector("#tonDiv").style.display = "none";
        $('#Bouton').addClass('rouge');    
    }
}
