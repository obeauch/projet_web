let montagne1 = document.querySelector(".montagne1")

document.body.addEventListener('mousemove', e => {
    let x = e.clientX
    let y = e.clientY

    let largeur = window.innerWidth
    let hauteur = window.innerHeight

    let decalageX = -30
    let decalageY = -30

    let positionX = (x / largeur) * decalageX
    let positionY = (y / hauteur) * decalageY

    montagne1.style.transform = `translate(${positionX}px, ${positionY}px)`
})

let montagne2 = document.querySelector(".montagne2")

document.body.addEventListener('mousemove', e => {
    let x2 = e.clientX
    let y2 = e.clientY

    let largeur2 = window.innerWidth
    let hauteur2 = window.innerHeight

    let decalageX2 = -10
    let decalageY2 = -10

    let positionX2 = (x2 / largeur2) * decalageX2
    let positionY2 = (y2 / hauteur2) * decalageY2

    montagne2.style.transform = `translate(${positionX2}px, ${positionY2}px)`
})