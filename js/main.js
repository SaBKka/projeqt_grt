const burger_menu = document.querySelector('.burger-menu')
const el_ul = document.querySelector('.main-nav ul')

burger_menu.addEventListener('click' , () =>{
  el_ul.classList.toggle('active')
  burger_menu.classList.toggle('active')
})


  
  
  //slide-show #4


const slide_element = document.querySelectorAll('#slide_show .slider')

const prev_element = document.querySelector('.nav .prev')

const next_element = document.querySelector('.nav .next')

next_element.addEventListener('click' , () =>{
  nextSlide()
})
prev_element.addEventListener('click' , () =>{
  for(let i=0; i < slide_element.length; i++){
    if(slide_element[i].classList.contains('active')){
      slide_element[i].classList.remove('active')
      if(i - 1 >=0){
        slide_element[i - 1].classList.add('active')
      }else
      {
        slide_element[slide_element.length - 1].classList.add('active')
      }
      
      break;
    }
  }  
})

let contdown = 3
const countdown_sheel = document.querySelector('.countdown_sheel')

function count(){
  countdown_sheel.innerText = contdown
  if(contdown-- <=1){
    contdown = 3
    nextSlide()
  }
}
const time = setInterval(count, 2000)
function nextSlide()
{
  for(let i=0; i < slide_element.length; i++){
    if(slide_element[i].classList.contains('active')){
      slide_element[i].classList.remove('active')
      if(i + 1 != slide_element.length){
        slide_element[i + 1].classList.add('active')
      }else
      {
        slide_element[0].classList.add('active')
      }
      break;
    }
  } 
}
//scrool


  var d_header = document.querySelector('.d-header')

  window.addEventListener('scroll', () => {
    if(window.scrollY > 550) {
        d_header.classList.add('active')
        
    }else {
        d_header.classList.remove('active')
        
    }
})

//image zoom



