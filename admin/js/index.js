menuicon = document.querySelector('#menuicon');
menu = document.querySelector('#menu');
visIcon1 = document.querySelector('#visIcon0');
visIcon2 = document.querySelector('#visIcon1');
visIcon3 = document.querySelector('#visIcon2');
title0 = document.querySelector('#title0');
title1 = document.querySelector('#title1');
title2 = document.querySelector('#title2');
title3 = document.querySelector('#title3');
title4 = document.querySelector('#title4');
title5 = document.querySelector('#title5');

menuicon.addEventListener('click', function(){
    visIcon1.classList.toggle('translate-x-6');
    visIcon2.classList.toggle('translate-x-6');
    visIcon3.classList.toggle('translate-x-6');
    menu.classList.toggle('menu');
    title0.classList.toggle('hidden');
    title1.classList.toggle('hidden');
    title2.classList.toggle('hidden');
    title3.classList.toggle('hidden');
    title4.classList.toggle('hidden');
    title5.classList.toggle('hidden');
  });