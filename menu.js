let MenuBtn = document.getElementById('btn-Abrir')
let MenuList= document.getElementById('Menu-mobile')
let Overlty = document.getElementById('overflay-menu')

MenuBtn.addEventListener('click',function(){
    MenuList.classList.add('abrindo-menu')
})

MenuList.addEventListener('click',function(){
    MenuList.classList.remove('abrindo-menu')
})

Overlty.addEventListener('click',function(){
    MenuList.classList.remove('abrindo-menu')
})