const seeSubscriber = document.querySelector('.see-sub');
const subListContainer = document.querySelector('.subscriber-list');


seeSubscriber.addEventListener('click', () =>{

    if(seeSubscriber.innerHTML === "See subscribers list"){
        subListContainer.classList.add('active')
        seeSubscriber.innerHTML = "hide subscriber list";
    }
     else{
        seeSubscriber.innerHTML = "See subscribers list";
        subListContainer.classList.remove('active')
    }

    
})




