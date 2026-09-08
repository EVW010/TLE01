window.addEventListener('load', init);
let main
let answers = []
let green1
let green2
let green3
let green4
let red1
let red2
let red3
let red4

function init() {
    green1 = document.getElementById('green1')
    green2 = document.getElementById('green2')
    green3 = document.getElementById('green3')
    green4 = document.getElementById('green4')

    red1 = document.getElementById('red1')
    red2 = document.getElementById('red2')
    red3 = document.getElementById('red3')
    red4 = document.getElementById('red4')

    main = document.querySelector('main')
    main.addEventListener('click', mainClickEventHandler)
}

function mainClickEventHandler(e) {
    const button = e.target
    if (button.tagName !== 'BUTTON'){
        console.log('this is not a button')
    } else if (button.id = "1") {
        console.log('green button')
    }
    
}