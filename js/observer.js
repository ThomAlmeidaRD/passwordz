var passListObserver = document.getElementById('passlist')
var bannerBtn = document.getElementById('banner-btn')
var bannerWarning = document.getElementById('banner-warning')
var banner = document.getElementById('banner')


function observer() {

    if (passListObserver.style.display != 'none') {
        bannerBtn.style.display = 'none'
        bannerWarning.style.display = 'none'
        banner.style.height = '40vh'
    } else if(passListObserver.style.display = 'flex') {
        bannerBtn.style.display = 'block'
        bannerWarning.style.display = 'block'
        banner.style.height = '70vh'
        console.log(passListObserver)
    }
}

