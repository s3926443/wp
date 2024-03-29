/* Insert your javascript here */
window.addEventListener('scroll', activeLink);

// Adds event listeners to each of the day selection buttons to update the total price
let formButtons = document.getElementsByName('day');
formButtons.forEach(element => {
    element.addEventListener('click', calculatePrice);
});

// Adds event listeners to each of the seats dropdown menus to update the total price
let formDropDowns = document.querySelectorAll('.seats');
formDropDowns.forEach(element => {
    element.addEventListener('change', calculatePrice);
})

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
        if (window.scrollY >= artop && window.scrollY < (artop + arbot)) {
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
    const nameRGEX = /^[-A-Za-z '.]{1,64}$/;
    let nameResult = nameRGEX.test(name);
    // console.log(nameResult);


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

    if (calculatePrice() == 0) {
        validateResult = false;
    }

    return validateResult;
}

function calculatePrice() {
    let pricingArr = document.getElementsByName('day');
    let pricing = 'fullprice';

    pricingArr.forEach(session => {
        if (session.checked) {
            pricing = session.dataset.pricing;
        }
    })
    let STAPrice = (document.getElementById('seatsSta').dataset[pricing] *
        document.getElementById('seatsSta').value);
    let FCAPrice = (document.getElementById('seatsFca').dataset[pricing] *
        document.getElementById('seatsFca').value);
    let STPPrice = (document.getElementById('seatsStp').dataset[pricing] *
        document.getElementById('seatsStp').value);
    let FCPPrice = (document.getElementById('seatsFcp').dataset[pricing] *
        document.getElementById('seatsFcp').value);
    let STCPrice = (document.getElementById('seatsStc').dataset[pricing] *
        document.getElementById('seatsStc').value);
    let FCCPrice = (document.getElementById('seatsFcc').dataset[pricing] *
        document.getElementById('seatsFcc').value);

    let seats = [STAPrice, FCAPrice, STPPrice, FCPPrice, STCPrice, FCCPrice];

    let totalPrice = 0;
    seats.forEach(seat => {
        totalPrice += seat;
    });

    document.getElementById('totalPrice').textContent = `Total Price: $${totalPrice.toFixed(2)}`;
    return totalPrice;
}


/*  A4 CODE  */
let rememberMeButton = document.getElementById('remember-me-button');
setUserData()
// button which will save customers name, email and mobile number for future vistiting
// after they make a booking


// if the user consents to have data saved on local storage it will remember it, otherwise it will
// remove data from local storage
function toggleUserData(consent) {
    if (consent === false) {
        localStorage.clear()
    } else {
        let name = document.getElementById('userName').value;
        let email = document.getElementById('email').value;
        let mobile = document.getElementById('mobile').value;

        localStorage.setItem('name', name);
        localStorage.setItem('email', email);
        localStorage.setItem('mobile', mobile);
        localStorage.setItem('checkBox', 'set')
    }
}

// pre-fills form with user data from local storage
function setUserData() {
    if (localStorage.getItem('checkBox') === 'set') {
        rememberMeButton.classList.toggle('active');
        rememberMeButton.textContent = "Forget Me";
    }
    document.getElementById('userName').value = localStorage.getItem('name');
    document.getElementById('email').value = localStorage.getItem('email');
    document.getElementById('mobile').value = localStorage.getItem('mobile');
}

// event listener for the rememberMeButton which toggles the style of the button
// to make it button like. As well as saving or deleting users localStorage.
rememberMeButton.addEventListener('click', () => {
    rememberMeButton.classList.toggle('active');
    if (rememberMeButton.classList.contains('active')) {
        rememberMeButton.textContent = "Forget Me";
        toggleUserData(true);
    } else {
        rememberMeButton.textContent = "Remember Me"
        toggleUserData(false);
    }
});