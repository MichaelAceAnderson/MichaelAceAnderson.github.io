var articleList;
var elementSlideShow;
var slideImg;
var slideDesc;
var slideTitle;
var pageNum;
var currentSlide = -1;

// Après le chargement de la page
document.addEventListener("DOMContentLoaded", () => {
	articleList = document.getElementsByTagName("article");
	elementSlideShow = document.getElementsByClassName("slideshow")[0];
	slideImg = elementSlideShow.getElementsByTagName("img")[0];
	slideDesc = elementSlideShow.getElementsByClassName("description")[0];
	slideTitle = elementSlideShow.getElementsByTagName("h1")[0];
	pageNum = elementSlideShow.getElementsByClassName("pagenum")[0];

	slideImg.addEventListener("click", () => {
		toggleZoomImg(slideImg);
	});

	for (let i = 0; i < articleList.length; i++) {
		articleList[i]
			.getElementsByTagName("img")[0]
			.addEventListener("click", () => {
				showSlide(i);
			});
	}
});

/**
 * Affiche ou cache l'image en mode zoom
 * @param {*} img L'élément img à zoomer
 * @param {*} forceClose Forcer la fermeture du zoom
 */
function toggleZoomImg(img, forceClose = false) {
	if (forceClose == true || img.style.transform == "scale(1.5)") {
		img.style.transform = null;
		img.style.cursor = null;
	} else {
		img.style.transform = "scale(1.5)";
		img.style.cursor = "zoom-out";
	}
}

function slideKeyboard(event) {
	// event.preventDefault(); // Empêcher les actions par défaut (Ex: F5 actualiser)

	if (currentSlide != -1) {
		switch (event.key) {
			case "ArrowLeft": {
				moveSlide(-1);
				break;
			}
			case "ArrowRight": {
				moveSlide(1);
				break;
			}
			case "Escape":
			{
				hideSlide();
				break;
			}
		}
	}
}

function moveSlide(n) {
	if (currentSlide + n > articleList.length - 1) currentSlide = 0;
	else if (currentSlide + n < 0) currentSlide = articleList.length - 1;
	else currentSlide += n;
	showSlide(currentSlide);
}

function showSlide(n) {
	let slide = articleList[n];
	currentSlide = n;
	const urlImg = slide.getElementsByTagName("img")[0].src;
	const titleText = slide.getElementsByTagName("h1")[0].textContent;

	document.removeEventListener("keydown", slideKeyboard);

	if (document.body.contains(slide.getElementsByTagName("p")[0])) {
		const descText = slide.getElementsByTagName("p")[0].textContent;
		slideDesc.textContent = descText;
	}
	document.body.style.overflow = "hidden";
	elementSlideShow.style.display = "block";
	slideTitle.textContent = titleText;
	slideImg.src = urlImg;
	slideImg.alt = titleText;
	pageNum.textContent = n + 1 + "/" + articleList.length;

	document.addEventListener("keydown", slideKeyboard);
}

function hideSlide() {
	document.body.style.overflow = null;
	elementSlideShow.style.display = "none";
	slideTitle.textContent = null;
	slideDesc.textContent = null;
	pageNum.textContent = null;
	slideImg.src = "";
	slideImg.alt = "";
	currentSlide = -1;
	toggleZoomImg(slideImg, true);
	document.removeEventListener("keydown", slideKeyboard);
}
