const mask = document.querySelector('.mask');
const modal = document.querySelector('.modal');
const modalBtn = document.querySelector('.mainblock__btn');
const modalExit = document.querySelector('.modal__exit');


modalBtn.addEventListener('click', function () {
	mask.classList.add('active');
	modal.classList.add('active');
});



modalExit.addEventListener('click', function () {
	mask.classList.remove('active');
	modal.classList.remove('active');
})