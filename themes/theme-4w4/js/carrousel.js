
(function(){
    let boutton1 = document.getElementById('un')
    let boutton2 = document.getElementById('deux')
    let boutton3 = document.getElementById('trois')
    let carrousel = document.querySelector('.carrousel')

    boutton1.addEventListener('mousedown', function(){
        carrousel.style.transform = "translateX(0)"
        boutton1.style.opacity = "0.5"
        boutton2.style.opacity = "1"
        boutton3.style.opacity = "1"
    })

    boutton2.addEventListener('mousedown', function(){
        carrousel.style.transform = "translateX(-100vw)"
        boutton1.style.opacity = "1"
        boutton2.style.opacity = "0.5"
        boutton3.style.opacity = "1"
    })

    boutton3.addEventListener('mousedown', function(){
        carrousel.style.transform = "translateX(-200vw)"
        boutton1.style.opacity = "1"
        boutton2.style.opacity = "1"
        boutton3.style.opacity = "0.5"
    })
}())