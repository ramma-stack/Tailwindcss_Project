menuicon = document.querySelector('#menuicon');
closeicon = document.querySelector('#closeicon');
openmenu = document.querySelector('#openmenu');
closemenu = document.querySelector('#closemenu');
menu = document.querySelector('#menu');

menuicon.addEventListener('click', function(){     

   menu.classList.toggle('w-250');
   menu.classList.add('active');
   menuicon.classList.toggle('hidden');
   closeicon.classList.toggle('hidden');
  });
  closeicon.addEventListener('click', function(){     
    
    menu.classList.toggle('w-250');
    menu.classList.remove('active');
    menuicon.classList.toggle('hidden');
    closeicon.classList.toggle('hidden');
    
  });

  openmenu.addEventListener('click', function(){     

    menu.classList.toggle('-translate-x-64');
    openmenu.classList.toggle('hidden');
    closemenu.classList.toggle('hidden');
    
  });
  closemenu.addEventListener('click', function(){     

    menu.classList.toggle('-translate-x-64');
    openmenu.classList.toggle('hidden');
    closemenu.classList.toggle('hidden');
  });

