/* Insert your javascript here */

// changes links to active when in the relevent section on the page
window.onscroll = function() {
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