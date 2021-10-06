// JavaScript code
function search_support() {
    let input = document.getElementById('support-searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('support-card');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}