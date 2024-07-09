const button = document.getElementById("myButton");


function activateButton(){
    button.addEventListener('click', () => {
        window.location.href = 'DB.html';
    });
}


activateButton();
