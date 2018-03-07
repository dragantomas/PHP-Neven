// EVENTS

//    CKEditor Init
document.getElementById('textAreaEditor') ? CKEDITOR.replace( 'textAreaEditor' ) : null;

const hidePasswordField = () => {
    for (let element of document.getElementsByClassName('forgot-password-hide')) {
        $(element).addClass('animated bounceOutLeft');
    }
    for (let element of document.getElementsByClassName('d-none')) {
        element.classList.toggle("animated");
        element.classList.toggle("bounceInRight");
        element.classList.toggle("d-none");
    }
};

const toggleCss=()=>{
    document.querySelector('#nocss').disabled ? document.querySelector('#nocss').disabled = false : document.querySelector('#nocss').disabled = true;
}