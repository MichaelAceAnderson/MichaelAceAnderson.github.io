//var slideImg = document.getElementById("youtubeimg").src
const articleList = document.getElementsByTagName("article");
const elementSlideshow = document.getElementsByClassName("slideshow")[0];

let currentSlide = 0;

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
	const urlImg = slide.getElementsByTagName("img")[0].src;
	const titleText = slide.getElementsByTagName("h1")[0].textContent;

	const slideImg = elementSlideshow.getElementsByTagName("img")[0];
	const slideDesc = elementSlideshow.getElementsByClassName("description")[0];
	const slideTitle = elementSlideshow.getElementsByTagName("h1")[0];
	const pageNum = elementSlideshow.getElementsByClassName("pagenum")[0];

	if (document.body.contains(slide.getElementsByTagName("p")[0])) {
		const descText = slide.getElementsByTagName("p")[0].textContent;
		slideDesc.textContent = descText;
	}
	document.body.style.overflow = "hidden";
	elementSlideshow.style.display = "block";
	slideTitle.textContent = titleText;
	slideImg.src = urlImg;
	pageNum.textContent = n + 1 + "/" + articleList.length;
}

function hideSlide() {
	const slideImg = elementSlideshow.getElementsByTagName("img")[0];
	const slideDesc = elementSlideshow.getElementsByClassName("description")[0];
	const slideTitle = elementSlideshow.getElementsByTagName("h1")[0];
	const pageNum = elementSlideshow.getElementsByClassName("pagenum")[0];

	document.body.style.overflow = null;
	elementSlideshow.style.display = "none";
	slideTitle.textContent = null;
	slideDesc.textContent = null;
	pageNum.textContent = null;
	slideImg.src = "";
}
