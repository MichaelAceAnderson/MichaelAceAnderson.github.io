//var slideImg = document.getElementById("youtubeimg").src
const articleList = document.getElementsByTagName("article");
const elementSlideshow = document.getElementsByClassName("slideshow")[0];

for (let i = 0; i < articleList.length; i++) {
	articleList[i].addEventListener("click", () => {
		showSlide(articleList[i]);
	});
}
elementSlideshow.addEventListener("click", () => {
	hideSlide();
});

function showSlide(element) {
	const urlImg = element.getElementsByTagName("img")[0].src;
	const titleText = element.getElementsByTagName("h1")[0].textContent;
	const descText = element.getElementsByTagName("p")[0].textContent;

	const slideImg = elementSlideshow.getElementsByTagName("img")[0];
	const slideDesc = elementSlideshow.getElementsByClassName("description")[0];
	const slideTitle = elementSlideshow.getElementsByTagName("h1")[0];

	document.body.style.overflow = "hidden";
	elementSlideshow.style.display = "block";
	slideTitle.textContent = titleText;
	slideDesc.textContent = descText;
	slideImg.src = urlImg;
}

function hideSlide() {
	const slideImg = elementSlideshow.getElementsByTagName("img")[0];
	const slideDesc = elementSlideshow.getElementsByClassName("description")[0];
	const slideTitle = elementSlideshow.getElementsByTagName("h1")[0];

	document.body.style.overflow = "auto";
	elementSlideshow.style.display = "none";
	slideTitle.textContent = "";
	slideDesc.textContent = "";
	slideImg.src = "";
}
