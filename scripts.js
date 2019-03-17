function typeEffect(element, speed) {
	var text = element.text();
	element.innerHTML = text;
	
	var i = 0;
	var timer = setInterval(function() {
					if (i < text.length) {
						element.innerHTML += text.charAt(i);
						i++;
					} else {
						clearInterval(timer);
					}
				}, speed);
}

$( document ).ready(function() {
  var speed = 75;
  var delay = 1* speed + speed;
  document.getElementById("home").innerHTML = "aaaaaaaaaaa";
  setTimeout(function(){
	  var elem = document.getElementById("home");
	  elem.innerHTML = "aaa";
    elem.css('display', 'inline-block');
    typeEffect(elem, speed);
  }, delay);
});

