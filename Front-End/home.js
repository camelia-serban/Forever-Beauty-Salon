let serviceIndex = 0

let serviceInfos = document.querySelectorAll('.product-info')

setTimeout(() => {
    serviceInfos[serviceIndex].classList.add('active')
}, 200);



//slide
let isSliding = false

slide = () => {
    if(isSliding) return

    isSliding = true

    let currService = document.querySelector('.product-info.active')
    currService.classList.remove('active')

    serviceIndex = serviceIndex + 1 > serviceInfos.length - 1  ? 0 : serviceIndex + 1
    serviceInfos[serviceIndex].classList.add('active')


    //image slide
    let listItems = document.querySelectorAll('.slide')

    let slider = document.querySelector('.slider')

    let reverseItems = Array.from(listItems).slice().reverse()

    left = reverseItems[0].offsetLeft + 'px'
    height = reverseItems[0].offsetHeight + 'px'
    width = reverseItems[0].offsetWidth + 'px'
    zIndex = reverseItems[0].style.zIndex

    reverseItems.forEach((el, index) => {
        if(index < listItems.length - 1) {
            el.style.left = reverseItems[index + 1].offsetLeft + 'px'
            el.style.height = reverseItems[index + 1].offsetHeight + 'px'
            el.style.width = reverseItems[index + 1].offsetWidth + 'px'
            el.style.zIndex = reverseItems[index + 1].style.zIndex
            el.style.transform = 'unset'
            el.style.opacity = 1

        }

        if(index === listItems.length - 1){
            el.style.transform = 'scale(1.5)'
            el.style.opacity = '0'

            let cln = el.cloneNode(true)

            setTimeout(() => {

                el.remove()

                cln.style.transform = 'scale(0)'
                cln.style.left = left
                cln.style.height = height
                cln.style.width = width
                cln.style.opacity = '0'
                cln.style.zIndex = '0'
                cln.style.animation = 'unset'

                slider.appendChild(cln)

                isSliding = false
            }, 1000);
            
        }
    })    
}

let slideControl = document.querySelector('.slide-control')
slideControl.onclick = () => {
    slide()
}