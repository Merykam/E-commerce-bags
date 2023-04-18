const navbar= document.querySelector('.navbar');

window.addEventListener('scroll',()=>{
    if(scrollY>=270){
        navbar.classList.add('bg');
    }else{
        navbar.classList.remove('bg');

    }
})


const imgCollection= [...document.querySelectorAll('.imgCollection')]

imgCollection.map((item, i)=> {
    item.addEventListener('mouseover',()=>{
        imgCollection.map((image, index)=>{
            if(index != i){
                image.style.filter = `blur(10px)`;
                item.style.zIndex = 2;
            }
        })
    })
    item.addEventListener('mouseleave',()=>{
        imgCollection.map((image,index)=>{
            image.style=null;
        })
    })


})

