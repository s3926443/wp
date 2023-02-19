/* Insert your javascript here */
window.addEventListener('scroll', activeLink);

// changes links to active when in the relevent section on the page
function activeLink() {
    // console.clear();
    // console.log("Win Y: "+window.scrollY);
    let navlinks = document.getElementsByTagName('nav')[0].getElementsByTagName('a');
    // console.log(navlinks);
    let articles = document.getElementsByTagName('main')[0].getElementsByClassName('article');
    for (let x = 0; x < articles.length; x++) {
        let artop = articles[x].offsetTop - 80;
        let arbot = articles[x].offsetHeight + 19;
        // console.log(artop + ' ' + (artop+arbot));
        if (window.scrollY >= artop && window.scrollY < (artop+arbot)) {
            // console.log(articles[x].className+': current');
            navlinks[x].classList.add('current');
        } else {
            // console.log(articles[x].className + ':');
            navlinks[x].classList.remove('current');
        }
    }
}

function validate() {
    let validateResult = true;

    // Name regx and test
    let name = document.getElementById('userName').value;
    const nameRGEX = /^[a-zA-Z ]+$/;
    let nameResult = nameRGEX.test(name);
    //console.log(nameResult);

   
    // Email regx and test
    let email = document.getElementById('email').value;
    const emailRGEX = /^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-.]+$/;
    let emailResult = emailRGEX.test(email);
    //console.log(emailResult)

    // Mobile regx and test
    let mobile = document.getElementById('mobile').value;
    const mobileRGEX = /^(\(04\)|04|\+614)( ?\d){8}$/;
    let mobileResult = mobileRGEX.test(mobile);
    //console.log(mobileResult)

    if (!nameResult) {
        document.getElementById('userName').style.border = "2px solid red";
        validateResult = false;
    } else {
        document.getElementById('userName').style.border = "2px solid black";
    }

    if (!emailResult) {
        document.getElementById('email').style.border = "2px solid red";
        validateResult = false;
    } else {
        document.getElementById('email').style.border = "2px solid black";
    }

    if (!mobileResult) {
        document.getElementById('mobile').style.border = "2px solid red";
        validateResult = false;
    } else {
        document.getElementById('mobile').style.border = "2px solid black";
    }

    return validateResult;
}