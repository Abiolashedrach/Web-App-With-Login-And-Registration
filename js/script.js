
const drop = document.querySelector('.icon');
const drop_content = document.querySelector('.Dash_Links');
const nav = document.querySelector('.pLinks');
const nav_btn = document.querySelector('.menu');
const time = new Date();
document.querySelector('.time').innerHTML = time;



nav_btn.addEventListener('click', ()=>{
  nav.classList.toggle('activate')
})

  drop.addEventListener('click', ()=>{
    drop_content.classList.toggle('actie');
  })

 