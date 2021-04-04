
(function(){
    let bout = document.querySelectorAll('.rad-carrousel')
    console.log(bout.length)
    let carrousel = document.querySelector('.carrousel-2')
    bout[0].checked = true
    let k = 0;
    for(const bt of bout)
    {
        bt.value = k++;
        bt.addEventListener('mousedown', function() {
            carrousel.style.transform = "translateX(" + (-this.value*100) + "vw)"
        })
    }
}())