const articleList = document.getElementsByTagName("article");
const elementSlideShow = document.getElementsByClassName("slideshow")[0];
const slideImg = elementSlideShow.getElementsByTagName("img")[0];
const slideDesc = elementSlideShow.getElementsByClassName("description")[0];
const slideTitle = elementSlideShow.getElementsByTagName("h1")[0];
const pageNum = elementSlideShow.getElementsByClassName("pagenum")[0];

slideImg.addEventListener("click", () => {
	toggleZoomImg(slideImg);
});

let currentSlide = -1;

function toggleZoomImg(img, forceClose = false) {
	if (forceClose == true || img.style.transform == "scale(1.5)") {
		img.style.transform = null;
		img.style.cursor = null;
	} else {
		img.style.transform = "scale(1.5)";
		img.style.cursor = "zoom-out";
	}
}

function slideKeyboard() {
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
		}
	}
	event.preventDefault();
}

for (let i = 0; i < articleList.length; i++) {
	articleList[i]
		.getElementsByTagName("img")[0]
		.addEventListener("click", () => {
			showSlide(i);
		});
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
